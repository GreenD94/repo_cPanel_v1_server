<?php if (isset($component)) { $__componentOriginal166a02a7c5ef5a9331faf66fa665c256 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal166a02a7c5ef5a9331faf66fa665c256 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-panels::components.page.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-panels::page'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <style>
        .bed-status {
            color: #0ac074;
        }

        .procedures-status {
            color: #f62947;
        }

        @media (min-width: 640px) {
            .sm\:grid-cols-3 {
                grid-template-columns: repeat(6, minmax(0, 1fr)) !important;
            }
        }

        .wi-9 {
            width: 3.25rem !important;
        }

        .hi-9 {
            height: 3.25rem !important;
        }

        .tooltip {
            position: absolute;
            bottom: 2.5rem;
            background-color: rgb(95, 95, 95);
            color: white;
            font-size: 0.75rem;
            border-radius: 0.375rem;
            padding: 0.25rem 0.5rem;
            box-shadow: 0 2px 8px rgb(181, 181, 181);
            display: none;
            z-index: 50;
            max-width: 200px;
            text-align: center;
            word-wrap: break-word;
        }

        .group:hover .tooltip {
            display: block;
        }
    </style>

    <div class="flex flex-col sm:flex-row items-center card">
        <div class="flex items-center gap-3">
            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('fas-procedures'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-6 w-6 procedures-status']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
            <label class="text-md font-medium text-gray-950 dark:text-white">
                <?php echo e(__('messages.bed_status.assigned_beds')); ?>

            </label>
        </div>
        <div class="p-4"></div>
        <div class="flex items-center gap-3">
            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('fas-bed'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-6 w-6 bed-status']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
            <label class="text-md font-medium text-gray-950 dark:text-white">
                <?php echo e(__('messages.bed_status.available_beds')); ?>

            </label>
        </div>
    </div>
    <?php if (isset($component)) { $__componentOriginal44a508883f9207a939367952373b4021 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal44a508883f9207a939367952373b4021 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.fieldset','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::fieldset'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="poverview" role="tabpanel">
                    <div class="card mb-5 mb-xl-10">
                        <div>
                            <div class="card-body">
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $bedTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bedType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="mb-5 lg:mb-10">
                                        <h2 class="text-md font-medium text-gray-950 dark:text-white  mb-4">
                                            <?php echo e($bedType->title); ?></h2>
                                        <div class="border px-4 lg:px-10 py-2 lg:py-6">
                                            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-1">
                                                <!--[if BLOCK]><![endif]--><?php if(count($bedType->beds) > 0): ?>
                                                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $bedType->beds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="text-center py-4">
                                                            <!--[if BLOCK]><![endif]--><?php if(!$bed->bedAssigns->isEmpty() && !$bed->is_available): ?>
                                                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $bed->bedAssigns->where('status', 1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bedAssign): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <div
                                                                        class="relative group flex flex-col items-center">
                                                                        <a href="#" class="text-danger">
                                                                            <!-- Icon for assigned bed -->
                                                                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('fas-procedures'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'hi-9 wi-9 procedures-status']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                                                                        </a>
                                                                        <div class="tooltip">
                                                                            <label><?php echo e(__('messages.bed_status.bed_name')); ?>:</label>
                                                                            <?php echo e(!empty($bed->name) ? $bed->name : __('messages.common.n/a')); ?>

                                                                            <br>
                                                                            <label><?php echo e(__('messages.case.patient')); ?>:</label>
                                                                            <?php echo e(!empty($bedAssign->patient->patientUser->full_name) ? $bedAssign->patient->patientUser->full_name : __('messages.common.n/a')); ?>

                                                                            <br>
                                                                            <label><?php echo e(__('messages.bed_status.phone')); ?>:</label>
                                                                            <?php echo e(!empty($bedAssign->patient->patientUser->phone) ? $bedAssign->patient->patientUser->region_code . $bedAssign->patient->patientUser->phone : __('messages.common.n/a')); ?>

                                                                            <br>
                                                                            <label><?php echo e(__('messages.bed_status.admission_date')); ?>:</label>
                                                                            <?php echo e(date('jS M, Y h:i:s A', strtotime($bedAssign->assign_date))); ?>

                                                                            <br>
                                                                            <label><?php echo e(__('messages.bed_status.gender')); ?>:</label>
                                                                            <?php echo e($bedAssign->patient->patientUser->gender === 0 ? 'Male' : 'Female'); ?>

                                                                        </div>
                                                                    </div>

                                                                    <div class="pt-1">
                                                                        <label
                                                                            class="text-sm font-medium text-gray-950 dark:text-white">
                                                                            <?php echo e($bedAssign->patient->patientUser->full_name); ?>

                                                                        </label>
                                                                    </div>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                                            <?php else: ?>
                                                                <?php
                                                                    $isTrue = true;
                                                                ?>
                                                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $patientAdmissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientAdmission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <!--[if BLOCK]><![endif]--><?php if(
                                                                        $patientAdmission->bed->id == $bed->id &&
                                                                            !$patientAdmission->bed->is_available &&
                                                                            $patientAdmission->discharge_date == null): ?>
                                                                        <?php
                                                                            $isTrue = false;
                                                                        ?>
                                                                        <div class="text-center">
                                                                            <div
                                                                                class="relative group flex flex-col items-center">
                                                                                <a href="javascript:void(0)"
                                                                                    class="text-danger">
                                                                                    <!-- Icon for assigned bed -->
                                                                                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('fas-procedures'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'hi-9 wi-9 procedures-status']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                                                                                </a>
                                                                                <div class="tooltip">
                                                                                    <label
                                                                                        class="fs-6 text-gray-800"><?php echo e(__('messages.bed_status.bed_name')); ?>

                                                                                        :</label>
                                                                                    <?php echo e($bed->name ?? __('messages.common.n/a')); ?>

                                                                                    <br>
                                                                                    <label><?php echo e(__('messages.case.patient')); ?>:</label>
                                                                                    <?php echo e($patientAdmission->patient->patientUser->full_name ?? __('messages.common.n/a')); ?>

                                                                                    <br>
                                                                                    <label
                                                                                        class="fs-6 text-gray-800"><?php echo e(__('messages.bed_status.phone')); ?>

                                                                                        :</label>
                                                                                    <?php echo e(!empty($patientAdmission->patient->patientUser->phone) ? $patientAdmission->patient->patientUser->phone : __('messages.common.n/a')); ?>

                                                                                    <br>
                                                                                    <label
                                                                                        class="fs-6 text-gray-800"><?php echo e(__('messages.bed_status.admission_date')); ?>

                                                                                        :</label>
                                                                                    <?php echo e(date('jS M, Y h:i:s A', strtotime($patientAdmission->admission_date))); ?>

                                                                                    <br>
                                                                                    <label
                                                                                        class="fs-6 text-gray-800"><?php echo e(__('messages.bed_status.gender')); ?>

                                                                                        :</label>
                                                                                    <?php echo e($patientAdmission->patient->patientUser->gender === 0 ? 'Male' : 'Female'); ?>

                                                                                </div>

                                                                            </div>

                                                                            <div class="pt-1">
                                                                                <label
                                                                                    class="text-sm font-medium text-gray-950 dark:text-white">
                                                                                    <?php echo e($patientAdmission->patient->patientUser->full_name); ?>

                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                                                <!--[if BLOCK]><![endif]--><?php if($isTrue == true): ?>
                                                                    <a href="<?php echo e(route('filament.hospitalAdmin.bed-management.resources.bed-assigns.create', ['bed_id' => $bed->id])); ?>"
                                                                        class="text-sm font-medium text-gray-950 dark:text-white">
                                                                        <!-- Icon for available bed -->
                                                                        <div class="text-center">
                                                                            <div class="flex flex-col items-center">
                                                                                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('fas-bed'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'hi-9 wi-9 bed-status']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                                                                                <span
                                                                                    class="text-sm font-medium text-gray-950 dark:text-white mt-1"><?php echo e($bed->name); ?></span>
                                                                                <!-- Added mt-1 for spacing -->
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                                <?php else: ?>
                                                    <div class="text-center">
                                                        <span class="text-md font-medium text-gray-950 dark:text-white">
                                                            <?php echo e(__('messages.common.no') . ' ' . __('messages.bed_assign.bed') . ' ' . __('messages.bed.available')); ?>

                                                        </span>
                                                    </div>
                                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal44a508883f9207a939367952373b4021)): ?>
<?php $attributes = $__attributesOriginal44a508883f9207a939367952373b4021; ?>
<?php unset($__attributesOriginal44a508883f9207a939367952373b4021); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal44a508883f9207a939367952373b4021)): ?>
<?php $component = $__componentOriginal44a508883f9207a939367952373b4021; ?>
<?php unset($__componentOriginal44a508883f9207a939367952373b4021); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal166a02a7c5ef5a9331faf66fa665c256)): ?>
<?php $attributes = $__attributesOriginal166a02a7c5ef5a9331faf66fa665c256; ?>
<?php unset($__attributesOriginal166a02a7c5ef5a9331faf66fa665c256); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal166a02a7c5ef5a9331faf66fa665c256)): ?>
<?php $component = $__componentOriginal166a02a7c5ef5a9331faf66fa665c256; ?>
<?php unset($__componentOriginal166a02a7c5ef5a9331faf66fa665c256); ?>
<?php endif; ?>
<?php /**PATH /home/vzaiylnbi7hv/public_html/resources/views/filament/hospital-admin/clusters/bed-management/pages/bed-status.blade.php ENDPATH**/ ?>