<?php get_header();?>

<?php
    $main_post = array(
        'post_type'=> 'post',
        );
    $old_posts = array(
        'post_type'=> 'post',
        'offset'=>1,
        );
    
    $main_query = new WP_Query( $main_post );
    if ( $main_query->have_posts() ) :
    while ( $main_query->have_posts() ) : $main_query->the_post(); 

    static $count = 0;
    if ($count == "1") { break; }
    else { ?>

<div id="main_news" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
    
</div>
<div id="main_news_title">
    <h2><?php the_title(); ?></h2>
    
    <a href="<?php the_permalink(); ?>">Læs Mere</a>
</div>
<?php
    $count++; }
    endwhile;
    endif; 
?>

<div id="old_news">
    
    <?php
    $old_query = new WP_Query( $old_posts );
    if ( $old_query->have_posts() ) :
    while ( $old_query->have_posts() ) : $old_query->the_post(); 
    
    static $old_count = 0;
    if ($old_count == "3") { break; }
    else {
    ?>
    
    <div class="old_news_content" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
        <a href="<?php the_permalink(); ?>">Læs Mere</a>
    </div>
    
    <?php
    $old_count++; }
    endwhile;
    endif; 
    ?>
    
</div>

<?php get_footer();?>
