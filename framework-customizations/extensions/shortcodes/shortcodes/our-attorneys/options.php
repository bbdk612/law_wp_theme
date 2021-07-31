<?php

if (! defined('FW')) {
    die('Forbidden');
}

$options = array(
    'attorney_name' => array(
        'type' => 'text',
        'label' => __("Attorney's Name", 'fw'),
//        'desc' => __('Add title for section', 'fw'),
    ),
    'attorney_role' => array(
        'type' => 'text',
        'label' => __('Attourney\'s Role')
    ),
    'attorney_desc' => array(
        'type' => 'text',
        'label' => __('Attorney\'s description', 'fw'),
//        'desc' => __('Write here description', 'fw'),
    ),
    'attorney_image' => array(
        'type' => 'background-image',
        'label' => __("Photo Attorney's", 'fw'),
//        'desc' => __('if is empty then you will see all posts', 'fw'),
    ),
    'attorney_facebook' => array(
        'type' => 'text',
        'label' => __("Attorney's link to facebook"),
    ),
    'attorney_twitter' => array(
        'type' => 'text',
        'label' => __("Attorney's link to twitter"),
    ),
    'attorney_dribbble' => array(
        'type' => 'text',
        'label' => __("Attorney's link to dribbble"),
    ),
    'attorney_github' => array(
        'type' => 'text',
        'label' => __("Attorney's link to github"),
    ),
);
