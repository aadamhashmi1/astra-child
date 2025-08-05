<?php
/*
Template Name: Custom Home Template
*/

get_header(); ?>

<main id="primary" class="site-main">
    <section class="custom-home">
        <div class="custom-featured">
            <h2>Featured Post</h2>
            <?php
            $featured = new WP_Query(['posts_per_page' => 1]);
            if ($featured->have_posts()) :
                while ($featured->have_posts()) : $featured->the_post();
                    echo '<h3><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3>';
                    the_excerpt();
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>

        <?php if (is_active_sidebar('custom-sidebar')) : ?>
    <aside class="custom-sidebar">
        <?php dynamic_sidebar('custom-sidebar'); ?>
    </aside>
<?php endif; ?>

    </section>
</main>

<?php get_footer(); ?>
