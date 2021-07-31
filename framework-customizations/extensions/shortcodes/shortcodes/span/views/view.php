<?php if (! defined('FW')) {
    die('Forbidden');
}

/**
 * @var array $atts
 */
?>
<?php if (!empty($atts['span_wrapper'])):  ?>
    <div class=" <?php if (!empty($atts['span_wrapper_class'])) {
    echo $atts['span_wrapper_class'];
} ?> ">
<?php endif; ?>
<span
    <?php if (!empty($atts['span_class'])) {
    echo "class='{$atts['span_class']}'";
} ?>
    <?php if (!empty($atts['span_id'])) {
    echo "id='{$atts['span_id']}'";
} ?>
    <?php if (!empty($atts['span_data_to'])) {
    echo "data-from=\"{$atts['span_data_from']}\" data-to=\"{$atts['span_data_to']}\" data-speed=\"5000\" data-refresh-interval=\"50\"";
}?>
    <?php if (!empty($atts['span_other_atts'])) {
    echo $atts['span_other_atts'];
} ?>
>
    <?php if (!empty($atts['span_icon'])): ?>
        <i class="<?php echo $atts['span_icon'] ?>"></i>
    <?php endif; ?>
    <?php if (!empty($atts['span_content'])) {
    echo $atts['span_content'];
} ?>
</span>
        
<?php if (!empty($atts['span_wrapper'])):  ?>
    </div>
<?php endif; ?>