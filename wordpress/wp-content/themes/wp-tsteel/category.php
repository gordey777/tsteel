<?php get_header(); ?>

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
          <?php easy_breadcrumbs(); ?>
        </div>
      </div>
    </div><!-- .kroshki -->


    <?php if ( in_category( 3 ) ) {

      include 'category-img-cont.php';

    }
    else {

      include 'category-news-cont.php';

    } ?>

    </article>


<?php get_footer(); ?>


