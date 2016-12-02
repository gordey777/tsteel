  <div class="main_text">
    <div class="main_text_in">

      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <div class="mosaic-block">
          <div class="mosaic-backdrop" style="display: block;">
              <a rel="nofollow" class="mosaic-overlay" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php if ( has_post_thumbnail()) :
                  the_post_thumbnail('medium');
                else: ?>
                  <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" width="216" height="176"/>
                <?php endif; ?>
                </div>
              </a><!-- /post thumbnail -->
          </div><!-- .mosaic-block -->

        <?php endwhile; else: ?>
        <div>

          <h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

        </div><!-- /article -->
      <?php endif; ?>

      <?php get_template_part('pagination'); ?>

    </div>
  </div><!-- .main_text -->
