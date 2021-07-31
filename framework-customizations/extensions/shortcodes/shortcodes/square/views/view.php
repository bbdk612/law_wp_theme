<?php
if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var array $atts
 */
//debug($atts);
?>

<a href="<?php echo $atts['square_link']; ?>"><img src="<?php echo $atts['square_background_image']['data']['icon']; ?>" class="<?php echo $atts['square_image_class'] ?>">
    <h3><?php echo $atts['square_head']; ?></h3>
    <span><?php echo $atts['square_span']; ?></span>
</a>