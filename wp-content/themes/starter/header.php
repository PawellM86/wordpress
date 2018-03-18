<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <title>DOCUMENT</title>
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ">
          <a class="nav-item nav-link" href="#" data-toggle ="modal"data-target="#exampleModal"> <i class="fas fa-unlock-alt"></i>  Sign in</a>
          <a class="nav-item nav-link "href="#" data-toggle ="modal"data-target="#registration" id = "myBtn"><i class="fas fa-registered"></i>Registr</a>
          <a class="nav-item nav-link" href="#"><i class="fas fa-phone-square"></i>  Call: +370000000</a>
          <a class="nav-item nav-link " href="#"><i class="far fa-envelope"></i>  info@email.lt</a>
        </div>
      </div>
    </nav>

    <!-- scroll button -->
    <button onclick="topFunction()" id="scrolling" title="Go to top">Top</button>

    <!-- login modal window -->
    <?php get_template_part('elements/signInModalWindow'); ?>

    <!-- registration modalwindow -->
    <?php get_template_part('elements/registration'); ?>

    <!-- header 2  -->
    <div class="header-container ">
      <div class="search-container">
        <input type="text" name="search" placeholder="Search here..."></input>
        <button type="submit"><i class="fa fa-search"></i></button>
      </div>
      <div class="logo">
        <h1><?php bloginfo('name'); ?></h1>
      </div>
      <div class="social">
        <ul>
          <h5>Share on:</h5>
          <li> <a target="_blank" href=" <?php the_field('facebook_link',124) ?> "><i class="fab fa-facebook-square"></i></a> </li>
          <li> <a target="_blank" href=" <?php the_field('twitter_link',124) ?> "><i class="fab fa-twitter-square"></i></a> </li>
          <li> <a target="_blank" href=" <?php the_field('instagram_link',124) ?> "><i class="fab fa-instagram"></i></a> </li>
          <li> <a target="_blank" href=" <?php the_field('linkd_in_link',124) ?> "><i class="fab fa-linkedin-in"></i></i></a> </li>
        </ul>
      </div>
    </div>

    <!-- /* header3 start*/ -->
    <div class="header-container3">
      <?php
      wp_nav_menu( array(
        'theme_location'=> 'pagrindinis-menu',
        'container'=>false
      ));
      ?>
      <div class="cart">
        <button type="submit" name="button"><a href="#"><i class="fas fa-shopping-cart"></i></a></button>
      </div>
      <button class="burger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </button>
    </div>
  </header>


<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
<!-- navigation section end-->
