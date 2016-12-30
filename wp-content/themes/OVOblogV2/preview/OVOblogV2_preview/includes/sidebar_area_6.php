<?php
    function theme_sidebar_area_6() {
        $theme_hide_sidebar_area = true;
        ob_start();
?>
        <div class="bd-separator-2 data-control-id-1515803 bd-separator-center bd-separator-content-center clearfix" >
    <div class="bd-container-inner">
        <div class="bd-separator-inner">
            
        </div>
    </div>
</div>
        <?php $area_content = trim(ob_get_clean()); ?>

        <?php if (theme_is_preview()): ?>
            <?php $hide = 
 $theme_hide_sidebar_area ||
                !strlen(trim(preg_replace('/<!-- empty::begin -->[\s\S]*?<!-- empty::end -->/', '', $area_content))); /* no other controls */ ?>

            <aside class="bd-sidebararea-6-column data-control-id-1121261 bd-flex-vertical bd-flex-fixed <?php if ($hide) echo ' hidden bd-hidden-sidebar'; ?>">
                <div class="bd-sidebararea-6 bd-flex-wide  bd-margins">
                    
                    <?php echo $area_content ?>
                    
                </div>
            </aside>
        <?php else: ?>
            <?php if ($area_content
 && !$theme_hide_sidebar_area): ?>
                <aside class="bd-sidebararea-6-column data-control-id-1121261 bd-flex-vertical bd-flex-fixed">
                    <div class="bd-sidebararea-6 bd-flex-wide  bd-margins">
                        
                        <?php echo $area_content ?>
                        
                    </div>
                </aside>
            <?php endif; ?>
        <?php endif; ?>
<?php
    }
?>