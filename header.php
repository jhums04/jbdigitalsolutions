<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head() ?>
</head>
<body>
    <nav>
        <div class="nav-container">
            <div class="logo">
                <img src="<?php echo get_theme_file_uri('/images/logo.png') ?>" alt="logo">
            </div>

            <div class="nav-links-container">
        
                    
                    <?php 
                        $menu_location = 'top-nav';
                        $locations = get_nav_menu_locations(); 

                        if (isset($locations[$menu_location])) {
                            $menu_items = wp_get_nav_menu_items( $locations[ $menu_location ] );
                            if (!empty($menu_items)) {
                                echo '<ul class="nav-links">';
                                foreach((array) $menu_items as $item) {
                                    if ($item->menu_item_parent == 0) {
                                        $classes = ! empty( $item->classes ) ? implode( ' ', $item->classes ) : '';
                                        $url     = esc_url( $item->url );
                                        $title   = esc_html( $item->title );

                                        echo '<li class="nav-items ' . $classes . '">';
                                        echo '<a href="' . $url . '">' . $title . '</a>';
                                        echo '</li>';
                                    }
                                }
                                echo '</ul>';
                            }

                        } else {
                            echo '<p>Menu location "' . $menu_location . '" is not set.</p>';
                        }


                    ?>  
            </div>

            <div class="nav-cta">
                <button>
                    Schedule a call
                </button>
            </div>


      
        </div>
    </nav>
</body>
</html>