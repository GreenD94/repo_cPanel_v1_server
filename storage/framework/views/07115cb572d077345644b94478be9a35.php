<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.landing.pricing')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_css'); ?>

    <link href="<?php echo e(asset('landing_front/css/jquery.toast.min.css')); ?>" rel="stylesheet" type="text/css"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <section class="hero-section pt-120 bg-light mb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center mb-lg-0 mb-md-5 mb-sm-4 mb-3 <?php echo e(App::getLocale() == 'ar' ? 'text-lg-end' : 'text-lg-start'); ?>">
                    <div class="hero-content">
                        <h1 class="mb-0">
                            <?php echo e(__('messages.landing.pricing')); ?>

                        </h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-lg-start justify-content-center mb-lg-0 pb-lg-4">
                                <li class="breadcrumb-item"><a
                                            href="<?php echo e(route('landing-home')); ?>"><?php echo e(__('messages.landing.home')); ?> </a>
                                </li>
                                <li class="breadcrumb-item text-cyan fs-18"
                                    aria-current="page"><?php echo e(__('messages.landing.pricing')); ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-6 text-lg-end text-center">
                    <img src="<?php echo e(asset('landing_front/images/about-hero-img.png')); ?>" alt="HMS-Sass" class="img-fluid" loading="lazy"/>
                </div>
            </div>
        </div>
    </section>

    <div class="page-content">
        <?php echo $__env->make('flash::message', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php echo $__env->make('landing.home.pricing_plan_page', ['screenFrom' => Route::currentRouteName()], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <input type="hidden" name="getLoggedInUserdata" value="<?php echo e(getLoggedInUser()); ?>" class="getLoggedInUser">
        <input type="hidden" name="logInUrl" value="<?php echo e(route('filament.auth.auth.login')); ?>" class="logInUrl">
        <input type="hidden" name="fromPricing" value="true" class="fromPricing">
        <input type="hidden" name="makePaymentURL" value="<?php echo e(route('purchase-subscription')); ?>" class="makePaymentURL">
        <input type="hidden" name="subscribeText" value="<?php echo e(__('messages.subscription_pricing_plans.choose_plan')); ?>" class="subscribeText">


    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_scripts'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>

    <script>
        
        
        
        
        

    </script>
    
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('landing.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/vzaiylnbi7hv/public_html/resources/views/landing/home/pricing.blade.php ENDPATH**/ ?>