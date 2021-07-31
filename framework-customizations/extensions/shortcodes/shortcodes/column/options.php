<?php

if (! defined('FW')) {
    die('Forbidden');
}

$options = array(
    'col_class' => array(
        'type'  => 'text',
        'label' => __('Column Class', 'fw'),
        'desc' => __('Column Class', 'fw'),
    ),
    'col_id' => array(
        'type'  => 'text',
        'label' => __('Column ID', 'fw'),
        'desc' => __('Column ID', 'fw'),
    ),
    'col_atts' => array(
        'type' => 'text',
        'label' => __('Attributes Column', "fw"),
        'desc' => __('Attributes Column', "fw"),
    ),
    'col_background_image' => array(
        'type' => 'background-image',
        'label' => __('Background image Column', 'fw'),
        'desc' => __('Background image Column', 'fw'),
    )
);
