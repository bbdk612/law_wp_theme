<?php

if (! defined('FW')) {
    die('Forbidden');
}

$options = array(
    'is_first' => array(
       'type' => 'checkbox',
        'label' => __('Is first element of list?', 'fw')
    ),
    'list_class' => array(
        'type' => 'text',
        'label' => __('Class List', 'fw')
    ),
    'list_text' => array(
        'type' => 'text',
        'label' => __('List text', 'fw')
    ),
    'list_link_url' => array(
        'type' => 'text',
        'label' => __('List Link url', 'fw')
    ),
    'is_last' => array(
        'type' => 'checkbox',
        'label' => __('Is last element of list', 'fw')
    ),

);
