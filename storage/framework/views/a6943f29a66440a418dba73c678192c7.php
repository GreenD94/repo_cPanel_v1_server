<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.appointments')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_css'); ?>
    
    
    
<?php $__env->stopSection(); ?>
<?php echo app('Tighten\Ziggy\BladeRouteGenerator')->generate(); ?>
<?php $__env->startSection('content'); ?>
    <?php
        $hospitalSettingValue = getSettingValue();
    ?>

    <div class="appointment-page">
        <!-- start hero section -->
        <section
            class="hero-section position-relative p-t-60 border-bottom-right-rounded border-bottom-left-rounded bg-gray overflow-hidden">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 <?php echo e(App::getLocale() == 'ar' ? 'text-lg-end' : 'text-lg-start'); ?> text-center">
                        <div class="hero-content">
                            <h1 class="mb-3 pb-1">
                                <?php echo e(__('messages.web_home.make_appointment')); ?>

                            </h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-lg-start justify-content-center mb-lg-0 mb-5">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo e(route('landing-home')); ?>"><?php echo e(__('messages.web_home.home')); ?></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <?php echo e(__('messages.web_home.make_appointment')); ?>

                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-6 text-lg-end text-center">
                        <img src="<?php echo e(asset('web_front/images/page-banner/make-appointment.png')); ?>" alt="Infy Care"
                            class="img-fluid" loading="lazy" />
                    </div>
                </div>
            </div>
        </section><!-- end hero section -->

        <?php
        $userName = request()->segment(2);
        ?>
        <section class="appointment-section p-t-120 position-relative">
            <div class="container">
                <?php echo $__env->make('flash::message', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <div class="alert alert-danger" id="validationErrorsBox" style="display: none"></div>
                <form id="appointmentForm" class="appointment-form" method="POST">
                <input type="hidden" name="hospital_username" value="<?php echo e(request()->segment(2)); ?>">
                <?php echo $__env->make('web.home.appointment_fields', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </form>
            </div>
        </section>
        <!-- start contact section -->
        <section class="contact-details-section p-t-120 p-b-120">
            <div class="container">
                <div class="row mt-xl-5">
                    <div class="col-lg-6">
                        <div class="text-lg-start text-center mb-lg-0 mb-5">
                            <h2 class="mb-3">
                                <?php echo e(getFrontSettingValue(\App\Models\FrontSetting::APPOINTMENT, 'appointment_title')); ?></h2>
                            <p class="mb-0">
                                <?php echo getFrontSettingValue(\App\Models\FrontSetting::APPOINTMENT, 'appointment_description'); ?>

                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-6 contact-details-block d-flex align-items-stretch">
                                <div class="card text-center mx-xl-2 flex-fill">
                                    <div class="icon-details-box d-flex align-items-center justify-content-center mx-auto">
                                        <i class="fa-solid fa-phone fs-3"></i>
                                    </div>
                                    <div class="card-body text-center d-flex flex-column pb-4">
                                        <a href="tel:<?php echo e($hospitalSettingValue['hospital_phone']['value']); ?>"
                                            class="text-decoration-none fs-5 text-success my-2">
                                            <?php echo e($hospitalSettingValue['hospital_phone']['value']); ?>

                                        </a>
                                        <span class="text-secondary fw-light">
                                            <?php echo e(__('messages.web_appointment.call_now_and_get_a_free_consulting')); ?>

                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 contact-details-block d-flex align-items-stretch">
                                <div class="card text-center mx-xl-2 flex-fill">
                                    <div class="icon-details-box d-flex align-items-center justify-content-center mx-auto">
                                        <i class="fa-solid fa-envelope fs-3"></i>
                                    </div>
                                    <div class="card-body text-center d-flex flex-column pb-4">
                                        <a href="mailto:<?php echo e($hospitalSettingValue['hospital_email']['value']); ?>"
                                            class="text-decoration-none fs-5 text-success my-2">
                                            <?php echo e($hospitalSettingValue['hospital_email']['value']); ?>

                                        </a>
                                        <span class="text-secondary fw-light">Contact Hospital</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <div class="btn-group mt-4 mt-xl-5">
                        <?php if($hospitalSettingValue['facebook_url']['value'] != '' && !empty($hospitalSettingValue['facebook_url']['value'])): ?>
                            <a href="<?php echo e($hospitalSettingValue['facebook_url']['value']); ?>" class="btn btn-primary fs-4"
                                target="_blank" style="<?php echo e(App::getLocale() == 'ar'
                                ? '    border-top-left-radius: 0;
                                border-bottom-left-radius: 0;
                                border-top-right-radius: 10px;
                                border-bottom-right-radius: 10px;;'
                                : ''); ?>">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        <?php endif; ?>
                        <?php if($hospitalSettingValue['twitter_url']['value'] != '' && !empty($hospitalSettingValue['twitter_url']['value'])): ?>
                            <a href="<?php echo e($hospitalSettingValue['twitter_url']['value']); ?>" class="btn btn-primary fs-4"
                                target="_blank">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        <?php endif; ?>
                        <?php if($hospitalSettingValue['instagram_url']['value'] != '' && !empty($hospitalSettingValue['instagram_url']['value'])): ?>
                            <a href="<?php echo e($hospitalSettingValue['instagram_url']['value']); ?>" class="btn btn-primary fs-4"
                                target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        <?php endif; ?>
                        <?php if($hospitalSettingValue['linkedIn_url']['value'] != '' && !empty($hospitalSettingValue['linkedIn_url']['value'])): ?>
                            <a href="<?php echo e($hospitalSettingValue['linkedIn_url']['value']); ?>" class="btn btn-primary fs-4"
                                target="_blank" style="<?php echo e(App::getLocale() == 'ar'
                                ? '    border-top-right-radius: 0;
                                border-bottom-right-radius: 0;
                                border-top-left-radius: 10px;
                                border-bottom-left-radius: 10px;;'
                                : ''); ?>">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <?php echo $__env->make('appointments.templates.appointment_slot', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <input type="hidden" name="doctorDepartmentUrl" class="doctorDepartmentUrl" value="<?php echo e(route('appointment.doctor.list')); ?>">
        <input type="hidden" name="doctorUrl" class="doctorUrl" value="<?php echo e(route('appointment.doctors.list')); ?>">
        <input type="hidden" name="appointmentSaveUrl" class="appointmentSaveUrl" value="<?php echo e(route('web.appointments.store')); ?>">
        <input type="hidden" name="doctorScheduleList" class="doctorScheduleList" value="<?php echo e(url('appointment-doctor-schedule-list')); ?>">
        <input type="hidden" name="isEdit" class="isEdit" value="false">
        <input type="hidden" name="isCreate" class="isCreate" value="true">
        <input type="hidden" name="stripeConfigKey" id="webStripeConfigKey" value="<?php echo e($stripeKey); ?>">
        <input type="hidden" name="razorpayDataKey" class="razorpayDataKey" value="<?php echo e(getSelectedPaymentGateway('razorpay_key')); ?>">
        <input type="hidden" name="razorpayDataName" class="razorpayDataName" value="<?php echo e(getAppName()); ?>">
        <input type="hidden" name="razorpayDataImage" class="webRazorpayDataImage" value="<?php echo e(asset(getLogoUrl())); ?>">
        <input type="hidden" name="razorpayDataCallBackURL" class="webRazorpayDataCallBackURL" value="<?php echo e(route('web.appointment.razorpay.success')); ?>">
        <input type="hidden" name="razorpayPaymentFailed" class="patientRazorpayPaymentFailed" value="<?php echo e(route('patient.razorpay.failed')); ?>">
        <input type="hidden" name="getBookingSlot" class="getBookingSlot" value="<?php echo e(route('appointment.get.booking.slot')); ?>">

        <?php
            $tenant = Auth::user()->tenant_id;
            $user = App\Models\User::whereTenantId($tenant)->whereNotNull('username')->first();
        ?>
        <?php if(getLoggedInUser()->hasRole('Admin')): ?>
        <input type="hidden" name="backUrl" class="backUrl" value="<?php echo e(route('appointment', ['username' => Auth::user()->username])); ?>">

        <?php else: ?>
        <input type="hidden" name="backUrl" class="backUrl" value="<?php echo e(route('appointment', ['username' => $user->username])); ?>">

        <?php endif; ?>
        <?php if(getSettingForReCaptcha($userName)): ?>
        <input type="hidden" name="isGoogleCaptchaEnabled" class="isGoogleCaptchaEnabled" value="<?php echo e(getSettingForReCaptcha($userName)); ?>">

        <?php endif; ?>
    </div>

    <!-- End Appointment Form Area -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_scripts'); ?>
    
    
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="//js.stripe.com/v3/"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        let options = {
            'key': "<?php echo e(getSelectedPaymentGateway('razorpay_key')); ?>",
            'amount': 0, //  100 refers to 1
            'currency': 'INR',
            'name': "<?php echo e(getAppName()); ?>",
            'order_id': '',
            'description': '',
            'image': "<?php echo e(asset(getLogoUrl())); ?>", // logo here
            'callback_url': "<?php echo e(route('web.appointment.razorpay.success')); ?>",
            'prefill': {
                'appointment_id': '',
                'amount': '',
                'payment_type': '',
            },
            'readonly': {
                'appointment_id': 'true',
                'amount': 'true',
                'payment_type': 'true',
            },
            'modal': {
                'ondismiss': function() {
                    $.ajax({
                        type: 'POST',
                        url: route('web.appointment.razorpay.failed'),
                        data: $("#appointmentForm").serialize(),
                        success: function(result) {
                            if (result.success) {
                                displayErrorMessage(result.message.message);
                                setTimeout(function() {
                                    window.location.href = result.message.url
                                }, 5000);
                            }
                        },
                        error: function(result) {
                            displayErrorMessage(result.responseJSON.message)
                        },
                    });
                },
            },
        }
    </script>
    <script src="<?php echo e(asset('backend/js/moment-round/moment-round.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.layouts.front', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/vzaiylnbi7hv/public_html/resources/views/web/home/appointment.blade.php ENDPATH**/ ?>