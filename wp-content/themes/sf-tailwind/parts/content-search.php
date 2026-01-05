       <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
           <header>

               <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
               <?php if ('post' == get_post_type()): ?>
                   <div class="meta-info">

                       <p><span class="meta-title"><?php esc_html_e('Posted on', 'wp-devs') ?></span> <?php echo get_the_date(); ?> <?php _e('by', 'wp-devs') ?> <?php the_author_posts_link(); ?></p>
                       <?php if (has_category()): ?>
                           <p><span class="meta-title"><?php esc_html_e('Categories', 'wp-devs') ?>:</span> <?php the_category(''); ?></p>
                       <?php endif; ?>
                       <?php if (has_tag()): ?>
                           <p><span class="meta-title"><?php esc_html_e('Posted in', 'wp-devs') ?>:</span> <?php the_tags('', ', '); ?></p>
                       <?php endif; ?>
                   </div>
               <?php endif; ?>
               <div class="content">
                   <?php the_excerpt(); ?>
               </div>

           </header>

       </article>