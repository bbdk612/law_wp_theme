<?php if (!defined('FW')) {
    die('Forbidden');
}

//debug($atts);

$class = fw_ext_builder_get_item_width('page-builder', $atts['width'] . '/frontend_class');
?>
<div class="<?php echo esc_attr($class); ?> <?php if (!empty($atts['col_class'])) {
    echo $atts['col_class'];
} ?>" 
    <?php if (!empty($atts['col_id'])) {
    echo "id='{$atts['col_id']}'";
} ?> 
    <?php if (!empty($atts['col_atts'])) {
    echo $atts['col_atts'];
} ?>
    <?php if(!empty($atts['col_background_image']['data']['css']['background-image'])){
//        debug($atts);
        echo 'style=background-image:'.$atts['col_background_image']['data']['css']['background-image'].';';
    }?> >
	<?php echo do_shortcode($content); ?>
</div>
