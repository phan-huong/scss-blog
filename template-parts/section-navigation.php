<?php 
    $site_name = get_theme_mod('site_name');
?>

<!-- Header Menu with Navigation Bar -->
<div class="menu_bar">
    <div class="menu_title"><?php echo $site_name; ?></div>
    <?php
    wp_nav_menu( array( 
        'theme_location' => 'primary', 
        'container_class' => 'nav_bar' ) ); 
    ?>
</div>