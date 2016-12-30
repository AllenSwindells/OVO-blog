<?php
    function theme_sidebar_area_1() {
        $theme_hide_sidebar_area = true;
        ob_start();
?>
        <?php
    ob_start();
    theme_print_sidebar('secondary', 'secondary_15_10');
    $current_sidebar_content = trim(ob_get_clean());

    if (isset($theme_hide_sidebar_area)) {
        $theme_hide_sidebar_area = $theme_hide_sidebar_area && !$current_sidebar_content;
    }

    theme_print_sidebar_content($current_sidebar_content, 'secondary', ' bd-secondarywidgetarea-10 clearfix', '');
?>
        <?php $area_content = trim(ob_get_clean()); ?>

        <?php if (theme_is_preview()): ?>
            <?php $hide = 
                !strlen(trim(preg_replace('/<!-- empty::begin -->[\s\S]*?<!-- empty::end -->/', '', $area_content))); /* no other controls */ ?>

            <aside class="bd-sidebararea-1-column  bd-flex-vertical bd-flex-fixed <?php if ($hide) echo ' hidden bd-hidden-sidebar'; ?>">
                <div class="bd-sidebararea-1 bd-flex-wide  bd-margins">
                    
                    <?php echo $area_content ?>
                    
                </div>
            </aside>
        <?php else: ?>
            <?php if ($area_content): ?>
                <aside class="bd-sidebararea-1-column  bd-flex-vertical bd-flex-fixed">
                    <div class="bd-sidebararea-1 bd-flex-wide  bd-margins">
                        
                        <?php echo $area_content ?>
                        
                    </div>
                </aside>
            <?php endif; ?>
        <?php endif; ?>
<?php
    }
?>