<aside>
  <nav>
    <h2>Navigatie</h2>
    <?php wp_nav_menu(array('container' => '', 'theme_location' => 'primary')); ?>
  </nav>

  <?php dynamic_sidebar('sidebar-widget-area'); ?>

  <div class="aa_btn">
    <a href="https://www.nba.nl/" target="_blank"><img
      src="<?php bloginfo('stylesheet_directory'); ?>/images/nba-logo.jpg"
      width="70" height="70"
      alt="Nederlandse Beroepsorganisatie van Accountants" /></a>
  </div>
</aside>
