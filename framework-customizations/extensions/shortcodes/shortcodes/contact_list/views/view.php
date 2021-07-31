<?php
if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var array $atts
 */
//debug($atts);
?>
<?php if (!empty($atts['is_first'])): ?>
    <ul>
<?php endif; ?>
        <li class="<?php if (!empty($atts['list_class'])) {
    echo $atts['list_class'];
} ?>">
            <?php if (!empty($atts['list_link_url'])): ?>
                <a href="<?php echo $atts['list_link_url'] ?>">
            <?php endif; ?>
    <?php if (!empty($atts['list_text'])) {
    echo $atts['list_text'];
} ?>
            <?php if (!empty($atts['list_link_url'])): ?>
                </a>
            <?php endif; ?>
        </li>
<?php if (!empty($atts['is_last'])): ?>
    </ul>
<?php endif; ?>
