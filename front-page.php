<?php 
get_header();
?>

<<div class="container hero">
    <div class="hero-text-group">
        <h1 class="hero-title">We Build Websites That Generate Leads</h1>
        <p class="hero-subtitle">Custom Solutions for growing businesses.</p>
        <div class="hero-actions">
            <button class="btn btn-primary">Get Free Consultation</button>
        </div>
    </div>

    <div class="hero-image bento">
        <!-- Left column: tall main image -->
        <div class="bento-card card-main">
            <img src="<?php echo get_theme_file_uri('/images/web-dev.png'); ?>" alt="Web development showcase">
        </div>

        <!-- Right column: three stacked images (wrapped in a flex column container) -->
        <div class="bento-right-stack">
            <div class="bento-card card-row1">
                <img src="<?php echo get_theme_file_uri('/images/cellphone.png'); ?>" alt="Leads checking on phone">
            </div>
            <div class="bento-card card-row1">
                <img src="<?php echo get_theme_file_uri('/images/ranking.png'); ?>" alt="Website ranking dashboard">
            </div>
            <div class="bento-card card-row1">
                <img src="<?php echo get_theme_file_uri('/images/automation.png'); ?>" alt="Automation visual workflow">
            </div>
        </div>
    </div>
</div>

   <?php

    get_footer();


?>