<?php get_header(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="main_title">
      <div class="main_title_h1">
        <h1><?php the_title(); ?></h1>        <?php edit_post_link(); ?>
      </div>
    </div>
    <div class="kroshki">
      <div class="kroshki_in">
        <div class="navigation-tree-container">
          <?php easy_breadcrumbs(); ?>
        </div>
      </div>
    </div><!-- .kroshki -->

    <div class="main_text_statik">
      <div class="statik_kontent">

        <!-- SIDEBAR -->
        <?php get_sidebar(); ?>

        <div class="main_text_in_statik">
          <h1 class="ctitle"><?php _e( 'Page not found', 'wpeasy' ); ?></h1>
          <h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpeasy' ); ?></a></h2>
        </div><!-- .main_text_in_statik -->
      </div><!-- .main_text_statik -->
    </div><!-- .statik_kontent -->
  </article>
<?php get_footer(); ?>
