<?php

function wpdevs_customizer($wp_customize)
{
    // 1 Copyright Section
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title' => 'Copyright Settings',
            'description' => 'Copyright Settings'
        )
    );

    $wp_customize->add_setting(
        'set_copyright',
        array(
            'type' => 'theme_mod',
            'default' => 'Copyright X - All Rights Reserved',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_copyright',
        array(
            'label' => 'Copyright Information',
            'description' => 'Type your copyright text here',
            'section' => 'sec_copyright',
            'type' => 'text'
        )
    );


    // 2 Hero
    $wp_customize->add_section(
        'sec_hero',
        array(
            'title' => 'Hero Section'
        )
    );

    // 2 Hero -> Title
    $wp_customize->add_setting(
        'set_hero_title',
        array(
            'type' => 'theme_mod',
            'default' => 'Set your hero title',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_title',
        array(
            'label' => 'Hero Title',
            'description' => 'Type your hero text here',
            'section' => 'sec_hero',
            'type' => 'text'
        )
    );

    // 3 Hero -> SubTitle
    $wp_customize->add_setting(
        'set_hero_subtitle',
        array(
            'type' => 'theme_mod',
            'default' => 'Set your hero subtitle',
            'sanitize_callback' => 'sanitize_textarea_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_subtitle',
        array(
            'label' => 'Hero Subtitle',
            'description' => 'Type your hero subtitle here',
            'section' => 'sec_hero',
            'type' => 'textarea'
        )
    );

    // 3 Hero -> Button Text
    $wp_customize->add_setting(
        'set_hero_button_text',
        array(
            'type' => 'theme_mod',
            'default' => 'Set your hero button text',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_button_text',
        array(
            'label' => 'Hero Button Text',
            'description' => 'Type your hero button text',
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
            'label' => 'Hero Button Link',
            'description' => 'Choose where button will link',
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
            'label' => 'Hero minimum height',
            'description' => 'Set the min-height of the hero section',
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
                'label' => 'Hero Background Image',
                'section' => 'sec_hero',
                'mime_type' => 'image'
            )
        )
    );

    // 3. Blog
    $wp_customize->add_section(
        'sec_blog',
        array(
            'title' => 'Blog Section'
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
            'label' => 'Posts per page',
            'description' => 'How many items to display in the post list?',
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
            'label' => 'Post categories to include',
            'description' => 'Comma separated values or single category ID',
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
            'label' => 'Post categories to exclude',
            'description' => 'Comma separated values or single category ID',
            'section' => 'sec_blog',
            'type' => 'text'
        )
    );
}

add_action('customize_register', 'wpdevs_customizer');
