<?php
/*
Default Template
*/
$GLOBALS['theme_current_template_info'] = array('name' => 'default');
?>
<?php if (!defined('ABSPATH')) exit; // Exit if accessed directly
?>
<!DOCTYPE html>
<html <?php echo !is_rtl() ? 'dir="ltr" ' : ''; language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>" />
    
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <script>
    var themeHasJQuery = !!window.jQuery;
</script>
<script src="<?php echo get_bloginfo('template_url', 'display') . '/jquery.js?ver=' . wp_get_theme()->get('Version'); ?>"></script>
<script>
    window._$ = jQuery.noConflict(themeHasJQuery);
</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--[if lte IE 9]>
<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_url', 'display') . '/layout.ie.css' ?>" />
<script src="<?php echo get_bloginfo('template_url', 'display') . '/layout.ie.js' ?>"></script>
<![endif]-->
<link class="data-control-id-9" href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,regular,italic,600,600italic,700,700italic,800,800italic&subset=latin' rel='stylesheet' type='text/css'>
<script src="<?php echo get_bloginfo('template_url', 'display') . '/layout.core.js' ?>"></script>
    
    <?php wp_head(); ?>
    
</head>
<?php do_action('theme_after_head'); ?>
<?php ob_start(); // body start ?>
<body <?php body_class('data-control-id-49 bootstrap bd-body-2  bd-pagebackground-110 bd-margins'); /*   */ ?>>
<header class="data-control-id-936270 bd-headerarea-1 bd-margins">
        <div class="bd-containereffect-7 container-effect container data-control-id-1597313"><section class="data-control-id-1558575 bd-section-3 bd-tagstyles " id="section3" data-section-title="Header Section With 2 Containers">
    <div class="bd-container-inner bd-margins clearfix">
        <div class="data-control-id-1558595 bd-layoutbox-13 bd-no-margins clearfix">
    <div class="bd-container-inner">
        <?php theme_logo_3(); ?>
    </div>
</div>
	
		<div class="data-control-id-1597496 bd-layoutbox-15 bd-no-margins clearfix">
    <div class="bd-container-inner">
        <?php
    if (theme_get_option('theme_use_default_menu')) {
        wp_nav_menu( array('theme_location' => 'primary-menu-10') );
    } else {
        theme_hmenu_10();
    }
?>
    </div>
</div>
    </div>
</section></div>
	
		<div class="bd-containereffect-9 container-effect container data-control-id-1598307"><section class="data-control-id-1597938 bd-section-10 bd-tagstyles " id="section10" data-section-title="Section">
    <div class="bd-container-inner bd-margins clearfix">
        <?php
    if (theme_get_option('theme_use_default_menu')) {
        wp_nav_menu( array('theme_location' => 'primary-menu-13') );
    } else {
        theme_hmenu_13();
    }
?>
	
		<div class="data-control-id-1598154 bd-socialicons-2">
    
        <a target="_blank" class="data-control-id-1598126 bd-socialicon-17 bd-socialicon" href="//www.facebook.com/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Flaclusazchalets">
    <span class="bd-icon"></span><span></span>
</a>
    
        <a target="_blank" class="data-control-id-1598129 bd-socialicon-18 bd-socialicon" href="//twitter.com/share?url=https%3A%2F%2Ftwitter.com%2Flaclusazchalets&amp;text=">
    <span class="bd-icon"></span><span></span>
</a>
    
    
        <a target="_blank" class="data-control-id-1598135 bd-socialicon-20 bd-socialicon" href="//pinterest.com/pin/create/button/?url=&amp;media=&amp;description=">
    <span class="bd-icon"></span><span></span>
</a>
    
    
        <a target="_blank" class="data-control-id-1598141 bd-socialicon-22 bd-socialicon" href="//instagram.com/ovonetwork">
    <span class="bd-icon"></span><span></span>
</a>
    
    
    
    
</div>
    </div>
</section></div>
</header>
	
		<div class="data-control-id-1243624 bd-stretchtobottom-6 bd-stretch-to-bottom" data-control-selector=".bd-contentlayout-2">
<div class="bd-contentlayout-2 bd-page-width   bd-sheetstyles data-control-id-318 bd-no-margins bd-margins" >
    <div class="bd-container-inner">

        <div class="bd-flex-vertical bd-stretch-inner bd-no-margins">
            
 <?php theme_sidebar_area_6(); ?>
            <div class="bd-flex-horizontal bd-flex-wide bd-no-margins">
                
                <div class="bd-flex-vertical bd-flex-wide bd-no-margins">
                    

                    <div class="data-control-id-1118911 bd-layoutitemsbox-16 bd-flex-wide bd-margins">
    <section class="data-control-id-1516013 bd-section-7 bd-tagstyles" id="section7" data-section-title="Section">
    <div class="bd-container-inner bd-margins clearfix">
        
    </div>
</section>
	
		<div class="data-control-id-369814 bd-content-14">
    
    <?php theme_print_content(); ?>
</div>
</div>

                    
                </div>
                
            </div>
            
        </div>

    </div>
