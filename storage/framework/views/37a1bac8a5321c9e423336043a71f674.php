<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.web_home.terms_of_service')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="terms-service-page">
        <!-- start hero section -->
        <section
            class="hero-section position-relative p-t-60 border-bottom-right-rounded border-bottom-left-rounded bg-gray overflow-hidden">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 <?php echo e(App::getLocale() == 'ar' ? 'text-lg-end' : 'text-lg-start'); ?> text-center">
                        <div class="hero-content">
                            <h1 class="mb-3 pb-1">
                                <?php echo e(__('messages.web_home.terms_of_service')); ?>

                            </h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-lg-start justify-content-center mb-lg-0 mb-5">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo e(url('/')); ?>"><?php echo e(__('messages.web_home.home')); ?></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <?php echo e(__('messages.web_home.terms_of_service')); ?>

                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-6 text-lg-end text-center">
                        <img src="<?php echo e(asset('web_front/images/page-banner/terms-of-Service.png')); ?>" alt="Infy Care"
                            class="img-fluid" loading="lazy" />
                    </div>
                </div>
            </div>
        </section>
        <!-- end hero section -->

        <!-- start terms-service section -->
        <section class="terms-service-section p-t-120 p-b-120">
            <div class="container">
                <p>
                    <?php echo $frontSetting['terms_conditions']; ?>

                </p>
            </div>
        </section>
        <!-- end terms-service section -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.layouts.front', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/vzaiylnbi7hv/public_html/resources/views/web/home/terms-of-service.blade.php ENDPATH**/ ?>