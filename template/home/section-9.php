<section class="shila_lates">
    <div class="lates_left">
        <div class="shila_section_title">
            <span class="this_title"><?php echo get_option('shila_sec_9'); ?></span>
        </div>
        <ul class="shila_homeUL">
            <?php $shila_sec_9 = new Wp_Query( array(
                'posts_per_page' => 5,
                'category_name' => get_option('shila_sec_9'),
            )); while($shila_sec_9->have_posts()) : $shila_sec_9->the_post(); ?>
            <li class="shila_homeLI">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    <div class="shila_homeLI_Body">
                        <span class="shila_homeSpan">By <?php the_author(); ?></span> / <span class="shila_homeSpan"><?php the_time('F d, Y'); ?></span>
                        <?php the_title('<h2 class="shila_homeLITitle">', '</h2>'); ?>
                        <?php the_excerpt(); ?>
                    </div>
                </a>
            </li>
            <?php endwhile; 
                wp_reset_query(); wp_reset_postdata(); ?>
        </ul>
    </div>
    <div class="shila_sidebar">
        <?php get_sidebar(); ?>
    </div>
</section>