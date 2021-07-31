<?php

if (! defined('FW')) {
    die('Forbidden');
}

$options = array(
    'square_link' => array(
        'type' => 'text',
        'label' => __('Insert href for Square Link', 'fw'),
        'desc' => __('Insert href for Square Link', 'fw')
    ),
    'square_background_image' => array(
        'type' => 'background-image',
        'label' => __('Insert background image for Square Link', 'fw'),
        'desc' => __('Insert background image for Square Link', 'fw')
    ),
    'square_head' => array(
        'type' => 'text',
        'label' => __('Insert head for Square Link', 'fw'),
        'desc' => __('Insert head for Square Link', 'fw')
    ),
    'square_span' => array(
        'type' => 'text',
        'label' => __('Insert span for Square Link', 'fw'),
        'desc' => __('Insert span for Square Link', 'fw')
    ),
    'square_image_class' => array(
        'type' => 'text',
        'label' => __('Insert image class for Square Link', 'fw'),
        'desc' => __('Insert image class for Square Link', 'fw')
    ),
);
