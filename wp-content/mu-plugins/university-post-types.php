<?php

function university_post_types() {
    register_post_type('event', array(
        'public' => true,
        'menu_icon' => 'dashicons-calendar',
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
        )
    ));
}

add_action('init', 'university_post_types');