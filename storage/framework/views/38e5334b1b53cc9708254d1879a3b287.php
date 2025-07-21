<!doctype html>
<html lang="en" <?php if(App::getLocale() == 'ar'): ?> direction="rtl" dir="rtl" style="direction: rtl" <?php endif; ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="title" content="<?php echo e(getAppName()); ?>">

    <meta name="keywords" content="Hospital Management System" />

    <meta name="description" content="Hospital Management System | HMS" />
    <meta name="author" content="hms.infyom.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="turbo-cache-control" content="no-cache">
    <title><?php echo $__env->yieldContent('title'); ?> | <?php echo e(getAppName()); ?></title>

    <?php
        $hospitalSettingValue = getSettingValue();
    ?>
    <link rel="icon" href="<?php echo e(asset(App\Models\Setting::where('key', '=', 'favicon')->first()->value ?? '')); ?>"
        type="image/png">
    <?php if(App::getLocale() == 'ar'): ?>
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/hospital-front/css/hospital-front-rtl.css'); ?>

        
    <?php endif; ?>


    <!-- Links of CSS files -->
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    <!-- Links of JS files -->
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    <?php echo app('Illuminate\Foundation\Vite')('resources/assets/hospital-front/scss/hospital-bootstrap.scss'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/assets/sass/selectize-input.scss'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/front-pages.css'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('front-assets/css/intlTelInput.css')); ?>" crossorigin="anonymous">

    <?php echo $__env->yieldContent('page_css'); ?>
    <?php echo $__env->yieldContent('css'); ?>

    
    
    
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
    
    <script src="<?php echo e(asset('landing_front/js/moment.min.js')); ?>"></script>
    <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/turbo.js'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/assets/theme/js/plugins.js'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo e(asset('front-assets/js/intlTelInput.min.js')); ?>"></script>
    <script src="<?php echo e(asset('front-assets/js/utils.min.js')); ?>"></script>
    <script src="<?php echo e(asset('web_front/js/jquery.meanmenu.js')); ?>"></script>
    <script src="<?php echo e(asset('web_front/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('web_front/js/slick.min.js')); ?>"></script>
    <script src="<?php echo e(asset('web_front/js/jquery-ui.js')); ?>"></script>
    <script src="<?php echo e(asset('web_front/js/jquery.appear.js')); ?>"></script>
    <script src="<?php echo e(asset('web_front/js/jquery.magnific-popup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('web_front/js/aos.js')); ?>"></script>
    <script src="<?php echo e(asset('web_front/js/jquery.ajaxchimp.min.js')); ?>"></script>
    <script src="<?php echo e(asset('web_front/js/form-validator.min.js')); ?>"></script>
    <script src="<?php echo e(asset('web_front/js/selectize.min.js')); ?>"></script>
    <script src="<?php echo e(asset('web_front/js/main.js')); ?>"></script>
    <script src="<?php echo e(asset('web_front/js/jquery-ui-i18n.min.js')); ?>"></script>
    

    <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/custom/helpers.js'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/custom/custom.js'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/custom/front-side-phone-number-country-code.js'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/web/appointment.js'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/web/contact_us.js'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/web/web.js'); ?>
    <script src="<?php echo e(asset('messages.js')); ?>"></script>
    
    <?php if(isset($userName) && getSettingForReCaptcha($userName)): ?>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"></script>
    <?php endif; ?>

    <script>
        $(document).ready(function() {
            $('.alert').delay(5000).slideUp(300)
        })
        $(document).on('click', '.languageSelection', function() {
            let languageName = $(this).data('prefix-value')

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                type: 'POST',
                url: '/change-language',
                data: {
                    languageName: languageName
                },
                success: function() {
                    location.reload()
                },
            })
        })
    </script>
    <script data-turbo-eval="false">
        let frontLanguage = "<?php echo e(checkLanguageSession()); ?>";
        Lang.setLocale(frontLanguage);
    </script>

    <?php echo $__env->yieldContent('page_scripts'); ?>
    <?php echo $__env->yieldContent('scripts'); ?>
</head>

<body>
    
    <?php echo $__env->make('web.layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('web.layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- Start Go Top Area -->
    
    
    
    <div class="go-top bg-success d-flex align-items-center justify-content-center">
        <i class="fas fa-chevron-up next-arrow"></i>
        <input type="hidden" name="userCurrentLanguage" value="<?php echo e(checkLanguageSession()); ?>"
            class="userCurrentLanguage">
        <input type="hidden" name="curruntLanguage" value="<?php echo e(App::getLocale()); ?>" class="curruntLanguage">
    </div>
    <!-- End Go Top Area -->
</body>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

</html>
<?php /**PATH /home/vzaiylnbi7hv/public_html/resources/views/web/layouts/front.blade.php ENDPATH**/ ?>