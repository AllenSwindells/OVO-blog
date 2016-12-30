<?php

register_nav_menus(array('primary-menu-13' => __('Navigation 13', 'default')));

function theme_hmenu_13() {
?>
    
    <nav class="data-control-id-1598359 bd-hmenu-13" data-responsive-menu="true" data-responsive-levels="">
        
            <div class="data-control-id-1598358 bd-responsivemenu-17 collapse-button">
    <div class="bd-container-inner">
        <div class="bd-menuitem-49 data-control-id-1598364">
            <a  data-toggle="collapse"
                data-target=".bd-hmenu-13 .collapse-button + .navbar-collapse"
                href="#" onclick="return false;">
                    <span></span>
            </a>
        </div>
    </div>
</div>
            <div class="navbar-collapse collapse">
        
        <div class="data-control-id-1598357 bd-horizontalmenu-9 clearfix">
            <div class="bd-container-inner">
            <?php
                echo theme_get_menu(array(
                    'source' => theme_get_option('theme_menu_source'),
                    'depth' => theme_get_option('theme_menu_depth'),
                    'theme_location' => 'primary-menu-13',
                    'responsive' => 'xs',
                    'responsive_levels' => '',
                    'levels' => '',
                    'popup_width' => 'sheet',
                    'popup_custom_width' => '600',
                    'columns' => array(
                        'lg' => '',
                        'md' => '',
                        'sm' => '',
                        'xs' => '',
                    ),
                    'menu_function' => 'theme_menu_13_17',
                    'menu_item_start_function' => 'theme_menu_item_start_13_45',
                    'menu_item_end_function' => 'theme_menu_item_end_13_45',
                    'submenu_start_function' => 'theme_submenu_start_13_18',
                    'submenu_end_function' => 'theme_submenu_end_13_18',
                    'submenu_item_start_function' => 'theme_submenu_item_start_13_46',
                    'submenu_item_end_function' => 'theme_submenu_item_end_13_46',
                ));
            ?>
            </div>
        </div>
        
        
            </div>
    </nav>
    
<?php
}

function theme_menu_13_17($content = '') {
    ob_start();
    ?><ul class="data-control-id-1598409 bd-menu-17 nav nav-pills navbar-left">
    <?php echo $content; ?>
</ul><?php
    return ob_get_clean();
}

function theme_menu_item_start_13_45($class, $title, $attrs, $link_class, $item_type = '') {
    if ($item_type === 'mega') {
        $class .= ' ';
    }
    ob_start();
    ?><li class="data-control-id-1598410 bd-menuitem-45 bd-toplevel-item <?php echo $class; ?>">
    <a class="<?php echo $link_class; ?>" <?php echo $attrs; ?>>
        <span>
            <?php echo $title; ?>
        </span>
    </a><?php
    return ob_get_clean();
}

function theme_menu_item_end_13_45() {
    ob_start();
?>
    </li>
    
<?php
    return ob_get_clean();
}

function theme_submenu_start_13_18($class = '', $item_type = '') {
    ob_start();
?>
    
    <div class="bd-menu-18-popup <?php if ($item_type === 'category') echo 'bd-megamenu-popup'; ?>">
    <?php if ($item_type === 'mega'): ?>
        <div class="bd-menu-18 bd-no-margins data-control-id-1598421 bd-mega-grid bd-grid-13 data-control-id-1598385 <?php echo $class; ?>">
            <div class="container-fluid">
                <div class="separated-grid row">
    <?php else: ?>
        <ul class="bd-menu-18 bd-no-margins data-control-id-1598421 <?php echo $class; ?>">
    <?php endif; ?>
<?php
    return ob_get_clean();
}

function theme_submenu_end_13_18($item_type = '') {
    ob_start();
?>
    <?php if ($item_type !== 'mega'): ?>
        </ul>
    <?php else: ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    </div>
    
<?php
    return ob_get_clean();
}

function theme_submenu_item_start_13_46($class, $title, $attrs, $link_class, $item_type = '') {
    $class .= ' bd-sub-item';
    switch($item_type) {
        case 'category':
            $class .= ' bd-mega-item data-control-id-1598375 bd-menuitem-47';
            $class .= ' separated-item-9';
            break;
        case 'subcategory':
            $class .= ' bd-mega-item data-control-id-1598399 bd-menuitem-48';
            break;
    }
    ob_start();
?>
    
    <?php if ($item_type === 'category'): ?>
        <div class="data-control-id-1598422 bd-menuitem-46 <?php echo $class; ?>">
            <div class="data-control-id-1598387 bd-griditem-9 bd-grid-item">
    <?php else: ?>
        <li class="data-control-id-1598422 bd-menuitem-46 <?php echo $class; ?>">
    <?php endif; ?>

            <a class="<?php echo $link_class; ?>" <?php echo $attrs; ?>>
                <span>
                    <?php echo $title; ?>
                </span>
            </a>
<?php
    return ob_get_clean();
}

function theme_submenu_item_end_13_46($item_type = '') {
    ob_start();
?>
    <?php if ($item_type !== 'category'): ?>
        </li>
    <?php else: ?>
            </div>
        </div>
    <?php endif; ?>

    
<?php
    return ob_get_clean();
}