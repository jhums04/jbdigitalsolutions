<?php 
    get_header();

    while(have_posts()) {
        the_post();?>
    <h1>Page template</h1>
    <h2><a href="<? the_permalink() ?>"><?php the_title();?></a></h2>
    <p><?php the_content();?></p>
    <?php }




        get_footer();

?>