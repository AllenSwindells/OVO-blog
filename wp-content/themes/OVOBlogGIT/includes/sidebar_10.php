<?php
function theme_block_footer_17_10($title = '', $content = '', $class = '', $id = ''){
?>
    <div class=" bd-block-17 bd-own-margins <?php echo $class; ?>" data-block-id="<?php echo $id; ?>">
    <?php if (!theme_is_empty_html($title)){ ?>
    
    <div class=" bd-blockheader bd-tagstyles">
        <h4><?php echo $title; ?></h4>
    </div>
    
<?php } ?>
    <div class=" bd-blockcontent bd-tagstyles bd-custom-bulletlist <?php if (theme_is_search_widget($id)) echo ' shape-only'; ?>">
<?php echo $content; ?>
</div>
</div>
<?php
}
?>
<?php
function theme_block_secondary_15_10($title = '', $content = '', $class = '', $id = ''){
?>
    <div class=" bd-block-15 bd-own-margins <?php echo $class; ?>" data-block-id="<?php echo $id; ?>">
    <?php if (!theme_is_empty_html($title)){ ?>
    
    <div class=" bd-blockheader bd-tagstyles">
        <h4><?php echo $title; ?></h4>
    </div>
    
<?php } ?>
    <div class=" bd-blockcontent bd-tagstyles bd-custom-bulletlist <?php if (theme_is_search_widget($id)) echo ' shape-only'; ?>">
<?php echo $content; ?>
</div>
</div>
<?php
}
?>
<?php
function theme_block_default_5_10($title = '', $content = '', $class = '', $id = ''){
?>
    <div class=" bd-block-5 bd-no-margins bd-own-margins <?php echo $class; ?>" data-block-id="<?php echo $id; ?>">
    <?php if (!theme_is_empty_html($title)){ ?>
    
    <div class=" bd-blockheader bd-tagstyles bd-custom-blockquotes bd-custom-button bd-custom-image bd-custom-table bd-no-margins">
        <h4><?php echo $title; ?></h4>
    </div>
    
<?php } ?>
    <div class=" bd-blockcontent bd-tagstyles bd-custom-blockquotes bd-custom-button bd-custom-image bd-custom-table <?php if (theme_is_search_widget($id)) echo ' shape-only'; ?>">
<?php echo $content; ?>
</div>
</div>
<?php
}
?>