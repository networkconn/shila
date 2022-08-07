<?php /**
 * Section for Echo 9 Posts Perpage Shila Theme.
 * @package Shila */ ?>
<section class="shila_section">
    <div class="shila_section_title">
        <span class="this_title"><?php echo get_option('shila_sec_2'); ?></span>
    </div>
    <div class="grid_3">
        <div class="grid_3A">
            <?php $shila_sec_2 = new Wp_Query( array(
                'posts_per_page' => '3',
                'category_name' => get_option('shila_sec_2'),
            )); $count=0; ?>
            <?php while($shila_sec_2->have_posts()) : $shila_sec_2->the_post(); $count++; ?>
            <?php if($count==2 || $count==3) : ?>
            <a href="<?php the_permalink(); ?>">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                <div class="grid_3ABody">
                    <span class="grid_3Aspan">By <?php the_author(); ?></span> / <span class="grid_3Aspan"><?php the_time('F d, Y'); ?></span>
                    <?php the_title('<h2 class="grid_3ATitle">', '</h2>'); ?>
                </div>
            </a>
            <?php endif; ?>
            <?php endwhile; ?>
            <?php wp_reset_query(); wp_reset_postdata(); ?>
        </div>
        <div class="grid_3B">
            <?php $shila_sec_2 = new Wp_Query( array(
                'posts_per_page' => '1',
                'category_name' => get_option('shila_sec_2'),
            )); $count=0; ?>
            <?php while($shila_sec_2->have_posts()) : $shila_sec_2->the_post(); $count++; ?>
            <a href="<?php the_permalink(); ?>">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                <div class="grid_3BBody">
                    <span class="grid_3Bspan">By <?php the_author(); ?></span> / <span class="grid_3Bspan"><?php the_time('F d, Y'); ?></span>
                    <?php the_title('<h2 class="grid_3BTitle">', '</h2>'); ?>
                </div>
            </a>
            <?php endwhile; ?>
            <?php wp_reset_query(); wp_reset_postdata(); ?>
        </div>
        <div class="grid_3C">
        <?php $shila_sec_2 = new Wp_Query( array(
            'posts_per_page' => '9',
            'category_name' => get_option('shila_sec_2'),
        )); $count=0; ?>
        <?php while($shila_sec_2->have_posts()) : $shila_sec_2->the_post(); $count++; ?>
            <?php if($count==4 || $count==5 || $count==6 || $count==7 || $count==8 || $count==9) : ?>
            <a href="<?php the_permalink(); ?>">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                <div class="grid_3CBody">
                    <span class="grid_3Cspan">By <?php the_author(); ?></span> / <span class="grid_3Cspan"><?php the_time('F d, Y'); ?></span>
                    <?php the_title('<h2 class="grid_3CTitle">', '</h2>'); ?>
                </div>
            </a>
            <?php endif; ?>
            <?php endwhile; ?>
        <?php wp_reset_query(); wp_reset_postdata(); ?>
        </div>
    </div>
</section>