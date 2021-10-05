<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awesome Blog</title>
    <!-- Main theme CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/main.css">
    <!-- Start automatic head of WP -->
    <?php wp_head(); ?>
    <!-- End automatic head of WP -->
</head>
<body class="my_body">
    <header>
        <!-- Navigation bar -->
        <?php get_template_part('template-parts/section', 'navigation'); ?>
    </header>