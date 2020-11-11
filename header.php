<!DOCTYPE html>
<html <?php  ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="charset" content="<?php bloginfo('char_set'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
    <nav class="navbar navbar-expand-lg navbar-light">
        <?php 
                $args= array(
                    'theme_location' => 'mainmenue',
                );
                wp_nav_menu($args); 
                get_search_form(); 
        ?>
        </nav>


    