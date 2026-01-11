<?php get_header(); ?>
<div id="primary">
    <div id="main">
        <div class="containor w-full ml-auto mr-auto max-w-[1140px]">
            <h1><?php esc_html_e('Search results for', 'wp-devs') ?>: <?php echo get_search_query(); ?></h1>
            <?php

            get_search_form();

            while (have_posts()):
                the_post();

                get_template_part('parts/content', 'search');

            endwhile;

            the_posts_pagination();
            ?>



        </div>
    </div>
</div>
<?php get_footer(); ?>