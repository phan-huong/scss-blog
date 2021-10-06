<?php 
function cbt_customize_register($wp_customize) {
    /** Index
         * GENERAL panel
         *      Personal Logo
         *      Site name
         */

    /** ==================== GENERAL panel ==================== */
    $wp_customize->add_panel('general_panel', array(
        'title'         => __('General', 'scssblog'),
        'description'   => __('General settings for SCSS Blog', 'scssblog'),
        'capability'    => 'edit_theme_options',
        'priority'      => 0
    ));
    /* ------------------------- Personal info -------------------------- */
    $wp_customize->add_section('general_section', array(
        'title'         => __('Site Info', 'scssblog'),
        'description'   => sprintf(__('Website information', 'scssblog')),
        'panel'         => 'general_panel',
        'priority'      => 0
    ));

    // Logo
    $wp_customize->add_setting('person_logo', array(
        'default'       => get_bloginfo('stylesheet_directory').'/assets/img/Amimated-me-512px.jpg',
        'type'          => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'person_logo_control',
        array(
            'label'         => __('Site Logo', 'scssblog'),
            'section'       => 'general_section',
            'settings'      => 'person_logo',
            'priority'      => 0
        )
    ));

    // Site name
    $wp_customize->add_setting('site_name', array(
        'default'       => get_bloginfo('name'),
        'type'          => 'theme_mod'
    ));
    $wp_customize->add_control('site_name', array(
        'label'         => __('Site name', 'scssblog'),
        'section'       => 'general_section',
        'priority'      => 1
    ));
}
add_action('customize_register', 'cbt_customize_register');
?>