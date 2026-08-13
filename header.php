<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="site-header">

    <div class="container site-header__inner">

        <!-- Logo -->
        <div class="site-logo">

            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">

                <?php
                if ( has_custom_logo() ) {
                    the_custom_logo();
                } else {
                    bloginfo( 'name' );
                }
                ?>

            </a>

        </div>

        <!-- Navigation -->
        <nav
            class="site-navigation"
            aria-label="<?php esc_attr_e( 'Primary Navigation', 'artisan-coffee' ); ?>"
        >

            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'fallback_cb'    => false,
                )
            );
            ?>

        </nav>

    </div>

</header>