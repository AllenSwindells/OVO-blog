<?php
function theme_logo_3(){
?>
<?php
    $logoAlt = get_option('blogname');
    $logoSrc = theme_get_option('theme_logo_url');
    $logoLink = theme_get_option('theme_logo_link');
?>

<a class=" bd-logo-3 bd-no-margins" href="<?php
    if (!theme_is_empty_html($logoLink)) {
        echo $logoLink;
    } else {
        ?><?php
    }
?>">
<img class=" bd-imagestyles"<?php
                if (!theme_is_empty_html($logoSrc)) {
                    echo ' src="' . $logoSrc . '"';
                } else {
                    ?>
 src="<?php echo theme_get_image_path('images/193e34a4470c023d47b852f24154ac83_ovonetworklogo.png'); ?>"<?php
                } ?> alt="<?php echo $logoAlt ?>">
</a>
<?php
}