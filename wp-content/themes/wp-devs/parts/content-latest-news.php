 <article class="latest-news">
     <a href=<?php the_permalink() ?>"><?php the_post_thumbnail('large'); ?></a>
     <h3><a href=<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
     <div class="meta-info">
         <p>
             by <span><?php the_author_posts_link(); ?></span>
             Categories: <span><?php the_category(''); ?></span>
             Tags: <span><?php the_tags('', ', '); ?></span>
         <p><span><?php echo get_the_date(); ?></span></p>
         </p>
         <?php the_excerpt(); ?>
     </div>
 </article>