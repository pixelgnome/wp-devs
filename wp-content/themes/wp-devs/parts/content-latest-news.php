 <article class="latest-news">
     <a href=<?php the_permalink() ?>"><?php the_post_thumbnail('large'); ?></a>
     <h3><a href=<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
     <div class="meta-info">
         <p>
             <?php esc_html_e('by', 'wp-devs') ?> <span><?php the_author_posts_link(); ?></span>
             <?php if (has_category()): ?>
         <div class="meta-categories"><span class="meta-title"><?php esc_html_e('Categories', 'wp-devs') ?>:</span> <?php the_category(''); ?></div>
     <?php endif; ?>
     <?php if (has_tag()): ?>
         <span class="meta-title"><?php esc_html_e('Tags', 'wp-devs') ?>:</span> <span><?php the_tags('', ', '); ?></span>
     <?php endif; ?>
     <p><span><?php echo esc_html(get_the_date()); ?></span></p>
     </p>
     <?php the_excerpt(); ?>
     </div>
 </article>