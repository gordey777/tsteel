<?php get_header(); ?>

<!-- CONTENT -->
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="main_title">
      <div class="main_title_h1">
        <h1>
        <?php if( is_category() )
          echo get_queried_object()->name; ?>
        </h1>

        <?php edit_post_link(); ?>
      </div>
    </div>
    <div class="kroshki">
      <div class="kroshki_in">
        <div class="navigation-tree-container">
          <?php easy_breadcrumbs(); ?>
        </div>
      </div>
    </div><!-- .kroshki -->


    <?php

    if ( in_category( array(8, 3, 12, 10, 9, 11 /*ID Рубрик "Портфолио"*/)) ) {

      include 'category-img-cont.php';

    }
    else {

      include 'category-news-cont.php';

    } ?>

    </article>


<?php get_footer(); ?>


