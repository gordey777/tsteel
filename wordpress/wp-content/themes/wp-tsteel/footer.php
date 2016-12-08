    <!-- FOOTER -->
    <div class="botom">
      <div class="footer">
        <div class="footer_block">
          <div class="footer_block_in">
            <a href="/">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo_white.png">
              <br>
              <br>
              <p>© 2006 - 2016</p>
              <p>Kомпания "ТЕРМАСТИЛ"</p>
            </a>
          </div>
        </div>
        <div class="footer_block">
          <div class="footer_block_in">

            <?php wpeHeadNav(); ?>

          </div>
        </div>
        <div class="footer_block">
          <div class="footer_block_in">
            <?php wpeMainHeadNav(); ?>

          </div>
        </div>
        <div class="footer_block_last">
          <div class="footer_block_in_last">
            <p>
              <img src="<?php echo get_template_directory_uri(); ?>/img/icon_metka.png"><?php the_field('footer_adress', 4); ?></p>
            <p>
              <img src="<?php echo get_template_directory_uri(); ?>/img/icon_mobile.png"><?php the_field('footer_tel', 4); ?>
            </p>
            <p>
              Мы в социальных сетях:
              <br>
            </p>
            <p>

            <?php if( have_rows('head_social_link', 4 ) ): ?>
                <?php while ( have_rows('head_social_link', 4 ) ) : the_row(); ?>
                      <a href="<?php the_sub_field('link'); ?>">
                        <?php $image = get_sub_field('image');
                        if( !empty($image) ): ?>
                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="40px"/>
                        <?php endif; ?>
                      </a>
                  <?php  endwhile; ?>
              <?php else : ?>
            <?php endif; ?>
            </p>
            <p></p>
          </div>
        </div>
      </div>
    </div><!-- .botom -->

<!--             <nav id="menu__mob" role="navigation">
  <ul>
    <?php //wpeMainHeadNav(); ?>
    <?php //wpeHeadNav(); ?>
  </ul>
</nav> -->

  </div><!-- .layout-wrapper -->


  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.7.2.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mmenu.all.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
      <?php wp_footer(); ?>
</body>

</html>
