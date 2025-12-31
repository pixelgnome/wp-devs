<?php get_header(); ?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<!-- Content -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">


            <div class="container">
                <div class="error-404">
                    <header>
                        <h1><?php _e('Page not Found', 'wp-dev'); ?></h1>
                        <p><?php _e('Unfortunately this page does not exist.', 'wp-dev'); ?></p>
                    </header>
                    <div class="error">
                        <p><?php _e('How about trying a search?', 'wp-dev'); ?></p>
                        <?php get_search_form(); ?>
                        <?php the_widget(
                            'WP_Widget_Recent_Posts',
                            array(
                                'title' => __('Recent Posts', 'wp-devs'),
                                'number' => 3
                            )
                        ); ?>
                    </div>
                </div>
            </div>

        </main>
    </div>
</div>
<?php get_footer(); ?>