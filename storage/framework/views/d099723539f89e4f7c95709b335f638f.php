<div>
    <?php if (isset($component)) { $__componentOriginald09a0ea6d62fc9155b01d885c3fdffb3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald09a0ea6d62fc9155b01d885c3fdffb3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-panels::components.form.index','data' => ['wire:submit' => 'register','id' => 'registerForm']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-panels::form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:submit' => 'register','id' => 'registerForm']); ?>
        <div class="w-full pb-2 text-center relative flex flex-col items-center">
            <a href="<?php echo e(route('landing-home')); ?>" class="text-decoration-none sidebar-logo flex items-center"
                target="_blank">
                <img src="<?php echo e(App\Models\Setting::where('key', '=', 'app_logo')->first()->value ?? ''); ?>" class="me-4"
                    alt="Logo" width="40px" height="30px">
            </a>
            <h1
                class="fi-simple-header-heading text-center text-2xl font-bold tracking-tight text-gray-950 dark:text-white">
                <?php echo e(__('auth.create_an_account')); ?>

            </h1>

            <p class="fi-simple-header-subheading mt-2 text-center text-sm text-gray-500 dark:text-gray-400">
                <?php echo e(__('auth.already_user')); ?>

                <a href="<?php echo e(route('filament.auth.auth.login')); ?>"
                    class="fi-link group/link relative inline-flex items-center justify-center outline-none fi-size-md fi-link-size-md gap-1.5 fi-color-custom fi-color-primary fi-ac-action fi-ac-link-action">
                    <span
                        class="font-semibold text-sm text-custom-600 dark:text-custom-400 group-hover/link:underline group-focus-visible/link:underline custom-signup-link"
                        style="--c-400:var(--primary-400);--c-600:var(--primary-600);">
                        <?php echo e(__('auth.sign_in')); ?>

                    </span>
                </a>
            </p>
        </div>
        <?php echo e($this->form); ?>

        <!--[if BLOCK]><![endif]--><?php if(getSuperAdminSettingKeyValue('enable_google_recaptcha')): ?>
            <div class="flex justify-center items-center">
                <div class="form-group">
                    <div class="g-recaptcha" style="padding-bottom: 10px;"
                        data-sitekey="<?php echo e(getSuperAdminSettingKeyValue('google_captcha_key')); ?>"></div>
                    <span id="g-recaptcha-error" class="gap-2 text-red-500"></span>
                </div>
                <input type="hidden" value="1">
            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        <?php if (isset($component)) { $__componentOriginal742ef35d02cb00943edd9ad8ebf61966 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal742ef35d02cb00943edd9ad8ebf61966 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-panels::components.form.actions','data' => ['actions' => $this->getFormActions()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-panels::form.actions'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['actions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->getFormActions())]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal742ef35d02cb00943edd9ad8ebf61966)): ?>
<?php $attributes = $__attributesOriginal742ef35d02cb00943edd9ad8ebf61966; ?>
<?php unset($__attributesOriginal742ef35d02cb00943edd9ad8ebf61966); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal742ef35d02cb00943edd9ad8ebf61966)): ?>
<?php $component = $__componentOriginal742ef35d02cb00943edd9ad8ebf61966; ?>
<?php unset($__componentOriginal742ef35d02cb00943edd9ad8ebf61966); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald09a0ea6d62fc9155b01d885c3fdffb3)): ?>
<?php $attributes = $__attributesOriginald09a0ea6d62fc9155b01d885c3fdffb3; ?>
<?php unset($__attributesOriginald09a0ea6d62fc9155b01d885c3fdffb3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald09a0ea6d62fc9155b01d885c3fdffb3)): ?>
<?php $component = $__componentOriginald09a0ea6d62fc9155b01d885c3fdffb3; ?>
<?php unset($__componentOriginald09a0ea6d62fc9155b01d885c3fdffb3); ?>
<?php endif; ?>

</div>

<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
    document.getElementById("registerForm").addEventListener("submit", function(event) {
        event.preventDefault();

        let captcha = grecaptcha.getResponse();
        document.getElementById("g-recaptcha-error").innerHTML = "";

        if (captcha === "") {
            document.getElementById("g-recaptcha-error").innerHTML = "Google reCAPTCHA is required";
            return;
        } else {
            window.Livewire.find('<?php echo e($_instance->getId()); ?>').call('registerForm');
        }
    });

    document.addEventListener('validationFailed', function() {
        setTimeout(() => {
            window.location.reload();
        }, 1000);
    })
</script>
<?php /**PATH /home/vzaiylnbi7hv/public_html/resources/views/auth/register.blade.php ENDPATH**/ ?>