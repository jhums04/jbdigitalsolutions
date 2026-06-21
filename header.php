<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(''); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#main-content">Skip to content</a>

<header class="site-nav">
    <div class="nav-container">
        <!-- Logo linked to home -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo" aria-label="<?php bloginfo('name'); ?> homepage">
            <img
                src="<?php echo esc_url(get_theme_file_uri('/images/logo.png')); ?>"
                alt="<?php bloginfo('name'); ?> logo"
            >
        </a>

        <!-- Hamburger toggle -->
        <button
            class="mobile-toggle"
            aria-controls="primary-menu"
            aria-expanded="false"
            aria-label="Open menu"
        >
            <span class="hamburger-icon" aria-hidden="true"></span>
            <span class="sr-only">Menu</span>
        </button>

        <!-- Navigation wrapper -->
        <nav id="primary-menu" class="nav-menu" aria-label="Main navigation">
            <?php
            // Output primary links using wp_nav_menu (cleaner and filterable)
            if (has_nav_menu('top-nav')) {
                wp_nav_menu([
                    'theme_location' => 'top-nav',
                    'container'      => false,
                    'items_wrap'     => '<ul class="nav-links">%3$s</ul>',
                    'depth'          => 1,              // Only top-level, change if needed
                    'fallback_cb'    => false,
                ]);
            }
            ?>
            <div class="nav-cta">
                <a href="/contact" class="cta-button">Schedule a Call</a>
            </div>
        </nav>
    </div>
</header>