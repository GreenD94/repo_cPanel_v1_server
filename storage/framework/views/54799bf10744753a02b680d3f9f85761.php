<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.web_home.working_hours')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="working-hours-page">
        <!-- start hero section -->
        <section class="hero-section position-relative p-t-60 border-bottom-right-rounded border-bottom-left-rounded bg-gray overflow-hidden">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 <?php echo e(App::getLocale() == 'ar' ? 'text-lg-end' : 'text-lg-start'); ?> text-center">
                        <div class="hero-content">
                            <h1 class="mb-3 pb-1">
                                <?php echo e(__('messages.web_home.working_hours')); ?>

                            </h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-lg-start justify-content-center mb-lg-0 mb-5">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo e(route('landing-home')); ?>"><?php echo e(__('messages.web_home.home')); ?></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <?php echo e(__('messages.web_home.working_hours')); ?>

                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-6 text-lg-end text-center">
                        <img src="<?php echo e(asset('web_front/images/page-banner/working-hours.png')); ?>" alt="Infy Care" class="img-fluid" loading="lazy" />
                    </div>
                </div>
            </div>
        </section>
        <!-- end hero section -->

        <!--start book-appointment section-->
        <section class="appointment-section pt-xl-5">
            <div class="container">
                <div class="book-appintment position-relative p-4 br-2 bg-white">
                    <form action="<?php echo e(route('appointment.post', getUser()->username)); ?>" class="book-appointment-form"
                          method="POST" turbo:load>
                        <?php echo csrf_field(); ?>
                        <div class="row align-items-center justify-content-around">
                            <div class="col-lg-3">
                                <h3 class="mb-lg-0 mb-3 fw-bold"><?php echo e(__('messages.web_home.book_an_appointment')); ?></h3>
                            </div>
                            <div class="col-lg-3 col-md-6 text-center mb-lg-0 mb-3">
                                <select class="doctor-name-filter" name="doctorId" aria-label="<?php echo e(__('messages.web_home.select_doctor')); ?>">
                                    <option value=""><?php echo e(__('messages.web_home.select_doctor')); ?></option>
                                    <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($doctor->id); ?>"><?php echo e($doctor->user->full_name ?? ''); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-6 text-center mb-lg-0 mb-3">
                                <input type="text" name="appointmentDate" class="form-control datepicker"
                                       id="datepicker"
                                       placeholder="<?php echo e(__('messages.web_appointment.select_date')); ?>">

                            </div>
                            <div class="col-lg-3 text-end">
                                <button type="submit"
                                        class="btn btn-primary d-block w-100"><?php echo e(__('messages.web_home.book_now')); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--end book-appointment section-->

        <!--start opening-hours section-->
        <section class="opening-hours-section bg-gray p-t-120 p-b-120">
            <div class="container">
                <h2 class="text-center mb-5 pb-xl-3 mt-5 pt-4 pt-xl-0">
                    <?php echo e(__('messages.web_working_hours.opening_hours')); ?>

                </h2>
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <?php if(count($hospitalSchedules)): ?>
                            <?php $__currentLoopData = $hospitalSchedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hospitalSchedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="bg-white d-flex align-items-center justify-content-between opening-hours-card fs-5">
                                    <label class="text-success"><?php echo e($weekDay[$hospitalSchedule->day_of_week]); ?> :</label>
                                    <span class="text-secondary fw-light">
                                        <?php echo e($hospitalSchedule->start_time.' - '.$hospitalSchedule->end_time); ?>

                                    </span>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.layouts.front', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/vzaiylnbi7hv/public_html/resources/views/web/home/working-hours.blade.php ENDPATH**/ ?>