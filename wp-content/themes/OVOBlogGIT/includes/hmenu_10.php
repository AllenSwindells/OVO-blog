<?php

register_nav_menus(array('primary-menu-10' => __('Navigation 10', 'default')));

function theme_hmenu_10() {
?>
    
    <nav class=" bd-hmenu-10" data-responsive-menu="true" data-responsive-levels="">
        
            <div class=" bd-responsivemenu-14 collapse-button">
    <div class="bd-container-inner">
        <div class="bd-menuitem-64 ">
            <a  data-toggle="collapse"
                data-target=".bd-hmenu-10 .collapse-button + .navbar-collapse"
                href="#" onclick="return false;">
                    <span></span>
            </a>
        </div>
    </div>
</div>
            <div class="navbar-collapse collapse">
        
        <div class=" bd-horizontalmenu-12 clearfix">
            <div class="bd-container-inner">
            <?php
                echo theme_get_menu(array(
                    'source' => theme_get_option('theme_menu_source'),
                    'depth' => theme_get_option('theme_menu_depth'),
                    'theme_location' => 'primary-menu-10',
                    'responsive' => 'xs',
                    'responsive_levels' => '',
                    'levels' => 'expand on hover',
                    'popup_width' => 'sheet',
                    'popup_custom_width' => '600',
                    'columns' => array(
                        'lg' => '',
                        'md' => '',
                        'sm' => '',
                        'xs' => '',
                    ),
                    'menu_function' => 'theme_menu_10_25',
                    'menu_item_start_function' => 'theme_menu_item_start_10_60',
                    'menu_item_end_function' => 'theme_menu_item_end_10_60',
                    'submenu_start_function' => 'theme_submenu_start_10_26',
                    'submenu_end_function' => 'theme_submenu_end_10_26',
                    'submenu_item_start_function' => 'theme_submenu_item_start_10_61',
                    'submenu_item_end_function' => 'theme_submenu_item_end_10_61',
                ));
            ?>
            </div>
        </div>
        
        
            </div>
    </nav>
    
<?php
}

function theme_menu_10_25($content = '') {
    ob_start();
    ?><ul class=" bd-menu-25 nav nav-pills navbar-left">
    <?php echo $content; ?>
</ul><?php
    return ob_get_clean();
}

function theme_menu_item_start_10_60($class, $title, $attrs, $link_class, $item_type = '') {
    if ($item_type === 'mega') {
        $class .= ' ';
    }
    ob_start();
    ?><li class=" bd-menuitem-60 bd-toplevel-item <?php echo $class; ?>">
    <a class="<?php echo $link_class; ?>" <?php echo $attrs; ?>>
        <span>
            <?php echo $title; ?>
        </span>
    </a><?php
    return ob_get_clean();
}

function theme_menu_item_end_10_60() {
    ob_start();
?>
    </li>
    
<?php
    return ob_get_clean();
}

function theme_submenu_start_10_26($class = '', $item_type = '') {
    ob_start();
?>
    
    <div class="bd-menu-26-popup <?php if ($item_type === 'category') echo 'bd-megamenu-popup'; ?>">
    <?php if ($item_type === 'mega'): ?>
        <div class="bd-menu-26  bd-mega-grid bd-grid-16  <?php echo $class; ?>">
            <div class="container-fluid">
                <div class="separated-grid row">
    <?php else: ?>
        <ul class="bd-menu-26  <?php echo $class; ?>">
    <?php endif; ?>
<?php
    return ob_get_clean();
}

function theme_submenu_end_10_26($item_type = '') {
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

function theme_submenu_item_start_10_61($class, $title, $attrs, $link_class, $item_type = '') {
    $class .= ' bd-sub-item';
    switch($item_type) {
        case 'category':
            $class .= ' bd-mega-item  bd-menuitem-62';
            $class .= ' separated-item-10';
            break;
        case 'subcategory':
            $class .= ' bd-mega-item  bd-menuitem-63';
            break;
    }
    ob_start();
?>
    
    <?php if ($item_type === 'category'): ?>
        <div class=" bd-menuitem-61 <?php echo $class; ?>">
            <div class=" bd-griditem-10 bd-grid-item">
    <?php else: ?>
        <li class=" bd-menuitem-61 <?php echo $class; ?>">
    <?php endif; ?>

            <a class="<?php echo $link_class; ?>" <?php echo $attrs; ?>>
                <span>
                    <?php echo $title; ?>
                </span>
            </a>
<?php
    return ob_get_clean();
}

function theme_submenu_item_end_10_61($item_type = '') {
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