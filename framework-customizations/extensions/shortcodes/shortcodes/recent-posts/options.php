<?php

if (! defined('FW')) {
    die('Forbidden');
}

$options = array(
    'posts_check' => array(
        'type' => 'switch',
        'label' => __('Are you want create the title?', 'fw')
    ),
    'posts_bg_title' => array(
        'type' => 'text',
        'label' => __('Add big title for section', 'fw'),
        'desc' => __('Add title for section', 'fw'),
    ),
    'posts_bg_desc' => array(
        'type' => 'text',
        'label' => __('Add description for section', 'fw'),
        'desc' => __('Write here description', 'fw'),
    ),
    'posts_how_many' => array(
        'type' => 'text',
        'label' => __('Posts', 'fw'),
        'desc' => __('if is empty then you will see all posts', 'fw'),
    ),
);
