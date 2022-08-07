<?php /**
 * Shila Theme Section 6 Col For Post
 * @package Shila */ ?>
<section class="shila_section">
    <div class="shila_section_title">
        <span class="this_title"><?php echo get_option('shila_sec_5'); ?></span>
    </div>
    <div class="grid_2">
        <?php $shila_sec_5 = new Wp_Query( array(
            'posts_per_page' => '2',
            'category_name' => get_option('shila_sec_5'),
        )); $count=0; ?>
        <?php while($shila_sec_5->have_posts()) : $shila_sec_5->the_post(); ?>
        <a href="<?php the_permalink(); ?>">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            <div class="grid_2B">
                <span class="grid_2Date"><?php the_time('F d, Y'); ?></span>
                <?php the_title('<h2 class="grid_2Title">', '</h2>'); ?>
            </div>
        </a>
        <?php endwhile; ?>
        <?php wp_reset_query(); wp_reset_postdata(); ?>
    </div>
    <div class="grid_4">
        <?php $shila_sec_5 = new Wp_Query( array(
            'posts_per_page' => '6',
            'category_name' => get_option('shila_sec_5'),
        )); $count=0; ?>
        <?php while($shila_sec_5->have_posts()) : $shila_sec_5->the_post(); $count++; ?>
        <?php if($count==3 || $count==4 || $count==5 || $count==6 ) : ?>
        <a href="<?php the_permalink(); ?>">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            <div class="grid_4B">
                <span class="grid_4Date">By <?php the_author(); ?></span> / <span class="grid_4Date"><?php the_time('F d, Y'); ?></span>
                <?php the_title('<h2 class="grid_4Title">', '</h2>'); ?>
            </div>
        </a>
        <?php endif; ?>
        <?php endwhile; ?>
        <?php wp_reset_query(); wp_reset_postdata(); ?>
    </div>
</section>