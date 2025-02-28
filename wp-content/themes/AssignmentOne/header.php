<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet"
        href="<?php echo esc_url(home_url('wp-content/themes/AssignmentOne/css/custom-style.css')); ?>">
</head>

<body <?php body_class(); ?> style="overflow-x: hidden">
    <header class="default-header">
        <div style="display: flex; justify-content: center; align-items: center; gap: 1rem; padding: 0 5%;">
            <a href="<?php echo esc_url(home_url()); ?>">
                <img src="<?php echo esc_url(home_url('/wp-content/uploads/2025/02/wordpress.png')) ?>"
                    alt="header logo" style="height: 3rem">
            </a>
            <h1 style="text-decoration: underline;">Wordpress - What we learnt? </h1>
        </div>
        <nav>
            <?php wp_nav_menu(
                array(
                    'menu' => 'main',
                    'theme_location' => '',
                    'depth' => 2,
                    'fallback_cb' => false
                )
            ) ?>
        </nav>
    </header>