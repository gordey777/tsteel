<div class="menu_left">
  <div class="cnt">
    <?php
      $ancestors = get_post_ancestors();
      if ( is_subpage() == true ) {
          $acf_id = $ancestors[0];
      }
      else {
          $acf_id = $post -> ID;
      }
//echo $acf_id;
    ?>

    <?php if( have_rows('product_sidebar', $acf_id ) ): ?>
        <?php while ( have_rows('product_sidebar', $acf_id ) ) : the_row(); ?>
          <?php $image = get_sub_field('image');
            if( !empty($image) ): ?>
              <img src="<?php echo $image['url']; ?>" class="tl" />
          <?php endif; ?>
          <span style=" font-size: 28px; "><?php the_sub_field('telefon'); ?></span>
          <br>
        <?php  endwhile; ?>
    <?php endif; ?>

    <?php if( have_rows('sidebar_button', $acf_id ) ): ?>
        <?php while ( have_rows('sidebar_button', $acf_id ) ) : the_row(); ?>
          <div class="buy_button">
            <a href="<?php the_sub_field('link'); ?>">
              <button class="thoughtbot"><?php the_sub_field('title'); ?></button>
            </a>
          </div>
        <?php  endwhile; ?>
    <?php endif; ?>

  </div>
  <div id="menu">
    <?php wpeMainHeadNav(); ?>
  </div>
</div><!-- .menu_left -->
