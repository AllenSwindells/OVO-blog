<?php
function theme_block_footer_11_9($title = '', $content = '', $class = '', $id = ''){
?>
    <div class="data-control-id-1603181 bd-block-11 bd-own-margins <?php echo $class; ?>" data-block-id="<?php echo $id; ?>">
    <?php if (!theme_is_empty_html($title)){ ?>
    
    <div class="data-control-id-1603223 bd-blockheader bd-tagstyles">
        <h4><?php echo $title; ?></h4>
    </div>
    
<?php } ?>
    <div class="data-control-id-1603185 bd-blockcontent bd-tagstyles bd-custom-bulletlist <?php if (theme_is_search_widget($id)) echo ' shape-only'; ?>">
<?php echo $content; ?>
</div>
</div>
<?php
}
?>