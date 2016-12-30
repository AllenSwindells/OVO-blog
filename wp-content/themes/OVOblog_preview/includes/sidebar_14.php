<?php
function theme_block_footer_16_14($title = '', $content = '', $class = '', $id = ''){
?>
    <div class="data-control-id-1621610 bd-block-16 bd-own-margins <?php echo $class; ?>" data-block-id="<?php echo $id; ?>">
    <?php if (!theme_is_empty_html($title)){ ?>
    
    <div class="data-control-id-1621655 bd-blockheader bd-tagstyles">
        <h4><?php echo $title; ?></h4>
    </div>
    
<?php } ?>
    <div class="data-control-id-1621617 bd-blockcontent bd-tagstyles bd-custom-bulletlist <?php if (theme_is_search_widget($id)) echo ' shape-only'; ?>">
<?php echo $content; ?>
</div>
</div>
<?php
}
?>
<?php
function theme_block_secondary_1_14($title = '', $content = '', $class = '', $id = ''){
?>
    <div class="data-control-id-1523096 bd-block bd-own-margins <?php echo $class; ?>" data-block-id="<?php echo $id; ?>">
    <?php if (!theme_is_empty_html($title)){ ?>
    
    <div class="data-control-id-1523138 bd-blockheader bd-tagstyles">
        <h4><?php echo $title; ?></h4>
    </div>
    
<?php } ?>
    <div class="data-control-id-1523100 bd-blockcontent bd-tagstyles bd-custom-bulletlist <?php if (theme_is_search_widget($id)) echo ' shape-only'; ?>">
<?php echo $content; ?>
</div>
</div>
<?php
}
?>
<?php
function theme_block_default_1_14($title = '', $content = '', $class = '', $id = ''){
?>
    <div class="data-control-id-1002685 bd-block bd-own-margins <?php echo $class; ?>" data-block-id="<?php echo $id; ?>">
    <?php if (!theme_is_empty_html($title)){ ?>
    
    <div class="data-control-id-1002686 bd-blockheader bd-tagstyles">
        <h4><?php echo $title; ?></h4>
    </div>
    
<?php } ?>
    <div class="data-control-id-1002718 bd-blockcontent bd-tagstyles bd-custom-bulletlist <?php if (theme_is_search_widget($id)) echo ' shape-only'; ?>">
<?php echo $content; ?>
</div>
</div>
<?php
}
?>