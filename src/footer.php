      <footer class="payoff animate fadeIn four">
        <?php // dynamic_sidebar('footer-widget-area'); ?>
        <div class="copy">
          <div class="inner">&copy; <?php echo date("Y"); ?> - LedGo Interior Panels</div>
        </div>
        <nav>
          <?php wp_nav_menu(array('container' => '', 'theme_location' => 'footer')); ?>
        </nav>
      </footer>
    </div>

    <div class="is-mobile"></div>
    <div class="is-tablet"></div>
    <div class="is-desktop"></div>

    <script>
      window.templateUrl = "<?php bloginfo('stylesheet_directory'); ?>";
    </script>
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>

    <?php wp_footer(); ?>
  </body>
</html>
