<?php
function theme_blog_2() {
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
    <div class="data-control-id-1519 bd-blog-2">
        <div class="bd-container-inner">
        
            <?php
    if ( is_home() && 'page' == get_option('show_on_front') && get_option('page_for_posts') ){
        $blog_page_id = (int)get_option('page_for_posts');
        $title = '<a href="' . get_permalink($blog_page_id) . '" rel="bookmark" title="' . strip_tags(get_the_title($blog_page_id)) . '">' . get_the_title($blog_page_id) . '</a>';
    echo '<h2 class="data-control-id-1397 bd-container-17 bd-tagstyles">' . $title . '</h2>';
}
?>
        
<?php
    if (have_posts()) { ?>
        <div class="data-control-id-1365 bd-grid-5 bd-margins">
          <div class="container-fluid">
            <div class="separated-grid row">
<?php       while (have_posts()) {
            the_post();

            $id = theme_get_post_id();
            $class = theme_get_post_class();
?>
                
                <div class="separated-item-34 col-md-12 ">
                
                    <div class="bd-griditem-34">
                        <article id="<?php echo $id; ?>" class="data-control-id-1441 bd-article-3 clearfix <?php echo $class; if (theme_is_preview()) echo ' bd-post-id-' . theme_get_the_ID(); ?>">
    <section class="data-control-id-1608612 bd-section-4 bd-tagstyles" id="section4" data-section-title="2 Columns">
    <div class="bd-container-inner bd-margins clearfix">
        <div class="data-control-id-1608685 bd-layoutcontainer-10 bd-columns bd-no-margins">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row ">
                <div class="data-control-id-1608693 bd-columnwrapper-8 
 col-lg-8
 col-sm-6">
    <div class="bd-layoutcolumn-8 bd-column" ><div class="bd-vertical-align-wrapper"><?php echo theme_get_post_thumbnail(array(
    'size' => 'large',
    'class' => 'data-control-id-1591853 bd-postimage-7',
    'img_class' => 'data-control-id-1591840   img-responsive',
    'attributes' => '',
    'img_attributes' => '',
)); ?>
	
		<div class="data-control-id-1025346 bd-layoutbox-8 bd-no-margins clearfix">
    <div class="bd-container-inner">
        
    </div>
</div></div></div>
</div>
	
		<div class="data-control-id-1608700 bd-columnwrapper-25 
 col-lg-4
 col-sm-6">
    <div class="bd-layoutcolumn-25 bd-column" ><div class="bd-vertical-align-wrapper"><div class="data-control-id-1612763 bd-layoutbox-16 bd-no-margins clearfix">
    <div class="bd-container-inner">
        <?php
if (!is_page() || theme_get_meta_option($post->ID, 'theme_show_page_title')) {
    $title = get_the_title();
    if(!is_singular()) {
        $title = sprintf('<a href="%s" rel="bookmark" title="%s">%s</a>', get_permalink($post->ID), strip_tags($title), $title);;
    }
    if (!theme_is_empty_html($title)) {
?>
<h2 class="data-control-id-1245 bd-postheader-3">
    <?php echo $title; ?>
</h2>
<?php
    }
}
?>
	
		<div class="data-control-id-1253 bd-posticondate-4 bd-no-margins">
    <span class="data-control-id-1252 bd-icon bd-icon-39"><span><?php echo get_the_date(); ?></span></span>
</div>
	
		<div class="data-control-id-1262 bd-posticonauthor-5">
    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>" title="<?php echo esc_attr(__('View all posts by ' . get_the_author(), 'default')) ?>">
        <span class="data-control-id-1261 bd-icon bd-icon-41"><span><?php echo get_the_author(); ?></span></span>
    </a>
</div>
	
		<div class="data-control-id-1271 bd-posticonedit-6 bd-no-margins">
    <?php if (current_user_can('edit_post', $post->ID)): ?>
    <?php edit_post_link('<span class="data-control-id-1270 bd-icon bd-icon-43"><span>'.__('Edit', 'default').'</span></span>', ''); ?>
    <?php endif; ?>
</div>
    </div>
</div></div></div>
</div>
            </div>
        </div>
    </div>
</div>
    </div>
</section>
	
		<div class="data-control-id-1025447 bd-layoutbox-10 bd-no-margins clearfix">
    <div class="bd-container-inner">
        <?php
if (theme_is_preview() && is_singular()) {
    $editor_attrs = 'data-editable-id="post-' . theme_get_the_ID() . '"';
} else {
    $editor_attrs = '';
}
?>
<div class="data-control-id-1315 bd-postcontent-2 bd-tagstyles  bd-contentlayout-offset" <?php echo $editor_attrs; ?>>
    <?php echo(is_singular() ? theme_get_content() : theme_get_excerpt()); ?>
</div>
    </div>
</div>
	
		<div class="data-control-id-1025625 bd-layoutbox-12 bd-no-margins clearfix">
    <div class="bd-container-inner">
        <div class="data-control-id-1332 bd-posticontags-8 bd-no-margins">
    <?php $tags_list = get_the_tag_list('', ', '); ?>
    <?php if ($tags_list): ?>
    <span class="data-control-id-1331 bd-icon bd-icon-45"><span><?php echo $tags_list; ?></span></span>
    <?php endif; ?>
</div>
	
		<div class="data-control-id-1323 bd-posticoncategory-7 bd-no-margins">
    <?php
        $categories = get_the_category_list(', ');
        if (theme_strlen($categories) > 0) : ?>
    <span class="data-control-id-1322 bd-icon bd-icon-44"><span><?php echo get_the_category_list(', ');?></span></span>
    <?php endif ?>
</div>
    </div>
</div>
</article>
                        <?php
                        global $withcomments;
                        if (is_singular() || $withcomments){  ?>
                            <?php
    if (theme_get_option('theme_allow_comments')) {
        comments_template('/comments_2.php');
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
        <div class="data-control-id-1403 bd-blogpagination-2">
    <?php
if (is_single()){
    $prev_link = theme_get_next_post_link('%link', '%title &raquo;');
    $next_link = theme_get_previous_post_link('%link', '&laquo; %title');
    if ($prev_link || $next_link) { ?>
<ul class="bd-pagination-15 pagination">
    <?php if ($next_link): ?>
    <li class="bd-paginationitem-15">
        <?php echo $next_link; ?>
    </li>
    <?php endif ?>

    <?php if ($prev_link): ?>
    <li class="bd-paginationitem-15">
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
                '<li  class="data-control-id-1401 bd-paginationitem-15 active"$1',
                '<ul  class="data-control-id-1402 bd-pagination-15 pagination"',
                '<li  class="data-control-id-1401 bd-paginationitem-15">'
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