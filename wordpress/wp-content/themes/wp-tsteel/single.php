<?php get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
<!-- CONTENT -->
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


    <div class="main_title">
      <div class="main_title_h1">
        <h1><?php the_title(); ?></h1>        <?php edit_post_link(); ?>
      </div>
    </div>
    <div class="kroshki">
      <div class="kroshki_in">

        <div class="navigation-tree-container">
          <a>
          </a>
          <ul class="B_crumbBox">
            <a></a>
            <li class="B_firstCrumb" itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
              <a></a><a class="B_homeCrumb" itemprop="url" rel="Home" href="#"><span itemprop="title">Главная</span></a></li>
            /
            <li itemscope="itemscope" class="B_crumb" itemtype="http://data-vocabulary.org/Breadcrumb"><a class="B_crumb" itemprop="url" rel="Компания Термастил, информация про компанию, история компании" href="#"><span itemprop="title">О компании</span></a></li>
            /
            <li class="B_lastCrumb" itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"></li>
            <li itemscope="itemscope" class="B_currentCrumb" itemtype="http://data-vocabulary.org/Breadcrumb">Новости</li>
          </ul>
        </div>
      </div>
    </div><!-- .kroshki -->



        <?php if ( in_category( 3 ) ) { ?>
          <div class="main_text">
            <div class="main_text_in">

                <?php if ( has_post_thumbnail()) :?>
                  <a class="single-thumb" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php the_post_thumbnail(); // Fullsize image for the single post ?>
                  </a>
                <?php endif; ?><!-- /post thumbnail -->
                <?php the_content(); ?>

            </div>
          </div><!-- .main_text -->


        <?php }
        else { ?>

          <div class="main_text_statik">
            <div class="statik_kontent">

              <!-- SIDEBAR -->
                <?php get_sidebar(); ?>

              <div class="main_text_in_statik">
                <?php if ( has_post_thumbnail()) :?>
                  <a class="single-thumb" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php the_post_thumbnail(); // Fullsize image for the single post ?>
                  </a>
                <?php endif; ?><!-- /post thumbnail -->
                <?php the_content(); ?>

              </div><!-- .main_text_in_statik -->
            </div><!-- .main_text_statik -->
          </div><!-- .statik_kontent -->

        <?php } ?>



    </article>





  <?php endwhile; else: ?>
    <article>

      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

    </article>
  <?php endif; ?>

<?php if ( in_category( 3 ) ) {

}
else {
  get_sidebar();
} ?>

<?php get_footer(); ?>
