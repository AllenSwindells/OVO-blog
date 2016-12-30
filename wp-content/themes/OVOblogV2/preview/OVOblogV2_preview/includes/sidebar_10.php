<?php
function theme_block_footer_17_10($title = '', $content = '', $class = '', $id = ''){
?>
    <div class="data-control-id-1603878 bd-block-17 bd-own-margins <?php echo $class; ?>" data-block-id="<?php echo $id; ?>">
    <?php if (!theme_is_empty_html($title)){ ?>
    
    <div class="data-control-id-1603920 bd-blockheader bd-tagstyles">
        <h4><?php echo $title; ?></h4>
    </div>
    
<?php } ?>
    <div class="data-control-id-1603882 bd-blockcontent bd-tagstyles bd-custom-bulletlist <?php if (theme_is_search_widget($id)) echo ' shape-only'; ?>">
<?php echo $content; ?>
</div>
</div>
<?php
}
?>
<?php
function theme_block_secondary_15_10($title = '', $content = '', $class = '', $id = ''){
?>
    <div class="data-control-id-1519949 bd-block-15 bd-own-margins <?php echo $class; ?>" data-block-id="<?php echo $id; ?>">
    <?php if (!theme_is_empty_html($title)){ ?>
    
    <div class="data-control-id-1519989 bd-blockheader bd-tagstyles">
        <h4><?php echo $title; ?></h4>
    </div>
    
<?php } ?>
    <div class="data-control-id-1519952 bd-blockcontent bd-tagstyles bd-custom-bulletlist <?php if (theme_is_search_widget($id)) echo ' shape-only'; ?>">
<?php echo $content; ?>
</div>
</div>
<?php
}
?>
<?php
function theme_block_default_5_10($title = '', $content = '', $class = '', $id = ''){
?>
    <div class="data-control-id-31682 bd-block-5 bd-no-margins bd-own-margins <?php echo $class; ?>" data-block-id="<?php echo $id; ?>">
    <?php if (!theme_is_empty_html($title)){ ?>
    
    <div class="data-control-id-31683 bd-blockheader bd-tagstyles bd-custom-blockquotes bd-custom-button bd-custom-image bd-custom-table bd-no-margins">
        <h4><?php echo $title; ?></h4>
    </div>
    
<?php } ?>
    <div class="data-control-id-31684 bd-blockcontent bd-tagstyles bd-custom-blockquotes bd-custom-button bd-custom-image bd-custom-table <?php if (theme_is_search_widget($id)) echo ' shape-only'; ?>">
<?php echo $content; ?>
</div>
</div>
<?php
}
?>