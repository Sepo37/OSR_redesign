<?php get_header();?>

<div id="posts_container">
    <?php
        
        if ( have_posts() ) :
        while ( have_posts() ) : the_post();
    ?>

    <div class="archive-posts">
        <h2>
            <a href="<?php the_permalink() ?>">
                <?php the_title();?>
            </a>
        </h2>
        
        <p class="post_data">
            Udgivet <?php the_time('j. F Y'); ?> |
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                 af <?php the_author(); ?>
            </a>
        </p>
        
        <div class="post_exerpt">
            <?php
                the_excerpt();
            ?>
        </div>
        
        <?php
        $categories = get_the_category();
        $separator = ", ";
        $output = '';
        
        if($categories){
            foreach ($categories as $category){
                $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
            }
            
            ?>
        <p class="post_cat">
            <?php
                echo trim($output, $separator);
            ?>
        </p>
        <?php    
            };
        ?>
        
    </div>

    <?php
        endwhile;
        echo paginate_links();
        endif;
        
    ?>
</div>

<?php get_footer();?>