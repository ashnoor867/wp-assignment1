<?php
/**
 * Template Name: Custom Homepage
 */
get_header(); ?>
<main class="home-template-main">
    <h1>Latest Learnings</h1>
    <p>Checkout some latest learnings about posts and shortcodes.</p>

    <ul class="latest-learnings-list">
        <?php
        $query = new WP_Query(array('posts_per_page' => 8));
        while ($query->have_posts()):
            $query->the_post();
            ?>
            <li class="latest-learnings-item">
                <div class="latest-learning-thumbnail">
                    <?php the_post_thumbnail('medium'); ?>
                </div>
                <h3 class="latest-learnings-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
                <p class="latest-learnings-meta">
                    Published on <?php echo get_the_date(); ?> by <?php the_author(); ?>
                </p>
                <p class="latest-learnings-excerpt">
                    <?php echo get_the_excerpt(); ?>
                </p>
                <a href="<?php the_permalink(); ?>" class="read-more-btn">Read More</a>
            </li>
        <?php endwhile;
        wp_reset_postdata(); ?>
    </ul>
</main>
<?php get_footer(); ?>