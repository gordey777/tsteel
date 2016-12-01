<aside class="sidebar" role="complementary">

  <?php if ( is_active_sidebar('widgetarea1') ) : ?>
    <?php dynamic_sidebar( 'widgetarea1' ); ?>
  <?php else : ?>

    <!-- If you want display static widget content - write code here
		RU: Здесь код вывода того, что необходимо для статического контента виджетов -->
        <div class="menu_left">
          <ul id="menu">
            <ul>
              <li><a href="#"><span>Портфолио</span></a></li>
              <li><a href="#"><span>О Компании</span></a>
              </li>
              <li><a href="#"><span>Новости</span></a></li>
              <li><a href="#"><span>Вакансии</span></a></li>
              <li class="last"><a href="#"><span>Контакты</span></a></li>
            </ul>
          </ul>
        </div><!-- .menu_left -->
  <?php endif; ?>
</aside><!-- /sidebar -->
