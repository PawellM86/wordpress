<main>
  <!-- banner bottom section start-->

  <div class="banner-bottom">
    <div class="banner-image1">
      <img src=" <?php the_field('banner_image1',124); ?>" class="img-thumbnail"alt="">
      <p> <span style="color:red">F</span>ALL AHEAD </p>
    </div>
      <div class="banner-image2">
        <img src="<?php the_field('banner_image2',124); ?>" class="img-thumbnail"alt="">
        <p> <span style="color:red">F</span>ALL AHEAD </p>
      </div>
  </div>

  <!-- banner bottom section end -->

  <!-- banner bottom 2 section -->
  <div class="banner-bottom2">
    <div>
      <img src="http://localhost/wordpress/wp-content/themes/starter/assets/images/ab_pic.jpg"class="img-thumbnail" alt="">
    </div>
    <div class="box thumbnail">
      <div class="discount">
        <h3> <?php the_field('about_discounts_header',124); ?> </h3>
        <p><?php the_field('discounts_submenu',124); ?></p>
        <div class="events">
          <li> <i class="far fa-user"></i>
            <p>CUSTOMERS</p>
            <strong>150</strong>
          </li>
          <li> <i class="far fa-calendar-alt"></i>
            <p>EVENTS</p>
            <strong>150</strong>
          </li>
          <li> <i class="fas fa-trophy"></i>
            <p>AWARDS</p>
            <strong>150</strong>
          </li>
        </div>
      </div>
    </div>
  </div>
<!-- banner bottom 2 section end -->

<!-- thats trading -->
  <?php $trading_args = array(
    'post_type' => 'thats_trading',
    'post_per_page' => -1,
  );
  $thats_trading = new WP_Query($trading_args);
?>
  <div class="thats-tranding">
    <div >
      <h3><span style="font-weight:bold">THAT'S </span>TRANDING</h3>
    </div>
  <section class="trends">
      <?php while ( $thats_trading->have_posts() ) : $thats_trading->the_post(); ?>
      <img src=" <?php the_post_thumbnail_url(); ?> "class="img-trend" alt="<?php the_title(); ?>">
    <?php endwhile; ?>
  </div>
  </section>
</main>
