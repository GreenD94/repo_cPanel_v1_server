<?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal511d4862ff04963c3c16115c05a86a9d = $attributes; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $getFieldWrapperView()] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\DynamicComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => $field]); ?>
    <div x-data="{ state: $wire.$entangle('<?php echo e($getStatePath()); ?>') }">

        <div class="col-xl-8 col-md-9 mb-md-0 mb-5 px-0">
            <div class="flex items-start justify-center">
                <div class="shadow-lg bg-white dark:bg-gray-800 rounded-lg overflow-hidden border">
                    <!--[if BLOCK]><![endif]--><?php if($getRecord()): ?>
                        <div class="flex items-center justify-between p-4 bg-blue-600 dark:bg-blue-700 border-b"
                            id="headerColor" style="background-color:<?php echo e($getRecord()->header_color); ?>">
                        <?php else: ?>
                            <div class="flex items-center justify-between p-4 bg-blue-600 dark:bg-blue-700 border-b"
                                id="headerColor">
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    <div class="flex items-center">
                        <div style="margin-inline-end: 13px;"> <!-- Increased margin here -->
                            <img src="<?php echo e(asset(getLogoUrl())); ?>" alt="logo" class="h-10 w-10" />
                        </div>
                        <h4 class="text-white mb-0 fw-bold "><?php echo e(getAppName()); ?></h4>
                    </div>
                    <address class="text-white text-sm mb-0 text-right">
                        <p class="mb-0">16/A saint Joseph Park</p>
                    </address>
                </div>
                <div class="p-6 bg-white dark:bg-gray-900">
                    <div class="flex flex-wrap justify-between">
                        <div class="flex-1">
                            <div class="flex mb-4">
                                <div class="rounded-full overflow-hidden"
                                    style="margin-inline-end: 20px; width: 100px; height: 100px;">
                                    <!-- Set desired width and height -->
                                    <img src="<?php echo e(asset('front-assets/images/profile.png')); ?>" alt=""
                                        class="w-full h-full object-cover">
                                    <!-- Use h-full to maintain aspect ratio -->
                                </div>
                                <div class="flex-1">
                                    <table class="table-auto w-full text-left" style="margin-right:100px;">
                                        <tbody>
                                            <tr style="height: 1rem;">
                                                <td class="pr-2 font-medium"
                                                    style="padding-top: 0.50rem; padding-bottom: 0.25rem;">
                                                    <?php echo e(__('messages.bed.name')); ?>:</td>
                                                <td style="padding-top: 0.50rem; padding-bottom: 0.25rem;">James
                                                    Bond</td>
                                            </tr>
                                            <!--[if BLOCK]><![endif]--><?php if($getRecord()): ?>
                                                <tr style="height: 1rem;" id="email"
                                                    class=<?php echo e($getRecord()->show_email == true ? '' : 'hidden'); ?>>
                                                    <td class="pr-2 font-medium"
                                                        style="padding-top: 0.50rem; padding-bottom: 0.25rem;">
                                                        <?php echo e(__('auth.email')); ?>:</td>
                                                    <td style="padding-top: 0.50rem; padding-bottom: 0.25rem;">
                                                        marian@gmail.com</td>
                                                </tr>
                                                <tr style="height: 1rem;" id="phone"
                                                    class=<?php echo e($getRecord()->show_phone == true ? '' : 'hidden'); ?>>
                                                    <td class="pr-2 font-medium "
                                                        style="padding-top: 0.50rem; padding-bottom: 0.25rem;">
                                                        <?php echo e(__('messages.enquiry.contact')); ?>:</td>
                                                    <td style="padding-top: 0.50rem; padding-bottom: 0.25rem;">
                                                        1234567890</td>
                                                </tr>
                                                <tr style="height: 1rem;" id="dob"
                                                    class=<?php echo e($getRecord()->show_dob == true ? '' : 'hidden'); ?>>
                                                    <td class="pr-2 font-medium"
                                                        style="padding-top: 0.50rem; padding-bottom: 0.25rem;">
                                                        <?php echo e(__('messages.lunch_break.dob')); ?>:</td>
                                                    <td style="padding-top: 0.50rem; padding-bottom: 0.25rem;">
                                                        25/02/2006</td>
                                                </tr>
                                                <tr style="height: 1rem;" id="blood_group"
                                                    class=<?php echo e($getRecord()->blood_group == true ? '' : 'hidden'); ?>>
                                                    <td class="pr-2 font-medium"
                                                        style="padding-top: 0.50rem; padding-bottom: 0.25rem;">
                                                        <?php echo e(__('messages.user.blood_group')); ?>:</td>
                                                    <td style="padding-top: 0.50rem; padding-bottom: 0.25rem;">A+
                                                    </td>
                                                </tr>
                                                <tr style="height: 1rem;" id="insurance"
                                                    class=<?php echo e($getRecord()->insurance == true? '' : 'hidden'); ?>>
                                                    <td class="pr-2 font-medium"
                                                        style="padding-top: 0.50rem; padding-bottom: 0.25rem;">
                                                        <?php echo e(__('messages.insurance.insurance')); ?>:</td>
                                                    <td style="padding-top: 0.50rem; padding-bottom: 0.25rem;">1234
                                                    </td>
                                            <?php else: ?>
                                                <tr style="height: 1rem;" id="email">
                                                    <td class="pr-2 font-medium"
                                                        style="padding-top: 0.50rem; padding-bottom: 0.25rem;">
                                                        <?php echo e(__('auth.email')); ?>:</td>
                                                    <td style="padding-top: 0.50rem; padding-bottom: 0.25rem;">
                                                        marian@gmail.com</td>
                                                </tr>
                                                <tr style="height: 1rem;" id="phone">
                                                    <td class="pr-2 font-medium "
                                                        style="padding-top: 0.50rem; padding-bottom: 0.25rem;">
                                                        <?php echo e(__('messages.enquiry.contact')); ?>:</td>
                                                    <td style="padding-top: 0.50rem; padding-bottom: 0.25rem;">
                                                        1234567890</td>
                                                </tr>
                                                <tr style="height: 1rem;" id="dob">
                                                    <td class="pr-2 font-medium"
                                                        style="padding-top: 0.50rem; padding-bottom: 0.25rem;">
                                                        <?php echo e(__('messages.lunch_break.dob')); ?>:</td>
                                                    <td style="padding-top: 0.50rem; padding-bottom: 0.25rem;">
                                                        25/02/2006</td>
                                                </tr>
                                                <tr style="height: 1rem;" id="blood_group">
                                                    <td class="pr-2 font-medium"
                                                        style="padding-top: 0.50rem; padding-bottom: 0.25rem;">
                                                        <?php echo e(__('messages.user.blood_group')); ?>:</td>
                                                    <td style="padding-top: 0.50rem; padding-bottom: 0.25rem;">A+
                                                    </td>
                                                </tr>
                                                <tr style="height: 1rem;" id="insurance">
                                                    <td class="pr-2 font-medium"
                                                    style="padding-top: 0.50rem; padding-bottom: 0.25rem;">
                                                        <?php echo e(__('messages.insurance.insurance')); ?>:</td>
                                                    <td style="padding-top: 0.50rem; padding-bottom: 0.25rem;">1234
                                                    </td>
                                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <!--[if BLOCK]><![endif]--><?php if($getRecord()): ?>
                                <div class="flex items-center" id="address"
                                    class=<?php echo e($getRecord()->show_address == true ? '' : 'hidden'); ?>>
                                    <span class="font-medium"
                                        style="margin-right: 12px;"><?php echo e(__('messages.common.address')); ?>:</span>
                                    <address class="mb-0">
                                        D.No.1 Street name Address line 2 line 3
                                    </address>
                                </div>
                            <?php else: ?>
                                <div class="flex items-center" id="address">
                                    <span class="font-medium"
                                        style="margin-right: 12px;"><?php echo e(__('messages.common.address')); ?>:</span>
                                    <address class="mb-0">
                                        D.No.1 Street name Address line 2 line 3
                                    </address>
                                </div>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </div>

                        <div class="w-1/4">
                            <div class="text-right mb-5">
                                <div class="qr-code mb-4">
                                    
                                    <?php echo generateQrCode('https://hms-saas.test/h/sims/patient-details/700XYs', 90); ?>

                                </div>
                                <!--[if BLOCK]><![endif]--><?php if($getRecord()): ?>
                                    <h6 class="text-primary" style="text-align:center;" id="patientUniqueID"
                                        class=<?php echo e($getRecord()->show_patient_unique_id == true ? '' : 'hidden'); ?>>
                                        <?php echo e(__('messages.lunch_break.id')); ?>:1001
                                    </h6>
                                <?php else: ?>
                                    <h6 class="text-primary" style="text-align:center;" id="patientUniqueID">
                                        <?php echo e(__('messages.lunch_break.id')); ?>:1001
                                    </h6>
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            $(document).ready(function() {
                $('#show_email').change(function() {
                    if ($(this).is(':checked')) {
                        $("#email").removeClass('hidden');
                    } else {
                        $("#email").addClass('hidden');
                    }
                });
                $('#show_phone').change(function() {
                    if ($(this).is(':checked')) {
                        $("#phone").removeClass('hidden');
                    } else {
                        $("#phone").addClass('hidden');
                    }
                });
                $('#show_dob').change(function() {
                    if ($(this).is(':checked')) {
                        $("#dob").removeClass('hidden');
                    } else {
                        $("#dob").addClass('hidden');
                    }
                });
                $('#show_blood_group').change(function() {
                    if ($(this).is(':checked')) {
                        $("#blood_group").removeClass('hidden');
                    } else {
                        $("#blood_group").addClass('hidden');
                    }
                });
                $('#show_address').change(function() {
                    if ($(this).is(':checked')) {
                        $("#address").removeClass('hidden');
                    } else {
                        $("#address").addClass('hidden');
                    }
                });
                $('#show_patient_unique_id').change(function() {
                    if ($(this).is(':checked')) {
                        $("#patientUniqueID").removeClass('hidden');
                    } else {
                        $("#patientUniqueID").addClass('hidden');
                    }
                });
                $('#show_insurance').change(function() {
                    if ($(this).is(':checked')) {
                        $("#insurance").removeClass('hidden');
                    } else {
                        $("#insurance").addClass('hidden');
                    }
                });

            });
        });
    </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $attributes = $__attributesOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $component = $__componentOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__componentOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
<?php /**PATH /home/vzaiylnbi7hv/public_html/resources/views/forms/components/smart-card.blade.php ENDPATH**/ ?>