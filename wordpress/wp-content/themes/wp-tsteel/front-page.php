<?php /* Template Name: Front Page */ get_header(); ?>

  <?php if( have_rows('main_slider', 4 ) ): ?>
    <div class="slider_place">
      <div id="slider">
          <?php while ( have_rows('main_slider', 4 ) ) : the_row(); ?>
              <a href="<?php the_sub_field('link'); ?>" target="_blank"></a>
              <div class="slide">
                <div class="slider_wrap">
                  <div class="slider_left">
                    <?php $image = get_sub_field('image');
                    if( !empty($image) ): ?>
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                    <?php endif; ?>
                  </div>
                  <div class="slider_right">
                    <div class="slider_div">
                    <?php the_sub_field('text'); ?>
                    </div>
                    <div class="buttom_sl">
                      <a href="<?php the_sub_field('link'); ?>">РАССЧИТАТЬ СТОИМОСТЬ</a>
                    </div>
                    <div class="clear" style="height: 15px;"></div>
                    <div class="slider_div">
                      <p style="font-size: 17px;margin: 0px; text-transform: uppercase;">наш телефон</p>
                      <p style="margin-top: 0px; font-size: 24px;"><?php the_sub_field('telefon'); ?></p>
                    </div>
                  </div>
                </div>
              </div>
          <?php  endwhile; ?>
      </div>
    </div><!-- .slider_place -->
    <?php else : ?>
  <?php endif; ?>


  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <div class="front-content menu_left">
        <div class="cnt">
          <div id="menu">
            <?php wpeMainHeadNav(); ?>
            <?php //wpeHeadNav(); ?>
          </div>
        </div>
      </div><!-- .menu_left -->


  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="main_title">
      <div class="main_title_h1">
        <h1><?php the_title(); ?></h1>        <?php edit_post_link(); ?>
      </div>
    </div>

    <div class="main_text">
      <div class="main_text_in">

        <?php the_content(); ?>

      </div><!-- .main_text -->
    </div>

  </article>

  <?php endwhile; else: // If 404 page error ?>
    <article>
      <div class="main_text_in">
          <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
      </div><!-- .main_text -->
    </article>
  <?php endif; ?>


  <div class="main_news">
    <div class="main_news_in">


      <div class="main_portfolio_in_title">
        НОВОСТИ
      </div>

      <?php $args = array(
        'posts_per_page' => 5,
        'orderby' => 'comment_count',
        'cat'=> 2
      );
      $query = new WP_Query( $args );
      while ( $query->have_posts() ) {
        $query->the_post(); ?>

        <div class="main_news_item">
          <a href="<?php the_permalink(); ?>">
            <p class="news_block"><?php the_title(); ?></p>
          </a>
        </div>

      <?php }
      wp_reset_postdata(); ?>

    </div>
  </div><!-- .main_news -->

  <div class="main_portfolio">
    <div class="main_portfolio_in">
      <div class="main_portfolio_in_title">
        НАШИ РАБОТЫ
      </div>

      <?php $args = array(
        'posts_per_page' => 10,
        'orderby' => 'comment_count',
        'cat'=> 3
      );
      $query = new WP_Query( $args );
      while ( $query->have_posts() ) {
        $query->the_post(); ?>

        <div class="mosaic-block">
          <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="mosaic-overlay" target="_blank" style="display: inline;">
            <div class="mosaic-backdrop" style="display: block;">
                <?php if ( has_post_thumbnail()) :
                  the_post_thumbnail('medium');
                else: ?>
                  <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" width="216" height="176"/>
                <?php endif; ?>
            </div>
          </a>
        </div>

      <?php }
      wp_reset_postdata(); ?>

    </div>
  </div><!-- .main_portfolio -->

<?php get_footer(); ?>
