<?php get_header();?>

<div id="page_container">
    
    <h2>
        <?php
        the_title();
        ?>
    </h2>
    
    <p>
        <?php
        if (have_posts()) : while (have_posts()) : the_post();
        the_content();
        endwhile; endif;
        ?>
    </p>
    
</div>

<?php get_footer();?>