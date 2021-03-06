<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Canonical webteam" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon" />

    <title>Jolly Topers FC</title>

    <!-- stylesheets -->
    <link rel="stylesheet" type="text/css" media="screen" href="https://assets.ubuntu.com/v1/vanilla-framework-version-0.0.55.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/style.css" />
</head>

<body>
  <div class="background">
    <div class="inner-wrapper">

      <div class="site-banner row no-border">
        <div class="sponsors four-col">
          <p class="sponsors__tag">Proud to be Sponsored by</p>
          <a href="http://stark-group.co.uk/">
            <img class="sponsors__image" src="<?php bloginfo('template_directory'); ?>/img/stark-logo.png" alt="" />
          </a>
        </div>
        <div class="badge four-col align-center">
          <img class="badge__image" src="<?php bloginfo('template_directory'); ?>/img/jolly-topers-badge.png" alt="" />
        </div>
        <div class="social-media four-col last-col">
          <a class="social-media__link" href="https://twitter.com/JollyTopersFC" class="right">
            <img class="social-media__image" src="<?php bloginfo('template_directory'); ?>/img/twitter.png" alt="" />
          </a>
          <a class="social-media__link" href="https://www.facebook.com/groups/405880769460410/" class="right">
            <img class="social-media__image" src="<?php bloginfo('template_directory'); ?>/img/facebook.png" alt="" />
          </a>
        </div>
      </div>
      <header class="banner global" role="banner">
          <nav role="navigation" class="nav-primary nav-right" id="nav">
              <ul>
                  <li><a href="<?php echo site_url(); ?>/">Home</a></li>
                  <li><a href="<?php echo site_url(); ?>/about">About</a></li>
                  <li><a href="<?php echo site_url(); ?>/players">Players</a></li>
                  <li><a href="<?php echo site_url(); ?>/fixtures">Fixtures</a></li>
                  <li><a href="<?php echo site_url(); ?>/news">News</a></li>
                  <!-- <li><a href="/jolly-topers/gallery">Gallery</a></li> -->
              </ul>
          </nav>
          <div class="nav-toggle">
              <a href="#nav" class="nav-toggle__link open"></a>
              <a href="#" class="nav-toggle__link close"></a>
          </div>
      </header>
    </div>
