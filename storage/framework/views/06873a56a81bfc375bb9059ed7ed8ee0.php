<div>
    <div class="py-4">
        <div class="flex">
            <nav class="flex max-w-full p-2 mx-auto overflow-x-auto bg-white shadow-sm fi-tabs gap-x-1 rounded-xl ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10"
                role="tablist">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tab => $tab_plans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <button type="button"
                        class="fi-tabs-item group flex items-center gap-x-2 rounded-lg px-3 py-2 text-sm font-medium outline-none transition duration-75 <?php echo e($loop->first ? 'fi-tabs-item-active bg-gray-50 dark:bg-white/5 text-primary-400 dark:text-primary-400' : 'hover:bg-gray-50 focus-visible:bg-gray-50 dark:hover:bg-white/5 dark:focus-visible:bg-white/5'); ?>"
                        role="tab"
                        href="#<?php echo e(str_replace(' ', '', \App\Enums\PlanFrequency::from($tab)->getLabel())); ?>">
                        <?php echo e(\App\Enums\PlanFrequency::from($tab)->getLabel()); ?>

                    </button>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </nav>
        </div>
        <!--[if BLOCK]><![endif]--><?php if(!empty($latestNotification?->title)): ?>
            <div id="notification" class="flex justify-center py-4">
                <div class="tab-content w-full my-2 shadow-lg relative rounded-xl" style="background-color: #ffc107; width: 50%; padding: 10px">
                    <h3 class="font-bold text-center" style="font-size: 20px;">
                        <?php echo e($latestNotification->title); ?>

                    </h3>
                </div>
            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        <div class="flex w-full py-5">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tab => $tab_plans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div id="<?php echo e(str_replace(' ', '', \App\Enums\PlanFrequency::from($tab)->getLabel())); ?>"
                    class="tab-content w-full flex justify-center gap-x-4 flex-wrap <?php echo e($loop->first ? '' : 'hidden'); ?>">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $tab_plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div
                            class="w-full max-w-sm p-6 my-2 text-gray-600 bg-white shadow-lg dark:bg-gray-800 dark:text-gray-200 relative rounded-xl">
                            <!--[if BLOCK]><![endif]--><?php if($plan['mark_as_recommended']): ?>
                                <span
                                    class="text-xs font-semibold text-white bg-gray-400 dark:bg-gray-700 py-1.5 px-4 absolute top-0"
                                    style="right: 0; border-radius: 0 10px 0 10px"><?php echo e(__('messages.plan.recommended')); ?></span>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                            <h3 class="mb-1 text-xl font-bold text-gray-900 text-center">
                                <?php echo e($plan['name']); ?>

                            </h3>
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">
                                <?php echo e(\Illuminate\Support\Str::limit(strip_tags($plan['short_description']), 60, '...')); ?>

                            </p>
                            <div class="flex justify-center mt-3 mb-5">
                                <div class="flex items-end gap-1">
                                    <h3 class="sm:text-4xl text-3xl font-bold text-gray-900">
                                        <?php echo e(getAdminCurrencySymbol($plan['currency']) . $plan['price']); ?>

                                    </h3>
                                    <span class="text-sm font-semibold text-gray-400" style="margin-bottom: 5px">/
                                        <?php echo e(__("messages.plan_frequency.$tab")); ?></span>
                                </div>
                            </div>
                            <?php if($tab == 1): ?>
                                <?php $__empty_1 = true; $__currentLoopData = $subscriptionPricingMonthPlans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscriptionsPricingPlan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <!--[if BLOCK]><![endif]--><?php if(count($subscriptionsPricingPlan->planFeatures) > 0): ?>
                                        <!--[if BLOCK]><![endif]--><?php if($subscriptionsPricingPlan->name == $plan['name']): ?>
                                            <div class="flex justify-center">
                                                <ul class="pricing-plan-features text-gray-600 fs-5 mb-9">
                                                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $subscriptionsPricingPlan->planFeatures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $planFeature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li
                                                            class="text-gray-900 dark:text-white font-medium text-sm mb-2 flex items-center">
                                                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-check'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-5 w-5 text-green-500 m-5']); ?>
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
                                                            <?php echo e($planFeature->feature->name); ?>

                                                        </li>
                                                        <!--[if BLOCK]><![endif]--><?php if($planFeature->feature->name == 'SMS / Mail' && $planFeature->subscriptionPlan->sms_limit > 0): ?>
                                                            <li
                                                                class="text-gray-900 dark:text-white font-medium text-sm mb-2 flex items-center">
                                                                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-check'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-5 w-5 text-green-500 mr-5']); ?>
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
                                                                <?php echo e($planFeature->subscriptionPlan->sms_limit); ?>

                                                                SMS
                                                            </li>
                                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                                </ul>
                                            </div>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card text-center empty_featured_card">
                                            <div class="card-body d-flex align-items-center justify-content-center">
                                                <div>
                                                    <div class="empty-featured-portfolio">
                                                        <i class="fas fa-question"></i>
                                                    </div>
                                                    <h3 class="card-title mt-3">
                                                        <?php echo e(__('messages.subscription_month_plan_not_found')); ?>

                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                            <?php elseif($tab == 2): ?>
                                <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $subscriptionPricingYearPlans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscriptionsPricingPlan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <!--[if BLOCK]><![endif]--><?php if(count($subscriptionsPricingPlan->planFeatures) > 0): ?>
                                        <!--[if BLOCK]><![endif]--><?php if($subscriptionsPricingPlan->name == $plan['name']): ?>
                                            <div class="flex justify-center">
                                                <ul class="pricing-plan-features text-gray-600 fs-5 mb-9">
                                                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $subscriptionsPricingPlan->planFeatures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $planFeature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li
                                                            class="text-gray-900  dark:text-white font-medium text-sm mb-2 flex items-center ">
                                                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-check'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-5 w-5 text-green-500 mr-5']); ?>
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
                                                            <?php echo e($planFeature->feature->name); ?>

                                                        </li>
                                                        <!--[if BLOCK]><![endif]--><?php if($planFeature->feature->name == 'SMS / Mail' && $planFeature->subscriptionPlan->sms_limit > 0): ?>
                                                            <li
                                                                class="text-gray-900  dark:text-white font-medium text-sm mb-2 flex items-center">
                                                                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-check'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-5 w-5 text-green-500 mr-5']); ?>
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
                                                                <?php echo e($planFeature->subscriptionPlan->sms_limit); ?>

                                                                SMS
                                                            </li>
                                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                                </ul>
                                            </div>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card text-center empty_featured_card">
                                            <div class="card-body d-flex align-items-center justify-content-center">
                                                <div>
                                                    <div class="empty-featured-portfolio">
                                                        <i class="fas fa-question"></i>
                                                    </div>
                                                    <h3 class="card-title mt-3">
                                                        <?php echo e(__('messages.subscription_month_plan_not_found')); ?>

                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                            <!--[if BLOCK]><![endif]--><?php if($currentActivePlan != null && $currentActivePlan->subscriptionPlan->id == $plan['id']): ?>
                                <div class="text-center mt-6">
                                    <button
                                        style="--c-400:var(--success-400);--c-500:var(--success-500);--c-600:var(--success-600);"
                                        class="fi-btn relative grid-flow-col items-center justify-center font-semibold outline-none transition duration-75 focus-visible:ring-2 rounded-lg fi-color-custom fi-btn-color-success fi-color-success fi-size-md fi-btn-size-md gap-1.5 px-3 py-2 text-sm inline-grid shadow-sm bg-custom-600 text-white hover:bg-custom-500 focus-visible:ring-custom-500/50 dark:bg-custom-400 dark:hover:bg-custom-600 dark:focus-visible:ring-custom-400/50 fi-ac-action fi-ac-btn-action cursor-default">
                                        <span
                                            class="fi-btn-label"><?php echo e(__('messages.subscription_pricing_plans.currently_active')); ?></span>
                                    </button>
                                </div>
                            <?php else: ?>
                                <div class="text-center mt-6">
                                    <a href="<?php echo e($plan['price'] != 0 ? route('filament.hospitalAdmin.pages.choose-payment-type', ['plan' => $plan['id']]) : 'javascript:void(0)'); ?>"
                                        style="--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600); <?php echo e($plan['price'] != 0 ? '' : 'opacity: 0.7; pointer-events: none; cursor: not-allowed;'); ?>"
                                        class="fi-btn relative grid-flow-col items-center justify-center font-semibold outline-none transition duration-75 focus-visible:ring-2 rounded-lg fi-color-custom fi-btn-color-primary fi-color-primary fi-size-md fi-btn-size-md gap-1.5 px-3 py-2 text-sm inline-grid shadow-sm bg-custom-600 text-white hover:bg-custom-500 focus-visible:ring-custom-500/50 dark:bg-custom-500 dark:hover:bg-custom-400 dark:focus-visible:ring-custom-400/50 fi-ac-action fi-ac-btn-action">
                                        <span
                                            class="fi-btn-label"><?php echo e(__('messages.subscription_pricing_plans.choose_plan')); ?></span>
                                    </a>
                                </div>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </div>
        <!--[if BLOCK]><![endif]--><?php if($plans->count() <= 0): ?>
            <div class="p-4 text-center border border-gray-200 rounded-lg dark:border-white/10">
                <h1 class="text-2xl font-bold text-gray-950 dark:text-white"><?php echo e(__('messages.plan.no_plans')); ?></h1>
            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabLinks = document.querySelectorAll('.fi-tabs-item');
        tabLinks.forEach(function(tabLink) {
            tabLink.addEventListener('click', function(event) {
                event.preventDefault();
                tabLinks.forEach(function(link) {
                    link.classList.remove('fi-tabs-item-active', 'bg-gray-50',
                        'dark:bg-white/5', 'text-primary-400',
                        'dark:text-primary-400');
                    link.classList.add('hover:bg-gray-50', 'focus-visible:bg-gray-50',
                        'dark:hover:bg-white/5', 'dark:focus-visible:bg-white/5');
                });
                tabLink.classList.add('fi-tabs-item-active', 'bg-gray-50', 'dark:bg-white/5',
                    'text-primary-400', 'dark:text-primary-400');
                tabLink.classList.remove('hover:bg-gray-50', 'focus-visible:bg-gray-50',
                    'dark:hover:bg-white/5', 'dark:focus-visible:bg-white/5');
                const tabContents = document.querySelectorAll('.tab-content');
                tabContents.forEach(function(tabContent) {
                    tabContent.classList.add('hidden');
                });
                const targetId = tabLink.getAttribute('href').substring(1);
                const targetContent = document.getElementById(targetId);
                if (targetContent) {
                    targetContent.classList.remove('hidden');
                }
            });
        });
        setTimeout(() => {
            document.querySelector('#notification').remove();
        }, 2000);
    });
</script>
<?php /**PATH /home/vzaiylnbi7hv/public_html/resources/views/filament/hospital-admin/pages/subscription-plans.blade.php ENDPATH**/ ?>