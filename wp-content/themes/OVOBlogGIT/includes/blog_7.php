<?php
function theme_blog_7() {
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
    <div class=" bd-blog-7">
        <div class="bd-container-inner">
        
        
<?php
    if (have_posts()) { ?>
        <div class=" bd-grid-3 bd-margins">
          <div class="container-fluid">
            <div class="separated-grid row">
<?php       while (have_posts()) {
            the_post();

            $id = theme_get_post_id();
            $class = theme_get_post_class();
?>
                
                <div class="separated-item-5 col-md-4 col-sm-6 ">
                
                    <div class="bd-griditem-5">
                        <article id="<?php echo $id; ?>" class=" bd-article-8 clearfix <?php echo $class; if (theme_is_preview()) echo ' bd-post-id-' . theme_get_the_ID(); ?>">
    <div class=" bd-hoverbox-2 bd-effect-over-left">
  <div class="bd-slidesWrapper">
    <div class="bd-backSlide"><div class=" bd-container-39 bd-tagstyles">
    <?php echo theme_get_post_thumbnail(array(
    'size' => 'large',
    'class' => ' bd-postimage-6 bd-imagescaling bd-imagescaling-1',
    'img_class' => ' bd-imagestyles',
    'attributes' => '',
    'img_attributes' => '',
)); ?>
	
		<div class=" bd-layoutbox-9 bd-no-margins clearfix">
    <div class="bd-container-inner">
        <?php
if (!is_page() || theme_get_meta_option($post->ID, 'theme_show_page_title')) {
    $title = get_the_title();
    if(!is_singular()) {
        $title = sprintf('<a href="%s" rel="bookmark" title="%s">%s</a>', get_permalink($post->ID), strip_tags($title), $title);;
    }
    if (!theme_is_empty_html($title)) {
?>
<h2 class=" bd-postheader-15">
    <?php echo $title; ?>
</h2>
<?php
    }
}
?>
	
		<div class=" bd-layoutbox-48 bd-no-margins clearfix">
    <div class="bd-container-inner">
        <div class=" bd-posticondate-22 bd-no-margins">
    <span class=" "><span><?php echo get_the_date(); ?></span></span>
</div>
	
		<div class=" bd-posticontags-20">
    <?php $tags_list = get_the_tag_list('', ', '); ?>
    <?php if ($tags_list): ?>
    <span class=" "><span><?php echo $tags_list; ?></span></span>
    <?php endif; ?>
</div>
    </div>
</div>
    </div>
</div>
    <?php
echo <<<'CUSTOM_CODE'

CUSTOM_CODE;
?>
 </div></div>
    <div class="bd-overSlide"
        
        
        ><div class=" bd-container-66 bd-tagstyles">
    <?php
if (theme_is_preview() && is_singular()) {
    $editor_attrs = 'data-editable-id="post-' . theme_get_the_ID() . '"';
} else {
    $editor_attrs = '';
}
?>
<div class=" bd-postcontent-7 bd-tagstyles bd-custom-blockquotes bd-contentlayout-offset" <?php echo $editor_attrs; ?>>
    <?php echo(is_singular() ? theme_get_content() : theme_get_excerpt()); ?>
</div>
	
		<?php if ($post && !is_singular() && !theme_is_empty_html('Continue reading...')): ?>
    <a class="bd-postreadmore-3 bd-button-27 "   title="<?php echo strip_tags('Continue reading...') ?>" href="<?php echo get_permalink($post->ID) ?>"><?php _e('Continue reading...', 'default'); ?></a>
<?php endif; ?>
	
		<?php
if (!is_page() || theme_get_meta_option($post->ID, 'theme_show_page_title')) {
    $title = get_the_title();
    if(!is_singular()) {
        $title = sprintf('<a href="%s" rel="bookmark" title="%s">%s</a>', get_permalink($post->ID), strip_tags($title), $title);;
    }
    if (!theme_is_empty_html($title)) {
?>
<h2 class=" bd-postheader-7">
    <?php echo $title; ?>
</h2>
<?php
    }
}
?>
    <?php
echo <<<'CUSTOM_CODE'

CUSTOM_CODE;
?>
 </div></div>
  </div>
</div>
</article>
                        <?php
                        global $withcomments;
                        if (is_singular() || $withcomments){  ?>
                            <?php
    if (theme_get_option('theme_allow_comments')) {
        comments_template('/comments_7.php');
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
        <div class=" bd-blogpagination-7">
    <?php
if (is_single()){
    $prev_link = theme_get_next_post_link('%link', '%title &raquo;');
    $next_link = theme_get_previous_post_link('%link', '&laquo; %title');
    if ($prev_link || $next_link) { ?>
<ul class="bd-pagination-22 bd-no-margins pagination">
    <?php if ($next_link): ?>
    <li class="bd-paginationitem-22">
        <?php echo $next_link; ?>
    </li>
    <?php endif ?>

    <?php if ($prev_link): ?>
    <li class="bd-paginationitem-22">
        <?php echo $prev_link; ?>
    </li>
    <?php endif ?>
</ul>
<?php
    }
} else {
    global $wp_query;
    if ( $wp_query->max_num_pages > 1 ) {
        echo preg_replace(
            array(
                '/<li(.*current)/',
                '/<ul class=\'page-numbers\'/',
                '/<li>/'
            ),
            array(
                '<li  class=" bd-paginationitem-22 active"$1',
                '<ul  class=" bd-pagination-22 bd-no-margins pagination"',
                '<li  class=" bd-paginationitem-22">'
            ),
            paginate_links( array(
                'base' 			=> str_replace( 999999999, '%#%', get_pagenum_link( 999999999, false ) ),
                'format' 		=> '',
                'current' 		=> max( 1, get_query_var('paged') ),
                'total' 		=> $wp_query->max_num_pages,
                'prev_text' 	=> '&larr;',
                'next_text' 	=> '&rarr;',
                'type'			=> 'list',
                'end_size'		=> 3,
                'mid_size'		=> 3
            ) )
        );
    }
}
?>
</div>
        </div>
    </div>
<?php
    if($need_reset_query){
        wp_reset_query();
    }
}