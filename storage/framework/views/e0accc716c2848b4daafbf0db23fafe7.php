<!DOCTYPE html>
<html <?php if(App::getLocale() == 'ar'): ?> direction="rtl" dir="rtl" style="direction: rtl" <?php endif; ?>>

<head>
    <meta charset="UTF-8">
    <title><?php echo $__env->yieldContent('title'); ?> | <?php echo e(getSuperAdminSettingKeyValue('app_name')); ?> </title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <meta name="google" content="notranslate">
    <?php
        $settingValue = getSuperAdminSettingValue();
    ?>

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="turbo-cache-control" content="no-cache">
    
    <?php if(App::getLocale() == 'ar'): ?>
        <link href="<?php echo e(asset('front-assets/css/landing-rtl.css')); ?>" rel="stylesheet" type="text/css" />
    <?php endif; ?>
    <link rel="icon" href="<?php echo e(asset($settingValue['favicon']['value'])); ?>" type="image/png">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

    <?php echo app('Illuminate\Foundation\Vite')('resources/css/landing_front.css'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/assets/sass/selectize-input.scss'); ?>

    
    

    <?php echo app('Illuminate\Foundation\Vite')('resources/css/landing-pages.css'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <?php echo $__env->yieldContent('page_css'); ?>
    <?php echo $__env->yieldContent('css'); ?>
    <?php echo app('Tighten\Ziggy\BladeRouteGenerator')->generate(); ?>
    <script src="<?php echo e(asset('web_front/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/landing-third-party.js')); ?>"></script>
    <script src="<?php echo e(asset('/web_front/js/slick.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/web_front/js/jquery.meanmenu.js')); ?>"></script>
    <script src="<?php echo e(asset('/web_front/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/web_front/js/jquery-ui.js')); ?>"></script>
    <script src="<?php echo e(asset('/web_front/js/jquery.appear.js')); ?>"></script>
    <script src="<?php echo e(asset('/web_front/js/jquery.magnific-popup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/web_front/js/aos.js')); ?>"></script>
    <script src="<?php echo e(asset('/web_front/js/jquery.ajaxchimp.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/web_front/js/form-validator.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/web_front/js/selectize.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/web_front/js/select2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/web_front/js/main.js')); ?>"></script>
    <script src="<?php echo e(asset('/web_front/js/toastr.min.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="//js.stripe.com/v3/"></script>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>




    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"></script>
    <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/turbo.js'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/assets/theme/js/plugins.js'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/custom/helpers.js'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/custom/custom.js'); ?>
    
    <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/subscriptions/free-subscription.js'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/subscriptions/subscription-option.js'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/subscriptions/subscription.js'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/subscribe/create.js'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/super_admin/contact_enquiry/contact_enquiry.js'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/landing/languageChange/languageChange.js'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/hospital_type/hospital_type.js'); ?>
    
    <script src="<?php echo e(asset('messages.js')); ?>"></script>

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/landing-front-pages.js'); ?>
    
    <script>
        // $(document).ready(function(){
        //     $('.payment-type').selectize();
        // });
        if ($('.mySwiper').length) {
            var swiper = new Swiper('.mySwiper', {
                spaceBetween: 40,
                centeredSlides: false,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1.2,
                        spaceBetween: 20,
                    },
                    576: {
                        slidesPerView: 1.5,
                        spaceBetween: 20,
                    },
                    992: {
                        slidesPerView: 2.5,
                    },
                    1400: {
                        slidesPerView: 3.5,
                    },
                },
            })
        }

        setTimeout(function() {
            $('.custom-message').fadeOut()
        }, 2000)
    </script>
    <script data-turbo-eval="false">
        let frontLanguage = "<?php echo e(checkLanguageSession()); ?>";
        Lang.setLocale(frontLanguage);
    </script>
</head>

<body>

    
    
    
    
    
    
    
    
    
    <div class="page-wrapper">

        <?php echo $__env->make('landing.layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('landing.layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>
    


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <?php echo $__env->yieldContent('page_scripts'); ?>
    <?php echo $__env->yieldContent('scripts'); ?>
    
</body>

</html>













































































<?php /**PATH /home/vzaiylnbi7hv/public_html/resources/views/landing/layouts/app.blade.php ENDPATH**/ ?>