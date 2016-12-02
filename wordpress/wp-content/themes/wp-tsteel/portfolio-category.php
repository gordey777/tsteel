<?php get_header(); ?>

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
      <div class="main_text">
        <div class="main_text_in">


    <?php
    $args = array(
      'sort_order'   => 'ASC',
      'sort_column'  => 'post_title',
      'hierarchical' => 1,
      'exclude'      => '',
      'include'      => '',
      'meta_key'     => '',
      'meta_value'   => '',
      'authors'      => '',
      'child_of'     => $post->ID,
      'parent'       => -1,
      'exclude_tree' => '',
      'number'       => '',
      'offset'       => 0,
      'post_type'    => 'page',
      'post_status'  => 'publish',
    );
    $pages = get_pages($args);
    foreach( $pages as $page ) {
      $content = $page->post_content;

      // пропустим страницу без контента
      if ( ! $content ) continue;

      $content = apply_filters( 'the_content', $content );

      ?>
      <h2><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h2>
      <?php the_post_thumbnail(); // Fullsize image for the single post ?>
      <?php
    }

    wp_reset_postdata(); ?>



        </div>
      </div><!-- .main_text -->

    </article>
  <?php endwhile; else: // If 404 page error ?>
    <article>

      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

    </article>
  <?php endif; ?>

<?php get_footer(); ?>
