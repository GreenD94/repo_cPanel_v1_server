<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.faqs.faqs')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_css'); ?>
    
    <link href="<?php echo e(asset('landing_front/css/jquery.toast.min.css')); ?>" rel="stylesheet" type="text/css"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="faqs-page">

        <!-- start hero section -->
        <section class="hero-section pt-120 bg-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-lg-start text-center mb-lg-0 mb-md-5 mb-sm-4 mb-3">
                        <div class="hero-content">
                            <?php if(headerLanguageName() == 'ru'): ?>
                                <h2 class="mb-0">
                                    <?php echo e(__('messages.faqs.faqs')); ?>

                                </h2>
                            <?php else: ?>
                                <h1 class="mb-0">
                                    <?php echo e(__('messages.faqs.faqs')); ?>

                                </h1>
                            <?php endif; ?>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-lg-start justify-content-center mb-lg-0 pb-lg-4">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo e(route('landing-home')); ?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item text-cyan fs-18"
                                        aria-current="page"><?php echo e(__('messages.landing.faqs')); ?></li>
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

        <!-- start-question-section -->
        <section class="question-section py-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="accordion" id="accordionExample">
                            <?php $__empty_1 = true; $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading-<?php echo e($faq->id); ?>">
                                        <button class="accordion-button <?php echo e($loop->first ? '' : 'collapsed'); ?> fs-18 p-lg-4 p-sm-3"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse<?php echo e($faq->id); ?>"
                                                aria-expanded="<?php echo e($loop->first ? 'true' : 'false'); ?>"
                                                aria-controls="collapseOne bg-white">
                                            <?php echo e($faq->question); ?>

                                        </button>
                                    </h2>
                                    <div id="collapse<?php echo e($faq->id); ?>"
                                         class="accordion-collapse collapse <?php echo e($loop->first ? 'show' : ''); ?>"
                                         aria-labelledby="heading-<?php echo e($faq->id); ?>" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="fs-14"><?php echo e($faq->answer); ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <div class="row justify-content-center">
                                    <?php echo e(__('We couldn\'t find any records')); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end-question-section -->

        <!-- start subscribe-section -->
    <?php echo $__env->make('landing.home.subscribe_section', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <!-- end subscribe-section -->

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('landing.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/vzaiylnbi7hv/public_html/resources/views/landing/home/faq.blade.php ENDPATH**/ ?>