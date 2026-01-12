<?php get_header(); ?>
<!-- Content -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <?php
            // Pull info for hero
            $hero_title = get_theme_mod('set_hero_title', __('Title', 'wp-dev'));
            $hero_subtitle = get_theme_mod('set_hero_subtitle', __('This is a sentence.', 'wp-dev'));
            $hero_button_text = get_theme_mod('set_hero_button_text', __('Click here &raquo;', 'wp-dev'));
            $hero_button_link = get_theme_mod('set_hero_button_link', '#');
            $hero_height = get_theme_mod('set_hero_height', 850);
            $hero_background = wp_get_attachment_url(get_theme_mod('set_hero_background_image'));
            ?>
            <section class="hero" style="background-image: url('<?php echo esc_url($hero_background) ?>');">
                <div class="overlay" style="min-height: <?php echo esc_attr($hero_height) ?>px;">
                    <div class="container">
                        <div class="hero-items">
                            <h1><?php echo esc_html($hero_title) ?></h1>
                            <p><?php echo nl2br(esc_html($hero_subtitle)) ?></p>
                            <a href="<?php echo esc_url($hero_button_link) ?>"><?php echo esc_html($hero_button_text) ?></a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="services">
                <h2>
                    <?php esc_html_e('Services', 'wp-devs') ?>
                </h2>
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
                <h2> <?php esc_html_e('Latest News', 'wp-devs') ?></h2>
                <div class="container grid">
                    <?php
                    $per_page = get_theme_mod('set_per_page', 3);
                    $category_include = get_theme_mod('set_category_include');
                    $category_exclude = get_theme_mod('set_category_exclude');

                    // Create array of arguments
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => esc_html($per_page),
                        'category__in' => explode(',', esc_html($category_include)),
                        'category__not_in' => explode(',', esc_html($category_exclude)),
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
                        <p><?php esc_html_e('Nothing yet to be displayed!', 'wp-devs') ?></p>
                    <?php endif; ?>

                </div>
            </section>
        </main>
    </div>
</div>
<?php get_footer(); ?>