<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/imgs/favicon.png" type="image/png"/>

    <!--[if lte IE 9 ]>
    <script>
        alert('Browser version is too old and site will not be displayed correctly. Please, upgrade your browser.');
    </script>
    <![endif]-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="header-logo">
                    <div class="header-mob-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <?php the_custom_logo(); ?>
                </div>
               
                <div class="header-nav">
                    <div class="header-mob-btn header-mob-btn-in">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <?php
                        wp_nav_menu([
                            'theme_location' => '',
                            'menu' => 'header-menu',
                            'container' => '',
                            'container_class' => '',
                            'container_id' => '',
                            'menu_class' => 'header-menu',
                            'menu_id' => '',
                            'echo' => true,
                            'fallback_cb' => 'wp_page_menu',
                            'before' => '',
                            'after' => '',
                            'link_before' => '',
                            'link_after' => '',
                            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth' => 0,
                            'walker' => '',
                        ]);
                    ?>
                    <a href="/request-and-invite" class="header-btn">Request an invite</a>
                </div>
                <a href="/request-and-invite" class="header-btn header-btn-desc">Request an invite</a>

            </div>
        </div>
    </header>

    <div id="content" class="site-content">