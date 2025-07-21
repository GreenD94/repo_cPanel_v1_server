<?php $__env->startComponent('mail::layout'); ?>
    
    <?php $__env->slot('header'); ?>
        <?php $__env->startComponent('mail::header', ['url' => config('app.url')]); ?>
            <img src="<?php echo new \Illuminate\Support\EncodedHtmlString(asset(getSuperAdminAppLogoUrl())); ?>" class="logo" style="object-fit: cover" alt="<?php echo new \Illuminate\Support\EncodedHtmlString(getSuperAdminAppName()); ?>">
        <?php echo $__env->renderComponent(); ?>
    <?php $__env->endSlot(); ?>
    
    <div>
        <h2><?php echo new \Illuminate\Support\EncodedHtmlString(__('messages.new_change.hello')); ?>!</h2>
        <p><?php echo new \Illuminate\Support\EncodedHtmlString(__('messages.new_change.new_hospital_registerd')); ?></p>
        <br>
        <p><b><?php echo new \Illuminate\Support\EncodedHtmlString(__('messages.hospitals_list.hospital_name')); ?>:</b> <?php echo new \Illuminate\Support\EncodedHtmlString($hospital_name); ?></p>
        <p><b><?php echo new \Illuminate\Support\EncodedHtmlString(__('messages.setting.hospital_email')); ?>:</b> <?php echo new \Illuminate\Support\EncodedHtmlString($hospital_email); ?></p>
        <p><b><?php echo new \Illuminate\Support\EncodedHtmlString(__('messages.new_change.hospital_contact')); ?>:</b> <?php echo new \Illuminate\Support\EncodedHtmlString($hospital_phone); ?></p>
        <br>
        <p><?php echo new \Illuminate\Support\EncodedHtmlString(__('messages.new_change.thanks_regards')); ?>,</p>
        <p><?php echo new \Illuminate\Support\EncodedHtmlString(getSuperAdminAppName()); ?></p>
    </div>
    
    <?php $__env->slot('footer'); ?>
        <?php $__env->startComponent('mail::footer'); ?>
            <h6>© <?php echo new \Illuminate\Support\EncodedHtmlString(date('Y')); ?> <?php echo new \Illuminate\Support\EncodedHtmlString(getSuperAdminAppName()); ?>.</h6>
        <?php echo $__env->renderComponent(); ?>
    <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH /home/vzaiylnbi7hv/public_html/resources/views/emails/hospital_register_mail.blade.php ENDPATH**/ ?>