<?php get_header(); ?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<!-- Content -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">


            <div class="container">
                <div class="error-404">
                    <header>
                        <h1>Page not found</h1>
                        <p>This page does not exist.</p>
                    </header>
                    <div class="error">
                        <?php get_search_form(); ?>
                        <?php the_widget(
                            'WP_Widget_Recent_Posts',
                            array(
                                'title' => 'Recent Posts',
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