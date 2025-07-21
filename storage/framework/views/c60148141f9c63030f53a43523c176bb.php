<div>
    <footer class="bottom-0 left-0 z-20 w-full p-4 flex items-center justify-between md:p-6">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
            <?php echo e(__('messages.web_menu.all_rights_reserved')); ?> © <strong><?php echo e(date('Y')); ?></strong> <a
                class="underline text-primary-500" href="<?php echo e(config('app.url')); ?>"
                class="hover:underline"><?php echo e(config('app.name')); ?></a>
        </span>
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
            v<?php echo e(getCurrentVersion()); ?>

        </span>
    </footer>
</div>
<style>
    .fi-main-ctn {
        min-height: 100vh;

        .fi-main {
            flex-grow: 1;
        }
    }
</style>
<?php /**PATH /home/vzaiylnbi7hv/public_html/resources/views/layout/footer.blade.php ENDPATH**/ ?>