</div></div>
	
		<footer class="data-control-id-936277 bd-footerarea-1 hidden-xs">
    <?php if (theme_get_option('theme_override_default_footer_content')): ?>
        <?php echo do_shortcode(theme_get_option('theme_footer_content')); ?>
    <?php else: ?>
        <div class="data-control-id-1452360 bd-layoutcontainer-11 bd-columns bd-no-margins">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row ">
                <div class="data-control-id-1452377 bd-columnwrapper-22 
 col-sm-3">
    <div class="bd-layoutcolumn-22 bd-column" ><div class="bd-vertical-align-wrapper"><img class="bd-imagelink-2 bd-own-margins bd-imagestyles-20   data-control-id-1566518"  src="<?php echo theme_get_image_path('images/fd43a4cb14bc77d189dad0554fa697cc_networkwhite.png'); ?>">
	
		<?php
    ob_start();
    theme_print_sidebar("footer1", 'footer_9_13');
    $current_sidebar_content = trim(ob_get_clean());

    if (isset($theme_hide_sidebar_area)) {
        $theme_hide_sidebar_area = $theme_hide_sidebar_area && !$current_sidebar_content;
    }

    theme_print_sidebar_content($current_sidebar_content, 'footer1', 'data-control-id-1566653 bd-footerwidgetarea-13 bd-no-margins clearfix', '');
?></div></div>
</div>
	
		<div class="data-control-id-1452364 bd-columnwrapper-21 
 col-sm-3">
    <div class="bd-layoutcolumn-21 bd-column" ><div class="bd-vertical-align-wrapper"><?php
    ob_start();
    theme_print_sidebar("footer2", 'footer_16_14');
    $current_sidebar_content = trim(ob_get_clean());

    if (isset($theme_hide_sidebar_area)) {
        $theme_hide_sidebar_area = $theme_hide_sidebar_area && !$current_sidebar_content;
    }

    theme_print_sidebar_content($current_sidebar_content, 'footer1', 'data-control-id-1621611 bd-footerwidgetarea-14 clearfix', '');
?>
	
		<div class="data-control-id-1566529 bd-layoutbox-21 bd-no-margins clearfix">
    <div class="bd-container-inner">
        <a class="bd-iconlink-2 bd-own-margins bd-iconlink data-control-id-1566547" href="https://www.instagram.com/ovonetwork">
    <span class="bd-icon-29 bd-icon data-control-id-1566546"></span>
</a>
	
		<span class="bd-iconlink-5 bd-own-margins bd-icon-38 bd-icon data-control-id-1566572"></span>
	
		<a class="bd-iconlink-11 bd-own-margins bd-iconlink data-control-id-1566623" href="https://twitter.com/laclusazchalets">
    <span class="bd-icon-50 bd-icon data-control-id-1566622"></span>
</a>
	
		<a class="bd-iconlink-13 bd-own-margins bd-iconlink data-control-id-1566640" href="https://www.facebook.com/laclusazchalets">
    <span class="bd-icon-52 bd-icon data-control-id-1566639"></span>
</a>
    </div>
</div></div></div>
</div>
	
		<div class="data-control-id-1452362 bd-columnwrapper-20 
 col-sm-3">
    <div class="bd-layoutcolumn-20 bd-column" ><div class="bd-vertical-align-wrapper"><?php
    ob_start();
    theme_print_sidebar("footer3", 'footer_11_9');
    $current_sidebar_content = trim(ob_get_clean());

    if (isset($theme_hide_sidebar_area)) {
        $theme_hide_sidebar_area = $theme_hide_sidebar_area && !$current_sidebar_content;
    }

    theme_print_sidebar_content($current_sidebar_content, 'footer1', 'data-control-id-1603182 bd-footerwidgetarea-9 clearfix', '');
?></div></div>
</div>
	
		<div class="data-control-id-1567023 bd-columnwrapper-7 
 col-sm-3">
    <div class="bd-layoutcolumn-7 bd-column" ><div class="bd-vertical-align-wrapper"><?php
    ob_start();
    theme_print_sidebar("footer4", 'footer_17_10');
    $current_sidebar_content = trim(ob_get_clean());

    if (isset($theme_hide_sidebar_area)) {
        $theme_hide_sidebar_area = $theme_hide_sidebar_area && !$current_sidebar_content;
    }

    theme_print_sidebar_content($current_sidebar_content, 'footer1', 'data-control-id-1603879 bd-footerwidgetarea-10 clearfix', '');
?></div></div>
</div>
            </div>
        </div>
    </div>
</div>
	
		<div class="data-control-id-1567136 bd-layoutbox-23 bd-no-margins clearfix">
    <div class="bd-container-inner">
        
	
		<p class="data-control-id-1570121 bd-textblock-6 bd-content-element">
    <?php
echo <<<'CUSTOM_CODE'
OVO Network Software Services Ltd trading as 'OVO' Network Registered in England 7029045<br style="color: rgb(221, 222, 218); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 10px; font-weight: 600; line-height: 14.2857px; text-align: center; background-color: rgb(51, 50, 51);">Copyright © 2016 - All rights reserved |Terms of use | Privacy Policy&nbsp;
CUSTOM_CODE;
?>
</p>
    </div>
</div>
    <?php endif; ?>
</footer>
	
		<div data-smooth-scroll data-animation-time="250" class="data-control-id-520690 bd-smoothscroll-3"><a href="#" class="data-control-id-2787 bd-backtotop-1 ">
    <span class="bd-icon-67 bd-icon data-control-id-2786"></span>
</a></div>
<div id="wp-footer">
    <?php wp_footer(); ?>
    <!-- <?php printf(__('%d queries. %s seconds.', 'default'), get_num_queries(), timer_stop(0, 3)); ?> -->
</div>
</body>
<?php echo apply_filters('theme_body', ob_get_clean()); // body end ?>
</html>