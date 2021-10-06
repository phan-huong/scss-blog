<?php 
// Register Navigation Menu
function wpb_custom_new_menu() {
    register_nav_menus(
        array(
            'primary' => __( 'Navigation Bar')
        )
    );
}
add_action( 'init', 'wpb_custom_new_menu' );

// Customizer
require get_template_directory() . '/inc/customizer.php';
?>