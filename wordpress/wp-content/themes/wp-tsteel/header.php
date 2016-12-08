<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
  <!-- Load Bootstrap css -->
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- load font awesome   -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/css/main-menu.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" media="all">
  <link href="<?php echo get_template_directory_uri(); ?>/css/main.css" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
<!-- wrapper -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!--  saved from url=(0026)http://www.thermasteel.ua/  -->
<html>

<body>
  <div class="layout-wrapper">
<!--     <a href="#menu__mob" id="hamburger" class="humb-toggle-switch humb-toggle-switch__htx">
  <span>toggle menu</span>
</a> -->

    <div class="header-wrapper">
      <div class="header-wrapper-top">
        <div class="header-wrapper-top-in">
          <div class="menu_top">
            <div class="top_menu_kont">
              <div id="fdw">
                <nav id="top-head-menu" class="top__nav">
                <?php wpeHeadNav(); ?>
                </nav>
              </div>

              <?php if( have_rows('head_social_link', 4 ) ): ?>
                  <?php while ( have_rows('head_social_link', 4 ) ) : the_row(); ?>
                        <a href="<?php the_sub_field('link'); ?>" target="_blank">
                          <?php $image = get_sub_field('image');
                          if( !empty($image) ): ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="25px"/>
                          <?php endif; ?>
                        </a>
                    <?php  endwhile; ?>
                <?php else : ?>
              <?php endif; ?>

            </div>
          </div>
        </div>
      </div>
      <div class="header">
        <div class="header-in">
          <div class="logo">
            <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" width="160" alt="Термастил-Украина"></a>
          </div>

          <div class="crt_top">
            <?php if( have_rows('head_logo_link', 4 ) ): ?>
                <?php while ( have_rows('head_logo_link', 4 ) ) : the_row(); ?>
                      <a href="<?php the_sub_field('link'); ?>">
                        <?php $image = get_sub_field('image');
                        if( !empty($image) ): ?>
                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="left-links"/>
                        <?php endif; ?>
                      </a>
                  <?php  endwhile; ?>
              <?php else : ?>
            <?php endif; ?>
          </div>



          <div class="main_menu">
            <div id="fdw">
              <nav id="head__main_menu">
                <?php wpeMainHeadNav(); ?>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div><!-- .header-wrapper -->
