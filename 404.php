<?php /**
 * Theme Name: 404
 * @package Shila */ get_header(); ?>

<div class="container">
    <div class="shila_404">
        <h2 class="shila_404_title">404</h2>
        <p class="shila_404_p">Page Not Found, Please visit another page!!</p>
        <hr>
    </div>
    <div class="shila_rel">
        <?php $shila_related = new Wp_Query( array(
            'posts_per_page' => 4,
        )); if($shila_related->have_posts()) : ?>
        <div class="shila_reli">
            <span class="shila_relo">New Article</span>
        </div>
        <ul class="shila_related">
            <?php while($shila_related->have_posts()) : $shila_related->the_post(); ?>
            <li class="shila_related_li"><a class="_related" href="<?php the_permalink(); ?>">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                <div class="_related_body">
                    <span class="_related_meta">
                    <?php 
                    $cat_counter = count( get_the_terms( $post->ID, 'category') );
                    $i = 0; foreach( (get_the_category()) as $category ){
                        $i = $i + 1;
                        while( $i < $cat_counter){
                            echo $category->cat_name . ' ';
                            break;
                        }
                    } echo $category->cat_name; ?>
                    </span> / <span class="_related_meta"><?php the_time('F d, Y'); ?></span>
                    <?php the_title('<h2 class="_related">', '</h2>'); ?>
                </div>
            </a></li>
            <?php endwhile; ?>
        </ul>
        <?php endif; wp_reset_query(); wp_reset_postdata(); ?>
    </div>
</div>

<?php get_footer(); ?>