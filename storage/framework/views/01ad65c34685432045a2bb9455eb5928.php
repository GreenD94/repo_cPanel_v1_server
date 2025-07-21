<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.web_home.testimonials')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="testimonials-page">
        <!-- start hero section -->
        <section
            class="hero-section position-relative p-t-60 border-bottom-right-rounded border-bottom-left-rounded bg-gray overflow-hidden">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 <?php echo e(App::getLocale() == 'ar' ? 'text-lg-end' : 'text-lg-start'); ?> text-center">
                        <div class="hero-content">
                            <h1 class="mb-3 pb-1">
                                <?php echo e(__('messages.web_home.testimonials')); ?>

                            </h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-lg-start justify-content-center mb-lg-0 mb-5">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo e(route('landing-home')); ?>"><?php echo e(__('messages.web_home.home')); ?></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <?php echo e(__('messages.web_home.testimonials')); ?>

                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-6 text-lg-end text-center">
                        <img src="<?php echo e(asset('web_front/images/page-banner/testimonials.png')); ?>" alt="Infy Care"
                            class="img-fluid" />
                    </div>
                </div>
            </div>
        </section>
        <!-- end hero section -->

        <!-- start testimonial-section -->
        <section class="testimonial-section p-t-120 p-b-120">
            <div class="container">
                <div class="col-lg-6 text-center mx-auto">
                    <h6 class="text-primary pb-2"><?php echo e(__('messages.web_home.our_testimonials')); ?></h6>
                    <h2 class="mb-2 pb-xl-2">
                        <?php echo e(__('messages.web_home.what_our_patient_say_about_medical_treatments')); ?>

                    </h2>
                </div>
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="testimonial-slider">
                            <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="justify-content-center">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 col-sm-4 position-relative">
                                            <div class="testimonial-img">
                                                <img src="<?php echo e($testimonial->document_url); ?>" alt="testimonial image"
                                                    class="img-fluid">
                                            </div>
                                            <div class="quote-img br-5 position-absolute">
                                                <img src="<?php echo e(asset('web_front/images/testimonials/quote.png')); ?>"
                                                    alt="quote">
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 position-relative pb-md-5 mb-md-3">
                                            <div class="testimonial-desc ps-lg-5 pt-sm-0 pt-4">
                                                <h3><?php echo e(\Illuminate\Support\Str::limit($testimonial->name, 46)); ?></h3>
                                                <p class="mb-0">
                                                    <?php echo e($testimonial->description); ?>

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.layouts.front', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/vzaiylnbi7hv/public_html/resources/views/web/home/testimonials.blade.php ENDPATH**/ ?>