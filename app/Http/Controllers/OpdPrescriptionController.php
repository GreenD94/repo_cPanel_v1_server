<?php

namespace App\Http\Controllers;

use App\Models\OpdPrescription;
use App\Repositories\OpdPrescriptionRepository;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Http;

class OpdPrescriptionController extends AppBaseController
{
    public function convertToPDF($id)
    {
        if (app()->getLocale() == 'zh') {
            app()->setLocale('en');
        }
        $opdPrescription = OpdPrescription::find($id);

        $data = app(OpdPrescriptionRepository::class)->getSettingList();
        $imageData = Http::get($data['app_logo'])->body();
        $imageType = pathinfo($data['app_logo'], PATHINFO_EXTENSION);
        $base64Image = 'data:image/'.$imageType.';base64,'.base64_encode($imageData);

        $data['app_logo'] = $base64Image;

        $pdf = Pdf::loadView('opd_prescriptions.opd_prescription_pdf', compact('opdPrescription', 'data'));

        return $pdf->stream(__('messages.delete.prescription'));
    }
}
