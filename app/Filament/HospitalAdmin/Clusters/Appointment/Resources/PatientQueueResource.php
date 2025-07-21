<?php

namespace App\Filament\HospitalAdmin\Clusters\Appointment\Resources;

use App\Filament\HospitalAdmin\Clusters\Appointment;
use App\Filament\HospitalAdmin\Clusters\Appointment\Resources\PatientQueueResource\Pages;
use App\Filament\HospitalAdmin\Clusters\Appointment\Resources\PatientQueueResource\RelationManagers;
use App\Filament\HospitalAdmin\Clusters\Doctors\Resources\DoctorResource;
use App\Filament\HospitalAdmin\Clusters\Patients\Resources\PatientResource;
use App\Models\Appointment as ModelsAppointment;
use App\Models\Doctor;
use App\Models\PatientQueue;
use App\Models\User;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Notifications\Notification;
use Filament\Pages\SubNavigationPosition;
use Filament\Resources\Resource;
use Filament\Support\Enums\FontWeight;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class PatientQueueResource extends Resource
{
    protected static ?string $model = PatientQueue::class;

    protected static ?int $navigationSort = 3;

    protected static ?string $cluster = Appointment::class;

    protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    public static function getLabel(): string
    {
        return __('Patient Queue');
    }

    public static function canViewAny(): bool
    {
        if (auth()->user()->hasRole(['Admin']) && !getModuleAccess('Appointments')) {
            return false;
        } elseif (auth()->user()->hasRole(['Admin', 'Doctor', 'Receptionist'])) {
            return true;
        }
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        $table = $table->modifyQueryUsing(function ($query) {
            $query->where('tenant_id', auth()->user()->tenant_id);

            if (getLoggedinDoctor()) {
                $doctorId = Doctor::where('user_id', getLoggedInUserId())->first();
                $query->whereHas('appointment', function (Builder $query) use ($doctorId) {
                    $query->where('doctor_id', '=', $doctorId->id);
                })->whereDate('created_at', Carbon::today());
            }if(getLoggedInUser()->hasRole('Receptionist')){
                $query->whereDate('created_at', Carbon::today());
            }
        });

        return $table
            ->paginated([10, 25, 50])
            ->columns([
                TextColumn::make('no')
                    ->badge('primary')
                    ->sortable()
                    ->searchable(),
                SpatieMediaLibraryImageColumn::make('appointment.patient.patientUser.profile')
                    ->label(__('messages.role.patient'))
                    ->circular()
                    ->defaultImageUrl(function ($record) {
                        if (!$record->appointment->patient->user->hasMedia(User::COLLECTION_PROFILE_PICTURES)) {
                            return getUserImageInitial($record->id, $record->appointment->patient->user->full_name);
                        }
                    })
                    ->sortable(['first_name'])
                    ->url(fn($record) => PatientResource::getUrl('view', ['record' => $record->appointment->patient->id]))
                    ->collection('profile')
                    ->width(50)->height(50),
                TextColumn::make('appointment.patient.patientUser.full_name')
                    ->label('')
                    ->description(fn($record) => $record->appointment->patient->patientUser->email ?? __('messages.common.n/a'))
                    ->color('primary')
                    ->weight(FontWeight::SemiBold)
                    ->formatStateUsing(fn($record) => '<a href="' . PatientResource::getUrl('view', ['record' => $record->appointment->patient->id]) . '" class="hoverLink">' . $record->appointment->patient->patientUser->full_name . '</a>')
                    ->html()
                    ->searchable(['users.first_name', 'users.last_name']),
                SpatieMediaLibraryImageColumn::make('appointment.doctor.doctorUser.profile')
                    ->label(__('messages.role.doctor'))
                    ->circular()
                    ->defaultImageUrl(function ($record) {
                        if (!$record->appointment->doctor->user->hasMedia(User::COLLECTION_PROFILE_PICTURES)) {
                            return getUserImageInitial($record->id, $record->appointment->doctor->user->full_name);
                        }
                    })
                    ->sortable(['first_name'])
                    ->url(fn($record) => DoctorResource::getUrl('view', ['record' => $record->appointment->doctor->id]))
                    ->collection('profile')
                    ->width(50)->height(50),
                TextColumn::make('appointment.doctor.doctorUser.full_name')
                    ->label('')
                    ->color('primary')
                    ->weight(FontWeight::SemiBold)
                    ->description(fn($record) => $record->appointment->doctor->doctorUser->email ?? __('messages.common.n/a'))
                    ->formatStateUsing(fn($record) => '<a href="' . DoctorResource::getUrl('view', ['record' => $record->appointment->doctor->id]) . '" class="hoverLink">' . $record->appointment->doctor->doctorUser->full_name . '</a>')
                    ->html()
                    ->searchable(['users.first_name', 'users.last_name']),
                TextColumn::make('appointment.opd_date')
                    ->label(__('messages.opd_patient.appointment_date'))
                    ->sortable()
                    ->badge()
                    ->getStateUsing(function ($record) {
                        $time = \Carbon\Carbon::parse($record->appointment->opd_date)->isoFormat('LT');
                        $date = \Carbon\Carbon::parse($record->appointment->opd_date)->translatedFormat('jS M, Y');
                        return "<div class='text-center'><span>{$time}</span><br><span>{$date}</span></div>";
                    })
                    ->html()
                    ->searchable(),
                TextColumn::make('appointment.is_completed')
                    ->label(__('messages.common.status'))
                    ->badge()
                    ->view('tables.columns.hospitalAdmin.patient_queue_status'),
            ])
            ->filters([
                //
            ])
            // ->recordAction(null)
            ->recordUrl(null)
            ->actions([
                Tables\Actions\Action::make('check_in')
                    ->icon('heroicon-o-arrow-right-end-on-rectangle')
                    ->iconButton()
                    ->color('success')
                    ->action(function ($record) {
                        $appointment = ModelsAppointment::find($record->appointment_id);

                        $appointment->update([
                            'is_completed' => ModelsAppointment::STATUS_CHECK_IN
                        ]);

                        return Notification::make()
                            ->title(__('Status change successfully.'))
                            ->success()
                            ->send();
                    })->requiresConfirmation()
                    ->hidden(function ($record) {
                        return $record->appointment->is_completed == ModelsAppointment::STATUS_CHECK_IN;
                    }),
                Tables\Actions\Action::make('check_out')
                    ->icon('heroicon-o-arrow-right-start-on-rectangle')
                    ->iconButton()->color('danger')
                    ->action(function ($record) {
                        $appointment = ModelsAppointment::find($record->appointment_id);

                        $record->delete();

                        $appointment->update([
                            'is_completed' => ModelsAppointment::STATUS_COMPLETED
                        ]);

                        return Notification::make()
                            ->title(__('Status change successfully.'))
                            ->success()
                            ->send();
                    })->requiresConfirmation()->hidden(function ($record) {
                        return $record->is_completed != ModelsAppointment::STATUS_PENDING;
                    }),
            ])
            ->actionsColumnLabel(__('messages.common.action'))
            ->emptyStateHeading(__('messages.common.no_data_found'));
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPatientQueues::route('/'),
        ];
    }
}
