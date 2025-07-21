<!-- Start Navbar Area -->
<?php
    $user = getUser();
    $hospitalSettingValue = getSettingValue();
?>

<header class="position-relative">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-1 col-4">
                <a href="<?php echo e(route('front', $user->username)); ?>" data-turbo="false" class="header-logo">
                    <img src="<?php echo e(asset($hospitalSettingValue['app_logo']['value'] ?? '')); ?>" alt="Infy HMS" class="img-fluid" />
                </a>
            </div>
            <div class="col-lg-11 col-8">
                <nav class="navbar navbar-expand-xl navbar-light justify-content-end py-0">
                    <button class="navbar-toggler border-0 p-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav align-items-center py-2 py-lg-0">
                            <li class="nav-item">
                                <a class="nav-link <?php echo e(Route::currentRouteName() == 'front' ? 'active' : ''); ?>"
                                    aria-current="page" href="<?php echo e(route('front', $user->username)); ?>">
                                    <?php echo e(__('messages.web_home.home')); ?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo e(Route::currentRouteName() == 'our-services' ? 'active' : ''); ?>"
                                    aria-current="page" href="<?php echo e(route('our-services', $user->username)); ?>">
                                    <?php echo e(__('messages.web_home.services')); ?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo e(Route::currentRouteName() == 'our-doctors' ? 'active' : ''); ?>"
                                    aria-current="page" href="<?php echo e(route('our-doctors', $user->username)); ?>">
                                    <?php echo e(__('messages.web_home.doctors')); ?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo e(Route::currentRouteName() == 'aboutUs' ? 'active' : ''); ?>"
                                    aria-current="page" href="<?php echo e(route('aboutUs', $user->username)); ?>">
                                    <?php echo e(__('messages.web_menu.about')); ?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo e(Route::currentRouteName() == 'contact' ? 'active' : ''); ?>"
                                    aria-current="page" href="<?php echo e(route('contact', $user->username)); ?>">
                                    <?php echo e(__('messages.web_home.contact')); ?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"
                                    <?php echo e(Request::is('terms-of-service', 'privacy-policy') ? 'active' : ''); ?>>
                                    <?php echo e(__('messages.web_menu.our_features')); ?>

                                    <i class="fa-solid fa-angle-down <?php echo e(App::getLocale() == 'ar' ? 'me-1' : 'ms-1'); ?>"></i>
                                </a>
                                <ul class="nav submenu">
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo e(Route::is('appointment') ? 'active' : ''); ?>"
                                            href="<?php echo e(route('appointment', $user->username)); ?>">
                                            <?php echo e(__('messages.web_menu.appointment')); ?>

                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link <?php echo e(Route::is('working-hours') ? 'active' : ''); ?>"
                                            href="<?php echo e(route('working-hours', $user->username)); ?>">
                                            <?php echo e(__('messages.web_menu.working_hours')); ?>

                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo e(Route::is('testimonials') ? 'active' : ''); ?>"
                                            href="<?php echo e(route('testimonials', $user->username)); ?>">
                                            <?php echo e(__('messages.web_home.testimonials')); ?>

                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo e(Route::is('terms-of-service') ? 'active' : ''); ?>"
                                            href="<?php echo e(route('terms-of-service', $user->username)); ?>">
                                            <?php echo e(__('messages.web_home.terms_of_service')); ?>

                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo e(Route::is('privacy-policy') ? 'active' : ''); ?> <?php echo e(App::getLocale() == 'ar' ? 'me-4' : ''); ?>"
                                            href="<?php echo e(route('privacy-policy', $user->username)); ?>">
                                            <?php echo e(__('messages.web_home.privacy_policy')); ?>

                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link dropdown-link" href="javascript:void(0)">
                                    <?php echo e(__('messages.language.' . getCurrentLanguageName())); ?></a>
                                <ul class="nav submenu language-menu">
                                    <?php $__currentLoopData = getLanguages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php $__currentLoopData = \App\Models\User::LANGUAGES_IMAGE; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imageKey => $imageValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($imageKey == $key): ?>
                                                <li class="nav-item languageSelection"
                                                    data-prefix-value="<?php echo e($key); ?>">
                                                    <a href="javascript:void(0)"
                                                        class="nav-link d-flex align-items-center">
                                                        <img class="country-flag <?php echo e(App::getLocale() == 'ar' ? 'ms-2 me-4' : 'me-2'); ?>"
                                                            src="<?php echo e(asset($imageValue)); ?>" />
                                                        <?php echo e($value); ?></a>
                                                </li>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </li>
                        </ul>
                        <div class="text-xl-end header-btn-grp ms-xl-3">
                            <?php if(Auth::user() && !Auth::user()->hasRole('Super Admin')): ?>
                                <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Admin')): ?>
                                    <a href="<?php echo e(route('filament.auth.auth.login')); ?>" data-turbo="false"
                                        class="btn btn-success mb-3 mb-xl-0 <?php echo e(App::getLocale() == 'ar' ? 'ms-2' : 'me-2'); ?>"
                                        data-turbo="false">
                                        <?php echo e(__('messages.dashboard.dashboard')); ?>

                                    </a>
                                <?php endif; ?>
                                <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Patient')): ?>
                                    <a href="<?php echo e(url('patient/my-cases')); ?>" data-turbo="false"
                                        class="btn btn-success mb-3 mb-xl-0 <?php echo e(App::getLocale() == 'ar' ? 'ms-2' : 'me-2'); ?>"
                                        data-turbo="false">
                                        <?php echo e(__('messages.dashboard.dashboard')); ?>

                                    </a>
                                <?php endif; ?>
                                <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Doctor')): ?>
                                    <a href="<?php echo e(url('employee/doctor')); ?>" data-turbo="false"
                                        class="btn btn-success mb-3 mb-xl-0 <?php echo e(App::getLocale() == 'ar' ? 'ms-2' : 'me-2'); ?>"
                                        data-turbo="false">
                                        <?php echo e(__('messages.dashboard.dashboard')); ?>

                                    </a>
                                <?php endif; ?>
                                <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Nurse')): ?>
                                    <a href="<?php echo e(url('bed-types')); ?>" data-turbo="false"
                                        class="btn btn-success mb-3 mb-xl-0 <?php echo e(App::getLocale() == 'ar' ? 'ms-2' : 'me-2'); ?>"
                                        data-turbo="false">
                                        <?php echo e(__('messages.dashboard.dashboard')); ?>

                                    </a>
                                <?php endif; ?>
                                <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Receptionist')): ?>
                                    <a href="<?php echo e(url('appointments')); ?>" data-turbo="false"
                                        class="btn btn-success mb-3 mb-xl-0 <?php echo e(App::getLocale() == 'ar' ? 'ms-2' : 'me-2'); ?>"
                                        data-turbo="false">
                                        <?php echo e(__('messages.dashboard.dashboard')); ?>

                                    </a>
                                <?php endif; ?>
                                <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Pharmacist')): ?>
                                    <a href="<?php echo e(url('employee/doctor')); ?>" data-turbo="false" class="default-btn"
                                        data-turbo="false">
                                        <?php echo e(__('messages.dashboard.dashboard')); ?>

                                    </a>
                                <?php endif; ?>
                                <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Accountant')): ?>
                                    <a href="<?php echo e(url('accounts')); ?>" data-turbo="false"
                                        class="btn btn-success mb-3 mb-xl-0 <?php echo e(App::getLocale() == 'ar' ? 'ms-2' : 'me-2'); ?>"
                                        data-turbo="false">
                                        <?php echo e(__('messages.dashboard.dashboard')); ?>

                                    </a>
                                <?php endif; ?>
                                <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Case Manager')): ?>
                                    <a href="<?php echo e(url('employee/doctor')); ?>" data-turbo="false"
                                        class="btn btn-success mb-3 mb-xl-0 <?php echo e(App::getLocale() == 'ar' ? 'ms-2' : 'me-2'); ?>"
                                        data-turbo="false">
                                        <?php echo e(__('messages.dashboard.dashboard')); ?>

                                    </a>
                                <?php endif; ?>
                                <?php if (\Illuminate\Support\Facades\Blade::check('role', 'Lab Technician')): ?>
                                    <a href="<?php echo e(url('employee/doctor')); ?>" data-turbo="false"
                                        class="btn btn-success mb-3 mb-xl-0 <?php echo e(App::getLocale() == 'ar' ? 'ms-2' : 'me-2'); ?>"
                                        data-turbo="false">
                                        <?php echo e(__('messages.dashboard.dashboard')); ?>

                                    </a>
                                <?php endif; ?>
                            <?php else: ?>
                                <a href="<?php echo e(route('filament.auth.auth.login')); ?>" data-turbo="false"
                                    class="btn btn-success btn-sm me-xxl-3 mb-3 rounded-2 mb-xl-0 <?php echo e(App::getLocale() == 'ar' ? 'ms-2' : 'me-2'); ?>"
                                    data-turbo="false">
                                    <?php echo e(__('messages.web_menu.login')); ?>

                                </a>
                            <?php endif; ?>
                            <a href="<?php echo e(route('appointment', $user->username)); ?>"
                                class="btn btn-primary btn-sm mb-3 rounded-2 mb-xl-0">
                                <?php echo e(__('messages.web_home.book_appointment')); ?>

                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<?php /**PATH /home/vzaiylnbi7hv/public_html/resources/views/web/layouts/header.blade.php ENDPATH**/ ?>