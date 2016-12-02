<?php get_header(); ?>

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
          <h1 class="search-title inner-title"><?php echo sprintf( __( '%s Search Results for ', 'wpeasy' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
          <?php get_template_part('loop'); ?>
          <?php get_template_part('pagination'); ?>

        </div><!-- .main_text_in_statik -->
      </div><!-- .main_text_statik -->
    </div><!-- .statik_kontent -->

<?php get_footer(); ?>
