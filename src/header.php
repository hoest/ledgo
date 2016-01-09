<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>
      <?php
        global $page, $paged;
        wp_title('|', true, 'right');
        // Add the blog name.
        bloginfo('name');
        // Add the blog description for the home/front page.
        $site_description = get_bloginfo('description', 'display');
        if ($site_description && (is_home() || is_front_page())) {
          echo " - Welkom";
        }
      ?>
    </title>

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Open+Sans" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />

    <meta name="author" content="<?php bloginfo('name'); ?>" />
    <meta name="keywords" content="De Jong Accountants Belastingadviseurs,
      De Jong, Accountants, Belastingadviseurs, Soest, Nederland, Accountancy,
      Ronald, Marcel, Belasting, Fincieel advies" />

    <meta property="og:locale" content="nl_NL" />
    <meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/images/dejong-logo.jpg" />
    <meta property="og:url" content="<?php the_permalink(); ?>"/>
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />

    <?php if(is_home() || is_front_page()) { ?>
    <meta property="og:title" content="Welkom bij <?php bloginfo('name'); ?>"/>
    <?php } else { ?>
    <meta property="og:title" content="<?php echo trim(wp_title('', false)); ?>"/>
    <?php } ?>

    <!-- if page is content page -->
    <?php if (is_single()) { ?>
    <meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
    <meta name="description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
    <meta property="og:type" content="article" />

    <!-- if page is others -->
    <?php } else { ?>
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:type" content="website" />
    <?php } ?>

    <?php wp_head(); ?>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-188573-9', 'auto');
      ga('send', 'pageview');
    </script>
  </head>
  <body>
    <div class="banner"></div>
    <div class="contact-wrapper">
      <div class="contact">
        <div class="belons">Bel ons: <a href="tel:+31356016033">(035) 601 60 33</a></div>
        <div class="social">
          <a class="social-icon" href="http://www.facebook.com/pages/De-Jong-Accountants-en-Belastingadviseurs/177096265656584" target="_blank">
            <i class="fa fa-facebook"></i>
          </a>
          <a class="social-icon" href="http://www.linkedin.com/company/de-jong-accountants-en-belastingadviseurs" target="_blank">
            <i class="fa fa-linkedin"></i>
          </a>
        </div>
        <div class="menu-icon">
          <a class="menu-link" href="javascript:void(0)">
            <i class="fa fa-bars"></i>
          </a>
        </div>
        <div class="mailons">
          <a class="social-icon" href="http://www.facebook.com/pages/De-Jong-Accountants-en-Belastingadviseurs/177096265656584" target="_blank">
            <i class="fa fa-facebook"></i>
          </a>
          <a class="social-icon" href="http://www.linkedin.com/company/de-jong-accountants-en-belastingadviseurs" target="_blank">
            <i class="fa fa-linkedin"></i>
          </a>
          <a class="advies" href="mailto:info@dejongaccountants.nl">Vraag ons om advies</a>
        </div>
      </div>
    </div>
    <header>
      <h1>
        <a href="/">
          <span><?php bloginfo('name'); ?></span>
          <img class="dejong-logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/dejong-logo.svg" />
        </a>
      </h1>
    </header>
