<?php get_header(); ?>
<!-- Content -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="hero" style="background: url('https://my-site.local/wp-content/uploads/2025/12/pexels-lumn-167699-scaled.jpeg');">
                <div class="overlay" style="min-height: 800px;">
                    <div class="container">
                        <div class="hero-items">
                            <h1>Lorem ipsum dolor</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada dolor vitae nulla rhoncus, et aliquet nisl consequat. Quisque ipsum ligula, vestibulum a faucibus eu, lacinia sit amet tellus</p>
                            <a href="#">Learn more </a>
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