<?php
function theme_block_footer_9_13($title = '', $content = '', $class = '', $id = ''){
?>
    <div class=" bd-block-9 bd-own-margins <?php echo $class; ?>" data-block-id="<?php echo $id; ?>">
    <?php if (!theme_is_empty_html($title)){ ?>
    
    <div class=" bd-blockheader bd-tagstyles bd-custom-blockquotes bd-custom-button bd-custom-image bd-custom-inputs bd-custom-bulletlist bd-custom-orderedlist bd-custom-table">
        <h4><?php echo $title; ?></h4>
    </div>
    
<?php } ?>
    <div class=" bd-blockcontent bd-tagstyles bd-custom-blockquotes bd-custom-button bd-custom-image bd-custom-inputs bd-custom-bulletlist bd-custom-orderedlist bd-custom-table <?php if (theme_is_search_widget($id)) echo ' shape-only'; ?>">
<?php echo $content; ?>
</div>
</div>
<?php
}
?>