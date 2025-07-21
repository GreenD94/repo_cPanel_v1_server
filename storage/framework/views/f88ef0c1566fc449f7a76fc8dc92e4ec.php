<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.web_home.about_us')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_css'); ?>
    

    <link href="<?php echo e(asset('landing_front/css/jquery.toast.min.css')); ?>" rel="stylesheet" type="text/css"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="about-page ">
        <!-- start hero section -->
        <section class="hero-section pt-120 bg-light ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-center mb-lg-0 mb-md-5 mb-sm-4 mb-3 <?php echo e(App::getLocale() == 'ar' ? 'text-lg-end' : 'text-lg-start'); ?>">
                        <div class="hero-content ">
                            <h1 class="mb-0">
                                <?php echo e(__('messages.web_home.about_us')); ?>

                            </h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-lg-start justify-content-center  mb-lg-0 pb-lg-4 ">
                                    <li class="breadcrumb-item "><a href="<?php echo e(route('landing-home')); ?>"
                                                                    class="fs-18"><?php echo e(__('messages.web_home.home')); ?> </a>
                                    </li>
                                    <li class="breadcrumb-item text-cyan fs-18"
                                        aria-current="page"><?php echo e(__('messages.web_home.about_us')); ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-6 text-lg-end text-center">
                        <img src="<?php echo e(asset('landing_front/images/about-hero-img.png')); ?>" alt="HMS-Sass"
                             class="img-fluid" loading="lazy"/>
                    </div>
                </div>
            </div>
        </section>
        <!-- end hero section -->

        <!--start work-section -->
        <section class="work-section py-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-heading ">
                            <h2><?php echo e($landingAboutUs['text_main']); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="work-content">
                    <div class="row">
                        <div class="col-md-4 text-center mb-md-0 mb-2">
                            <span class="text-cyan bg-white text-center fs-64">
                                <img src="<?php echo e(isset($landingAboutUs['card_img_one']) ? asset($landingAboutUs['card_img_one']) : ''); ?>"
                                     alt="" width="40" height="40" loading="lazy">
                            </span>
                            <h3><?php echo e($landingAboutUs['card_one_text']); ?></h3>
                            <p><?php echo $landingAboutUs['card_one_text_secondary']; ?></p>
                        </div>
                        <div class="col-md-4 text-center mb-md-0 mb-2">
                            <span class="text-cyan bg-white text-center fs-64">
                                  <img src="<?php echo e(isset($landingAboutUs['card_img_two']) ? asset($landingAboutUs['card_img_two']) : ''); ?>"
                                       alt="" width="40" height="40" loading="lazy">
                            </span>
                            <h3><?php echo e($landingAboutUs['card_two_text']); ?></h3>
                            <p><?php echo $landingAboutUs['card_two_text_secondary']; ?></p>
                        </div>
                        <div class="col-md-4 text-center ">
                            <span class="text-cyan bg-white text-center fs-64">
                                <img src="<?php echo e(isset($landingAboutUs['card_img_three']) ? asset($landingAboutUs['card_img_three']) : ''); ?>"
                                     alt="" width="40" height="40" loading="lazy">
                            </span>
                            <h3><?php echo e($landingAboutUs['card_three_text']); ?></h3>
                            <p><?php echo $landingAboutUs['card_three_text_secondary']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end work-section -->

        <!-- start-about-section -->
        <section class="about-section bg-light py-120">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-8 col-md-12">
                        <div class="row justify-content-between ">
                            <div class=" col-md-6 about-content-block mb-4 ">
                                <div class="about-content bg-white py-20 h-100">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-md-3 col-sm-2 col-3">
                                            <img class="card-img"
                                                 src="<?php echo e(isset($sectionFour['img_url_one']) ? asset($sectionFour['img_url_one']) : asset('landing_front/images/seo.png')); ?>"
                                                 alt="built-seo" loading="lazy">
                                        </div>
                                        <div class="col-md-9 col-sm-10 ">
                                            <div class="card-body p-0">
                                                <h3 class="mt-sm-0 mt-3"><?php echo e($sectionFour['card_text_one']); ?></h3>
                                                <p class="fs-14"><?php echo $sectionFour['card_text_one_secondary']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 about-content-block mb-4">
                                <div class="about-content bg-white py-20  h-100">
                                    <div class="row justify-content-between align-items-center">
                                        <div class=" col-md-3 col-sm-2 col-3">
                                            <img class="card-img"
                                                 src="<?php echo e(isset($sectionFour['img_url_two']) ? asset($sectionFour['img_url_two']) : asset('landing_front/images/profile.png')); ?>"
                                                 alt="hospital-profile" loading="lazy">
                                        </div>
                                        <div class="col-md-9 col-sm-10">
                                            <div class="card-body p-0">
                                                <h3 class="mt-sm-0 mt-3"><?php echo e($sectionFour['card_text_two']); ?></h3>
                                                <p class="fs-14"><?php echo $sectionFour['card_text_two_secondary']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 about-content-block mb-lg-0 mb-4">
                                <div class="about-content bg-white py-20 h-100">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-md-3 col-sm-2 col-3">
                                            <img class="card-img"
                                                 src="<?php echo e(isset($sectionFour['img_url_three']) ? asset($sectionFour['img_url_three']) : asset('landing_front/images/online.png')); ?>"
                                                 alt="online-appointment" loading="lazy">
                                        </div>
                                        <div class=" col-md-9 col-sm-10">
                                            <div class="card-body p-0">
                                                <h3 class="mt-sm-0 mt-3"><?php echo e($sectionFour['card_text_three']); ?></h3>
                                                <p class="fs-14"><?php echo $sectionFour['card_text_three_secondary']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 about-content-block mb-lg-0 mb-4">
                                <div class="about-content bg-white py-20 h-100">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-md-3 col-sm-2 col-3">
                                            <img class="card-img w-75"
                                                 src="<?php echo e(isset($sectionFour['img_url_four']) ? asset($sectionFour['img_url_four']) : asset('landing_front/images/articles.png')); ?>"
                                                 alt="articles" loading="lazy">
                                        </div>
                                        <div class="col-md-9 col-sm-10">
                                            <div class="card-body p-0">
                                                <h3 class="mt-sm-0 mt-3"><?php echo e($sectionFour['card_text_four']); ?></h3>
                                                <p class="fs-14"><?php echo $sectionFour['card_text_four_secondary']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4  text-lg-end text-center mt-lg-0 mt-5">
                        <img src="<?php echo e(isset($landingAboutUs['main_img_one']) ? asset($landingAboutUs['main_img_one']) : asset('landing_front/images/about.png')); ?>"
                             alt="HMS-Sass-about" class="img-fluid" loading="lazy"/>
                    </div>

                </div>
            </div>
        </section>
        <!-- end-about-section -->

        <!-- start-service-section -->
    <?php echo $__env->make('landing.home.count_section', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <!-- end-service-section -->

        <!-- start-question-section -->
        <section class="question-section py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center">
                        <img src="<?php echo e(isset($landingAboutUs['main_img_two']) ? ($landingAboutUs['main_img_two']) : asset('landing_front/images/about-question.png')); ?>"
                             alt="about-question" class="img-fluid" loading="lazy"/>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion mt-60" id="accordionExample">
                            <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading-<?php echo e($faq->id); ?>">
                                        <button class="accordion-button <?php echo e($loop->first ? '' : 'collapsed'); ?> fs-18 p-lg-4 p-sm-3"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse<?php echo e($faq->id); ?>"
                                                aria-expanded="<?php echo e($loop->first ? 'true' : 'false'); ?>"
                                                aria-controls="#collapse<?php echo e($faq->id); ?>">
                                            <?php echo e($faq->question); ?>

                                        </button>
                                    </h2>
                                    <div id="collapse<?php echo e($faq->id); ?>"
                                         class="accordion-collapse collapse <?php echo e($loop->first ? 'show' : ''); ?>"
                                         aria-labelledby="heading-<?php echo e($faq->id); ?>" data-bs-parent="#accordionExample">
                                        <div class="accordion-body panel">
                                            <p class="fs-14"><?php echo $faq->answer; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end-question-section -->

        <!-- start-plan-section -->
    <?php if(getLoggedInUser() == null || !getLoggedInUser()->hasRole('Super Admin')): ?>
        <!-- start-plan-section -->
        <?php echo $__env->make('landing.home.pricing_plan_page', ['screenFrom' => Route::currentRouteName()], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php endif; ?>
    <!-- end-plan-section -->

        <!-- start subscribe-section -->
    <?php echo $__env->make('landing.home.subscribe_section', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <!-- end subscribe-section -->

    <input type="hidden" name="getLoggedInUserdata" value="<?php echo e(getLoggedInUser()); ?>" class="getLoggedInUser">
    <input type="hidden" name="logInUrl" value="<?php echo e(route('filament.auth.auth.login')); ?>" class="logInUrl">
    <input type="hidden" name="fromPricing" value="true" class="fromPricing">
    <input type="hidden" name="makePaymentURL" value="<?php echo e(route('purchase-subscription')); ?>" class="makePaymentURL">
    <input type="hidden" name="subscribeText" value="<?php echo e(__('messages.subscription_pricing_plans.choose_plan')); ?>" class="subscribeText">
    <input type="hidden" name="toastData" value="<?php echo e(json_encode(session('toast-data'))); ?>" class="toastData">
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_scripts'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>

    <script>
        
        
        
        
        

    </script>
    
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('landing.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/vzaiylnbi7hv/public_html/resources/views/landing/home/about_us.blade.php ENDPATH**/ ?>