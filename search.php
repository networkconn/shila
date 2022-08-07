<?php /**
 * Theme Name: search
 * @package Shila */ get_header(); ?>

<div class="container">
    <?php if(have_posts()) : ?>
        <div class="shila_rel" style="margin-top:40px;">
            <div class="shila_reli">
                <span class="shila_relo"><?php if( is_search() ){ echo get_search_query(); } else { _e('Search'); } ?></span>
            </div>
            <ul class="shila_related">
                <?php while(have_posts()) : the_post(); ?>
                <li style="margin-bottom:15px;" class="shila_related_li"><a class="_related" href="<?php the_permalink(); ?>">
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
            <?php
                echo '<div class="shila_pagination">';
                echo paginate_links( array(
                    'mid_size' => 2
                )); echo '</div>'; ?>
        </div>
    <?php else : ?>
        <div class="shila_404">
            <h2 class="shila_404_title">Nothing Result</h2>
            <p class="shila_404_p">You Search for "<?php if( is_search() ){ echo get_search_query(); } else { _e('Search'); } ?>" is Not releted to Blog Post</p>
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
    <?php endif; ?>
</div>

<?php get_footer(); ?>