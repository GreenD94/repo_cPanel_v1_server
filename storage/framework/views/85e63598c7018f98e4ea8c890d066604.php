<div class="flex items-center">
    <?php if(auth()->check()): ?>
        <?php if(auth()->user()->hasRole('Super Admin')): ?>
            <a href="<?php echo e(route('landing-home')); ?>" target="_black"
                class="flex items-center text-gray-900 text-lg font-bold dark:text-white ">
                <img src="<?php echo e(asset(App\Models\SuperAdminSetting::where('key', '=', 'app_logo')->first()->value) ?? ''); ?>"
                    width="40" height="40" alt="<?php echo e(config('app.name')); ?>">
                &nbsp;&nbsp;&nbsp;<?php echo e(App\Models\SuperAdminSetting::where('key', '=', 'app_name')->first()->value ?? ''); ?>

            </a>
        <?php else: ?>
            <a href="<?php echo e(route('front', ['username' => auth()->user()->hospital->tenant_username])); ?>" target="_black"
                class="flex items-center text-gray-900 text-lg font-bold dark:text-white ">
                <img src="<?php echo e(asset(App\Models\Setting::where('key', '=', 'app_logo')->where('tenant_id', '=', auth()->user()->tenant_id)->first()->value) ?? ''); ?>"
                    width="40" height="40" alt="<?php echo e(config('app.name')); ?>">
                &nbsp;&nbsp;&nbsp;<?php echo e(App\Models\Setting::where('key', '=', 'app_name')->where('tenant_id', '=', auth()->user()->tenant_id)->first()->value ?? ''); ?>

            </a>
        <?php endif; ?>
    <?php endif; ?>
</div>
<?php /**PATH /home/vzaiylnbi7hv/public_html/resources/views/vendor/filament-panels/components/logo.blade.php ENDPATH**/ ?>