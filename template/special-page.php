<?php /**
 * Special Page Shila Theme For Front Page.
 * @package Shila */
$shila_hero = get_option('shila_hero');
if($shila_hero == 'active' || $shila_hero == '') : ?>
<?php $hero = new Wp_Query( array(
    'posts_per_page' => 5,
)); $count = 0; if($hero->have_posts()) :?>
<section class="hero">
    <?php while($hero->have_posts()) : $hero->the_post(); $count++; ?>
    <?php if($count==1){ ?>
    <a href="<?php the_permalink(); ?>" class="hero_link">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
        <div class="hero_body">
            <span class="meta"><?php 
                $cat_counter = count( get_the_terms( $post->ID, 'category') );
                $i = 0; foreach( (get_the_category()) as $category ){
                    $i = $i + 1; while( $i < $cat_counter){
                        echo $category->cat_name . ' '; break;
                    }} echo $category->cat_name; ?>
            </span> / <span class="meta"><?php the_time('F d, Y'); ?></span>
            <?php the_title('<h2 class="hero_title">', '</h2>'); ?>
        </div>
    </a>
    <div class="hero_child container">
    <?php } else{ ?>
        <a href="<?php the_permalink(); ?>" class="hero_child_link">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            <div class="hero_child_body">
                <span>By: <?php the_author(); ?></span> / <span><?php the_time('F d, Y'); ?></span>
                <h2 class="child_hero_title"><?php the_title(); ?></h2>
            </div>
        </a>
    <?php } endwhile; ?>
    </div>
</section>
<?php else : 
    echo '<style type="text/css">
    .shila_404{
        width: 100%;
        max-width: 400px;
        box-sizing: border-box;
        margin: 40px auto;
        text-align: center;
    }
    .shila_404 .shila_404_title{
        font-size: 60px;
        color: #a8a6a6;
        margin-bottom: 20px;
        font-family: Anton;
        letter-spacing: 3px;
    }
    .shila_404 .shila_404_p{
        font-size: 18px;
        color: var(--pColor);
        font-family: Oswald;
    }
    .shila_404 hr{
        width: 100%;
        margin-top: 20px;
        background-color: var(--linkColor);
        height: 3px;
        transform: skewX(-10deg);
    }
    </style>';
    get_template_part('template/loop/emty'); ?>
<?php endif; wp_reset_query(); wp_reset_postdata(); endif;
echo '<div class="container">';
if(get_option('shila_sec_1') != 'false' && get_option('shila_sec_1') != ''){
    get_template_part('template/home/section', '1');
} if(get_option('shila_sec_2') != 'false' && get_option('shila_sec_2') != ''){
    get_template_part('template/home/section', '2');
} if(get_option('shila_sec_3') != 'false' && get_option('shila_sec_3') != ''){
    get_template_part('template/home/section', '3');
} if(get_option('shila_sec_4') != 'false' && get_option('shila_sec_4') != ''){
    get_template_part('template/home/section', '4');
} if(get_option('shila_sec_5') != 'false' && get_option('shila_sec_5') != ''){
    get_template_part('template/home/section', '5');
} if(get_option('shila_sec_6') != 'false' && get_option('shila_sec_6') != ''){
    get_template_part('template/home/section', '6');
} if(get_option('shila_sec_7') != 'false' && get_option('shila_sec_7') != ''){
    get_template_part('template/home/section', '7');
} if(get_option('shila_sec_8') != 'false' && get_option('shila_sec_8') != ''){
    get_template_part('template/home/section', '8');
} if(get_option('shila_sec_9') != 'false' && get_option('shila_sec_9') != ''){
    get_template_part('template/home/section', '9');
} echo '</div>';
echo get_site_icon_url(); ?>