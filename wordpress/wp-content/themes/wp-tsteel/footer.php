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
            <p><a href="#">Портфолио</a></p>
            <p><a href="#">О компании</a></p>
            <p><a href="#">Вакансии</a></p>
            <p><a href="#">Контакты</a></p>
          </div>
        </div>
        <div class="footer_block">
          <div class="footer_block_in">
            <p><a href="#">БМЗ</a></p>
            <p><a href="#">ЛСТК</a></p>
            <p><a href="#">Сварные балки</a></p>
            <p><a href="#">Металлоконстукции</a></p>
            <p><a href="#">Кровля</a></p>
            <p><a href="#">Фасады</a></p>
            <p><a href="#">Профнастил</a></p>
          </div>
        </div>
        <div class="footer_block_last">
          <div class="footer_block_in_last">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon_metka.png">Украина, г. Полтава
            <p> ул.Зеньковская, 52, 36009</p>
            <p>
              <img src="<?php echo get_template_directory_uri(); ?>/img/icon_mobile.png">+380 (0532) 506-559
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

  </div><!-- .layout-wrapper -->


  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.7.2.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
<!--   <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script> -->
      <?php wp_footer(); ?>
</body>

</html>
