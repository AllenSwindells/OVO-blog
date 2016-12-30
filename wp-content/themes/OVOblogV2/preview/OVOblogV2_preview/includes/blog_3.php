<?php
function theme_blog_3() {
    global $post;
    $need_reset_query = false;
    if (is_page()) {
        $page_id = get_queried_object_id();
        if (theme_get_meta_option($page_id, 'theme_show_categories')) {
            $need_reset_query = true;
            query_posts(
                wp_parse_args(
                    'category_name=' . theme_get_meta_option($page_id, 'theme_categories'),
                    array(
                        'paged' => get_query_var('paged', get_query_var('page', 1))
                    )
                )
            );
        }
    }

    if (!$need_reset_query && theme_is_preview()) {
        global $theme_current_template_info;
        if (isset($theme_current_template_info)) {
            $template_name = $theme_current_template_info['name'];
            $ids = theme_get_option('theme_template_' . $template_name . '_query_ids');
            if ($ids) {
                $need_reset_query = true;
                $ids = explode(',', $ids);

                query_posts(array(
                    'post_type' => 'any',
                    'post__in' => $ids,
                    'paged' => get_query_var('paged', get_query_var('page', 1)),
                ));
            }
        }
    }
?>
    <div class="data-control-id-1735 bd-blog-3 bd-page-width ">
        <div class="bd-container-inner">
        
            <?php
    if ( is_home() && 'page' == get_option('show_on_front') && get_option('page_for_posts') ){
        $blog_page_id = (int)get_option('page_for_posts');
        $title = '<a href="' . get_permalink($blog_page_id) . '" rel="bookmark" title="' . strip_tags(get_the_title($blog_page_id)) . '">' . get_the_title($blog_page_id) . '</a>';
    echo '<h2 class="data-control-id-1613 bd-container-20 bd-tagstyles">' . $title . '</h2>';
}
?>
        
<?php
    if (have_posts()) { ?>
        <div class="data-control-id-1581 bd-grid-6 bd-margins">
          <div class="container-fluid">
            <div class="separated-grid row">
<?php       while (have_posts()) {
            the_post();

            $id = theme_get_post_id();
            $class = theme_get_post_class();
?>
                
                <div class="separated-item-21 col-md-12 ">
                
                    <div class="bd-griditem-21">
                        <div class="bd-containereffect-45 container-effect container data-control-id-1446603"><article id="<?php echo $id; ?>" class="data-control-id-1657 bd-article-4  clearfix <?php echo $class; if (theme_is_preview()) echo ' bd-post-id-' . theme_get_the_ID(); ?>">
    <?php echo theme_get_post_thumbnail(array(
    
    'class' => 'data-control-id-1522 bd-postimage-3',
    'img_class' => 'data-control-id-1521 bd-imagestyles',
    'attributes' => '',
    'img_attributes' => '',
)); ?>
	
		<?php
if (!is_page() || theme_get_meta_option($post->ID, 'theme_show_page_title')) {
    $title = get_the_title();
    if(!is_singular()) {
        $title = sprintf('<a href="%s" rel="bookmark" title="%s">%s</a>', get_permalink($post->ID), strip_tags($title), $title);;
    }
    if (!theme_is_empty_html($title)) {
?>
<h2 class="data-control-id-1520 bd-postheader-4">
    <?php echo $title; ?>
</h2>
<?php
    }
}
?>
	
		<?php
if (theme_is_preview() && is_singular()) {
    $editor_attrs = 'data-editable-id="post-' . theme_get_the_ID() . '"';
} else {
    $editor_attrs = '';
}
?>
<div class="data-control-id-1555 bd-postcontent-3 bd-tagstyles  bd-contentlayout-offset" <?php echo $editor_attrs; ?>>
    <?php echo(is_singular() ? theme_get_content() : theme_get_excerpt()); ?>
</div>
</article></div>
                        <?php
                        global $withcomments;
                        if (is_singular() || $withcomments){  ?>
                            <?php
    if (theme_get_option('theme_allow_comments')) {
        comments_template('/comments_3.php');
    }
?>
                        <?php } ?>
                    </div>
                </div>
<?php
        }
?>
                </div>
            </div>
        </div>
<?php
    } else {
        theme_404_content();
    }
?>
        
        </div>
    </div>
<?php
    if($need_reset_query){
        wp_reset_query();
    }
}