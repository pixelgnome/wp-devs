<?php

function wpdevs_customizer($wp_customize)
{
    // 1 Copyright Section
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title' => __('Copyright Settings', 'wp-devs'),
            'description' => __('Copyright Settings', 'wp-devs'),
        )
    );

    $wp_customize->add_setting(
        'set_copyright',
        array(
            'type' => 'theme_mod',
            'default' => __('Copyright X - All Rights Reserved', 'wp-devs'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_copyright',
        array(
            'label' => __('Copyright Information', 'wp-devs'),
            'description' => __('Type your copyright text here', 'wp-devs'),
            'section' => 'sec_copyright',
            'type' => 'text'
        )
    );


    // 2 Hero
    $wp_customize->add_section(
        'sec_hero',
        array(
            'title' => __('Hero Section', 'wp-devs'),
        )
    );

    // 2 Hero -> Title
    $wp_customize->add_setting(
        'set_hero_title',
        array(
            'type' => 'theme_mod',
            'default' => __('Set your hero title', 'wp-devs'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_title',
        array(
            'label' => __('Hero Title', 'wp-devs'),
            'description' => __('Type your hero text here', 'wp-devs'),
            'section' => 'sec_hero',
            'type' => 'text'
        )
    );

    // 3 Hero -> SubTitle
    $wp_customize->add_setting(
        'set_hero_subtitle',
        array(
            'type' => 'theme_mod',
            'default' => __('Set your hero subtitle', 'wp-devs'),
            'sanitize_callback' => 'sanitize_textarea_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_subtitle',
        array(
            'label' => __('Hero Subtitle', 'wp-devs'),
            'description' => __('Type your hero subtitle here', 'wp-devs'),
            'section' => 'sec_hero',
            'type' => 'textarea'
        )
    );

    // 3 Hero -> Button Text
    $wp_customize->add_setting(
        'set_hero_button_text',
        array(
            'type' => 'theme_mod',
            'default' => __('Set your hero button text', 'wp-devs'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_button_text',
        array(
            'label' => __('Hero Button Text', 'wp-devs'),
            'description' => __('Type your hero button text', 'wp-devs'),
            'section' => 'sec_hero',
            'type' => 'text'
        )
    );

    // 3 Hero -> Button Link
    $wp_customize->add_setting(
        'set_hero_button_link',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_hero_button_link',
        array(
            'label' => __('Hero Button Link', 'wp-devs'),
            'description' => __('Choose where button will link', 'wp-devs'),
            'section' => 'sec_hero',
            'type' => 'url'
        )
    );

    // 3 Hero min height
    $wp_customize->add_setting(
        'set_hero_height',
        array(
            'type' => 'theme_mod',
            'default' => 800,
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_hero_height',
        array(
            'label' => __('Hero minimum height', 'wp-devs'),
            'description' => __('Set the min-height of the hero section', 'wp-devs'),
            'section' => 'sec_hero',
            'type' => 'number'
        )
    );

    // 4 Hero Background Image
    $wp_customize->add_setting(
        'set_hero_background_image',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint' //needs to bee absint because image ID in url is an integer
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Media_Control(
            $wp_customize,
            'set_hero_background_image',
            array(
                'label' => __('Hero Background Image', 'wp-devs'),
                'section' => 'sec_hero',
                'mime_type' => 'image'
            )
        )
    );

    // 3. Blog
    $wp_customize->add_section(
        'sec_blog',
        array(
            'title' => __('Blog Section', 'wp-devs')
        )
    );

    // Posts per page
    $wp_customize->add_setting(
        'set_per_page',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_per_page',
        array(
            'label' => __('Posts per page', 'wp-devs'),
            'description' => __('How many items to display in the post list?', 'wp-devs'),
            'section' => 'sec_blog',
            'type' => 'number'
        )
    );

    // Post categories to include
    $wp_customize->add_setting(
        'set_category_include',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_category_include',
        array(
            'label' => __('Post categories to include', 'wp-devs'),
            'description' => __('Comma separated values or single category ID', 'wp-devs'),
            'section' => 'sec_blog',
            'type' => 'text'
        )
    );

    // Post categories to exclude
    $wp_customize->add_setting(
        'set_category_exclude',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_category_exclude',
        array(
            'label' => __('Post categories to exclude', 'wp-devs'),
            'description' => __('Comma separated values or single category ID', 'wp-devs'),
            'section' => 'sec_blog',
            'type' => 'text'
        )
    );
}

add_action('customize_register', 'wpdevs_customizer');
