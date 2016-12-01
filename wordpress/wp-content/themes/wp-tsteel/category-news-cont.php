          <div class="main_text_statik">
            <div class="statik_kontent">

              <!-- SIDEBAR -->
                <?php get_sidebar(); ?>

              <div class="main_text_in_statik">

                <?php if (have_posts()): while (have_posts()) : the_post(); ?>


                    <div class="news_item">
                      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <div class="news_title"><?php the_title(); ?></div>
                      </a>
                      <div class="news_pre"><?php wpeExcerpt('wpeExcerpt40'); ?></div>
                    </div><!-- .news_item -->


                  <?php endwhile; else: ?>
                  <div>

                    <h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

                  </div><!-- /article -->
                <?php endif; ?>

                <?php get_template_part('pagination'); ?>

              </div><!-- .main_text_in_statik -->
            </div><!-- .main_text_statik -->
          </div><!-- .statik_kontent -->
