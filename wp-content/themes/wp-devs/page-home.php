<?php get_header(); ?>
<!-- Content -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <?php
            // Pull info for hero
            $hero_title = get_theme_mod('set_hero_title', 'Title');
            $hero_subtitle = get_theme_mod('set_hero_subtitle', 'This is a sentence.');
            $hero_button_text = get_theme_mod('set_hero_button_text', 'Click here &raquo;');
            $hero_button_link = get_theme_mod('set_hero_button_link', '#');
            $hero_height = get_theme_mod('set_hero_height', 850);
            $hero_background = wp_get_attachment_url(get_theme_mod('set_hero_background_image'));
            ?>
            <section class="hero" style="background: url('<?php echo $hero_background ?>');">
                <div class="overlay" style="min-height: <?php echo $hero_height ?>px;">
                    <div class="container">
                        <div class="hero-items">
                            <h1><?php echo $hero_title ?></h1>
                            <p><?php echo nl2br($hero_subtitle) ?></p>
                            <a href="<?php echo $hero_button_link ?>"><?php echo $hero_button_text ?></a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="services">
                <h2>Services</h2>
                <div class="container">
                    <div class="services-item">
                        <?php
                        if (is_active_sidebar('services-1')) {
                            dynamic_sidebar('services-1');
                        };
                        ?>
                    </div>
                    <div class="services-item">
                        <?php
                        if (is_active_sidebar('services-2')) {
                            dynamic_sidebar('services-2');
                        };
                        ?>
                    </div>
                    <div class="services-item">
                        <?php
                        if (is_active_sidebar('services-3')) {
                            dynamic_sidebar('services-3');
                        };
                        ?>
                    </div>
                </div>
            </section>
            <section class="home-blog">
                <h2>Latest News</h2>
                <div class="container">
                    <?php

                    // Create array of arguments
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 5,
                        'category__in' => array(4, 6, 8),
                        'category__not_in' => array(1),
                    );
                    //Instantiate new WP_Query then feed it args
                    $postlist = new WP_Query($args);

                    if ($postlist->have_posts()):
                        while ($postlist->have_posts()): $postlist->the_post();
                            get_template_part('parts/content', 'latest-news');
                        endwhile;
                        //Call this function -> it ensures that this query will not affect any other loops or if you reuse on same page
                        wp_reset_postdata();
                    else: ?>
                        <p>Nothing yet to be displayed!</p>
                    <?php endif; ?>

                </div>
            </section>
        </main>
    </div>
</div>
<?php get_footer(); ?>