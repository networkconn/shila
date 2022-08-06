<?php /**
 * The Loop Conten Shila Theme.
 * @package Sila */ ?>

<div class="container shila_loop">
    <ul class="shila_content">
        <div class="shila_get_kotak">
            <span class="shila_kotak">All My Blog Post</span>
        </div>
        <?php while(have_posts()) : the_post(); ?>
        <li class="shila_card">
            <a href="<?php the_permalink(); ?>">
                <?php if(has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
                <div class="shila_card_body">
                    <span class="meta"><?php 
                    $cat_counter = count( get_the_terms( $post->ID, 'category') );
                    $i = 0; foreach( (get_the_category()) as $category ){
                        $i = $i + 1;
                        while( $i < $cat_counter){
                            echo $category->cat_name . ' ';
                            break;
                        }
                    } echo $category->cat_name; ?></span> /
                    <span class="meta"><?php the_time('F d, Y'); ?></span>
                    <?php the_title('<h2 class="shila_card_title">', '</h2>') ?>
                    <?php the_excerpt(); ?>
                </div>
            </a>
        </li>
        <?php endwhile;
            echo paginate_links( array(
                'mid_size' => 2
            )); ?>
    </ul>
    <div class="shila_sidebar">
        <?php get_sidebar(); ?>
    </div>
</div>