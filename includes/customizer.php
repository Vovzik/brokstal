<?php
add_action( 'customize_register', function ( WP_Customize_Manager $wp_customize ) {

    $wp_customize->add_section( 'brokstal_theme_options', array(
        'title' => __( 'Theme options', 'brokstal' ),
        'priority' => 10,
    ) );

    // phone
    $wp_customize->add_setting( 'brokstal_phone' );
    $wp_customize->add_control( 'brokstal_phone', array(
        'label' => __( 'header logo phone', 'brokstal' ),
        'section' => 'brokstal_theme_options',
    ) );

    // Телеграм
    $wp_customize->add_setting( 'brokstal_telegram' );
    $wp_customize->add_control( 'brokstal_telegram', array(
        'label' => __( 'Telegram', 'brokstal' ),
        'section' => 'brokstal_theme_options',
    ) );

    // vk
    $wp_customize->add_setting( 'brokstal_vk' );
    $wp_customize->add_control( 'brokstal_vk', array(
        'label' => __( 'vk', 'brokstal' ),
        'section' => 'brokstal_theme_options',
    ) );

    // whatsapp
    $wp_customize->add_setting( 'brokstal_whatsapp' );
    $wp_customize->add_control( 'brokstal_whatsapp', array(
        'label' => __( 'whatsapp', 'brokstal' ),
        'section' => 'brokstal_theme_options',
    ) );

    // Телеграм link
    $wp_customize->add_setting( 'brokstal_telegram_link' );
    $wp_customize->add_control( 'brokstal_telegram_link', array(
        'label' => __( 'Telegram_link', 'brokstal' ),
        'section' => 'brokstal_theme_options',
    ) );

    // vk link
    $wp_customize->add_setting( 'brokstal_vk_link' );
    $wp_customize->add_control( 'brokstal_vk_link', array(
        'label' => __( 'vk_link', 'brokstal' ),
        'section' => 'brokstal_theme_options',
    ) );

    // whatsapp link
    $wp_customize->add_setting( 'brokstal_whatsapp_link' );
    $wp_customize->add_control( 'brokstal_whatsapp_link', array(
        'label' => __( 'whatsapp_link', 'brokstal' ),
        'section' => 'brokstal_theme_options',
    ) );
} );

function brokstal_theme_options() {
    return array(
        'phone' => get_theme_mod( 'brokstal_phone' ),
        'telegram' => get_theme_mod( 'brokstal_telegram' ),
        'vk' => get_theme_mod( 'brokstal_vk' ),
        'whatsapp' => get_theme_mod( 'brokstal_whatsapp' ),
        'telegram_link' => get_theme_mod( 'brokstal_telegram_link' ),
        'vk_link' => get_theme_mod( 'brokstal_vk_link' ),
        'whatsapp_link' => get_theme_mod( 'brokstal_whatsapp_link' ),
    );
}

