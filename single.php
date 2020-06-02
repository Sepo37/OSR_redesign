<?php get_header();?>

<div id="single_container">
    <h2>
        <?php the_title();?>
    </h2>

    <p>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </p>
</div>

<?php get_footer();?>