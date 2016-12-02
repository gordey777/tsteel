<?php /* Template Name: Product Page */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
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
        <?php include 'product-sidebar.php'; ?>

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

    </article>
  <?php endwhile; else: // If 404 page error ?>
    <article>

      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

    </article>
  <?php endif; ?>

<?php get_footer(); ?>

