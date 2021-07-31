<?php

if (! defined('FW')) {
    die('Forbidden');
}

$options = array(
    'span_wrapper'       => array(
        'type' => 'checkbox',
        'label' => __('Wrap in div', 'fw')
    ),
    'span_wrapper_class'       => array(
        'type' => 'text',
        'label' => __('Span wrapper class', 'fw')
    ),
    'span_icon'       => array(
        'type' => 'icon',
        'label' => __('Span Icon', 'fw')
    ),
    'span_content'    => array(
        'type'  => 'text',
        'label' => __('Span Content', 'fw'),
        'desc'  => __('Span Content', 'fw'),
    ),
    'span_class' => array(
        'type'  => 'text',
        'label' => __('Span Class', 'fw'),
        'desc' => __('Span Class', 'fw'),
    ),
    'span_id' => array(
        'type'  => 'text',
        'label' => __('Span ID', 'fw'),
        'desc' => __('Span ID', 'fw'),
    ),
    'span_data_from' => array(
        'type'  => 'text',
        'label' => __('data-from Attribute', 'fw'),
        'desc' => __('data-from Attribute', 'fw'),
    ),
    'span_data_to' => array(
        'type'  => 'text',
        'label' => __('data-to Attribute', 'fw'),
        'desc' => __('data-to Attribute', 'fw'),
    ),
    'span_other_atts' => array(
        'type' => 'text',
        'label' => __('Other Attributes', 'fw'),
        'desc' => __('Other Attributes', 'fw'),
    )
);
