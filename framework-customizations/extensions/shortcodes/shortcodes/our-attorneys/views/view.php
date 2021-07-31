<?php
if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var array $atts
 */
//debug($atts);
?>

<div class = "fh5co-staff">
    <img src = <?php if (!empty($atts['attorney_image']['data']['icon'])) {
    echo $atts['attorney_image']['data']['icon'];
} ?> alt = "Free HTML5 Templates by gettemplates.co">
    <h3>
        <?php if (!empty($atts['attorney_name'])) {
    echo $atts['attorney_name'];
} ?>
    </h3>
    <strong class = "role">
        <?php if (!empty($atts['attorney_role'])) {
    echo $atts['attorney_role'];
} ?>
    </strong>
    <p>
        <?php if (!empty($atts['attorney_desc'])) {
    echo $atts['attorney_desc'];
} ?>
    </p>
    <ul class = "fh5co-social-icons">
        <li>
            <a href = <?php if (!empty($atts['attorney_facebook'])) {
    echo $atts['attorney_facebook'];
} ?>>
                <i class = "icon-facebook"></i>
            </a>
        </li>
        <li>
            <a href = <?php if (!empty($atts['attorney_twitter'])) {
    echo $atts['attorney_twitter'];
} ?>>
                <i class = "icon-twitter"></i>
            </a>
        </li>
        <li>
            <a href = <?php if (!empty($atts['attorney_dribbble'])) {
    echo $atts['attorney_dribbble'];
} ?>>
                <i class = "icon-dribbble"></i>
            </a>
        </li>
        <li>
            <a href = <?php if (!empty($atts['attorney_github'])) {
    echo $atts['attorney_github'];
} ?>>
                <i class = "icon-github"></i>
            </a>
        </li>
    </ul>
</div>
