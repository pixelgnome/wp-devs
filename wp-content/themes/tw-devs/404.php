<?php get_header(); ?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<!-- Content -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">


            <div class="containor w-full ml-auto mr-auto max-w-[1140px]">
                <div class="error-404">
                    <header>
                        <h1><?php esc_html_e('Page not Found', 'wp-dev'); ?></h1>
                        <p><?php esc_html_e('Unfortunately this page does not exist.', 'wp-dev'); ?></p>
                    </header>
                    <div class="error">
                        <p><?php esc_html_e('How about trying a search?', 'wp-dev'); ?></p>
                        <?php get_search_form(); ?>
                        <?php the_widget(
                            'WP_Widget_Recent_Posts',
                            array(
                                'title' => esc_html__('Recent Posts', 'wp-devs'),
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