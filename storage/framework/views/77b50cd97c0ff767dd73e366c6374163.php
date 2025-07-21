<div>
    <?php if (isset($component)) { $__componentOriginal505efd9768415fdb4543e8c564dad437 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal505efd9768415fdb4543e8c564dad437 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.input.wrapper','data' => ['xShow' => '$store.sidebar.isOpen']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::input.wrapper'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-show' => '$store.sidebar.isOpen']); ?>
        <?php if (isset($component)) { $__componentOriginal9ad6b66c56a2379ee0ba04e1e358c61e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ad6b66c56a2379ee0ba04e1e358c61e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.input.index','data' => ['type' => 'search','class' => 'searchinsidebar','id' => 'sidebar-search','placeholder' => ''.e(__('messages.common.search')).'','style' => '
            background-image: url(\''.e(asset('images/search.svg')).'\');
            background-repeat: no-repeat;
            background-position: 10px center;
            background-size: 20px;
            padding-left: 40px;
        ','onkeyup' => 'attachSearchEvent()']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'search','class' => 'searchinsidebar','id' => 'sidebar-search','placeholder' => ''.e(__('messages.common.search')).'','style' => '
            background-image: url(\''.e(asset('images/search.svg')).'\');
            background-repeat: no-repeat;
            background-position: 10px center;
            background-size: 20px;
            padding-left: 40px;
        ','onkeyup' => 'attachSearchEvent()']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ad6b66c56a2379ee0ba04e1e358c61e)): ?>
<?php $attributes = $__attributesOriginal9ad6b66c56a2379ee0ba04e1e358c61e; ?>
<?php unset($__attributesOriginal9ad6b66c56a2379ee0ba04e1e358c61e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ad6b66c56a2379ee0ba04e1e358c61e)): ?>
<?php $component = $__componentOriginal9ad6b66c56a2379ee0ba04e1e358c61e; ?>
<?php unset($__componentOriginal9ad6b66c56a2379ee0ba04e1e358c61e); ?>
<?php endif; ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal505efd9768415fdb4543e8c564dad437)): ?>
<?php $attributes = $__attributesOriginal505efd9768415fdb4543e8c564dad437; ?>
<?php unset($__attributesOriginal505efd9768415fdb4543e8c564dad437); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal505efd9768415fdb4543e8c564dad437)): ?>
<?php $component = $__componentOriginal505efd9768415fdb4543e8c564dad437; ?>
<?php unset($__componentOriginal505efd9768415fdb4543e8c564dad437); ?>
<?php endif; ?>
    <span id="no-results" style="display: none; padding: 90px;" class="text-yellow"> No results </span>
    <script>
        function attachSearchEvent() {
            const searchInput = document.getElementById('sidebar-search');
            const noResultsDiv = document.getElementById('no-results');
            const menuItems = document.querySelectorAll('.fi-sidebar-item-button');
            const sidebarGroups = document.querySelectorAll('.fi-sidebar-group');
            const groupItems = document.querySelectorAll('.fi-sidebar-group-items');
            searchInput.addEventListener('input', function(event) {
                const query = event.target.value.toLowerCase();
                let found = false;
                menuItems.forEach(function(item) {
                    if (item.textContent.toLowerCase().includes(query)) {
                        item.style.display = '';
                        found = true;
                    } else {
                        item.style.display = 'none';
                    }
                });

                sidebarGroups.forEach(function(group) {
                    const groupLabel = group.getAttribute('data-group-label');
                    const groupItemButtons = group.querySelectorAll('.fi-sidebar-item-button');
                    let groupHasVisibleItems = false;

                    groupItemButtons.forEach(function(item) {
                        if (item.style.display !== 'none') {
                            groupHasVisibleItems = true;
                        }
                    });

                    if (groupHasVisibleItems) {
                        group.style.display = '';
                    } else {
                        group.style.display = 'none';
                    }
                });

                groupItems.forEach(function(groupItem) {
                    if (query !== '') {
                        groupItem.classList.remove('flex');
                    } else {
                        groupItem.classList.add('flex');
                    }
                });

                if (!found) {
                    noResultsDiv.style.display = 'block';
                } else {
                    noResultsDiv.style.display = 'none';
                }

                if (query === '') {
                    menuItems.forEach(function(item) {
                        item.style.display = '';
                    });
                    sidebarGroups.forEach(function(group) {
                        group.style.display = '';
                    });
                    noResultsDiv.style.display = 'none';
                }
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            attachSearchEvent();
        });
    </script>
</div>
<?php /**PATH /home/vzaiylnbi7hv/public_html/resources/views/layout/search-in-sidebar.blade.php ENDPATH**/ ?>