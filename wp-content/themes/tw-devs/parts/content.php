<article>
    <h2><a href=<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

    <?php if (has_post_thumbnail()): ?>
        <a href=<?php the_permalink() ?>"><?php the_post_thumbnail(array(275, 275)); ?></a>
    <?php endif; ?>
    <div class="meta-info">

        <p><span class="meta-title"><?php esc_html_e('Posted on', 'wp-devs') ?></span> <?php echo get_the_date(); ?> <?php _e('by', 'wp-devs') ?> <?php the_author_posts_link(); ?></p>
        <?php if (has_category()): ?>
            <p><span class="meta-title"><?php esc_html_e('Categories', 'wp-devs') ?>:</span> <?php the_category(''); ?></p>
        <?php endif; ?>
        <?php if (has_tag()): ?>
            <p><span class="meta-title"><?php esc_html_e('Posted in', 'wp-devs') ?>:</span> <?php the_tags('', ', '); ?></p>
        <?php endif; ?>
        <?php the_excerpt(); ?>
    </div>
</article>