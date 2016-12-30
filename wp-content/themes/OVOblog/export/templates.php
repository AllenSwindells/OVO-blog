<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly

$categories = get_categories(array(
    'child_of'   => 0,
    'orderby'    => 'id',
    'order'      => 'ASC',
    'number'     => 1
));
$category_id = 1;
if (!empty($categories)) {
    $categories = array_values($categories);
    $category_id = $categories[0]->cat_ID;
}
register_template('default', '/?cat=' . $category_id . '&custom_page=index.php');

allow_template_duplicate('CustomTemplate');

global $fdm_controller;
if ($fdm_controller != null) {
    $res_url = '';
    $menus = get_terms( 'nav_menu', array( 'hide_empty' => true ) );
    foreach ((array) $menus as $key => $menu) {
        $items = wp_get_nav_menu_items($menu);
        foreach ((array) $items as $key2 => $item) {
            if ($item->object === 'fdm-menu' && strpos($item->url, '?') > 0) {
                $res_url = substr($item->url, strpos($item->url, '?') + 1);
                break;
            }
        }
        if ($res_url !== '') {
            register_template('fdmMenuTemplate', '/?' . $res_url);
            break;
        }
    }

    $menu_item_query_args = array(
        'post_type'      => 'fdm-menu-item',
        'post_status'    => 'publish',
        'posts_per_page' => 1,
        'orderby'        => 'title',
        'order'          => 'ASC'
    );
    $query = new WP_Query( $menu_item_query_args );
    if ($query->have_posts()) {
        $query->the_post();
        $menu_item_link = get_permalink();
        if (strpos($menu_item_link, '?') > 0) {
            register_template('fdmMenuItemTemplate', '/?' . substr($menu_item_link, strpos($menu_item_link, '?') + 1));
        }
    }
}

?>
<?php
    if ('page' == get_option('show_on_front') && get_option('page_for_posts')) {
        register_template('blog-header', '/?page_id=' . get_option('page_for_posts') . '&custom_template=blog-header&custom_page=home.php');
    } else {
        register_template('blog-header', get_template_directory_uri() . '_preview/export/no-blog-template.php', false, true);
    }
    allow_template_duplicate('BlogTemplate');
?>
<?php
    if ('page' == get_option('show_on_front') && get_option('page_for_posts')) {
        register_template('blogTemplate', '/?page_id=' . get_option('page_for_posts') . '&custom_template=blogTemplate&custom_page=home.php');
    } else {
        register_template('blogTemplate', get_template_directory_uri() . '_preview/export/no-blog-template.php', false, true);
    }
    allow_template_duplicate('BlogTemplate');
?>
<?php register_template('hero-one', $GLOBALS['pageTemplatesHelper']->get_sample_page('page-hero-one.php'), true, true); ?>
<?php
    register_template('home', '/?custom_template=home&custom_page=front-page.php');
    allow_template_duplicate('HomeTemplate');
?>
<?php
    allow_template_duplicate('PageTemplate');

    $filename = 'default';
    register_template('pageTemplate', $GLOBALS['pageTemplatesHelper']->get_sample_page($filename), true, true);
?>
<?php
    register_template('search', '/?custom_template=search&custom_page=front-page.php');
    allow_template_duplicate('HomeTemplate');
?>
<?php
    allow_template_duplicate('SinglePostTemplate');

    register_template('singlePostTemplate', $GLOBALS['pageTemplatesHelper']->get_sample_post('single.php', 'default'), true, true);
?>
<?php
    register_template('template404', '/?page_id=1234567&custom_template=template404&custom_page=404.php');
    allow_template_duplicate('Template404');
?>