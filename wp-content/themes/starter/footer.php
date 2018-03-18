<footer>
  <!-- footer section start -->
  <?php $$flickr_args = array(
    'post_type' =>'flickr_posts',
    'post_per_page' => -1,
  );
  $flickr = new WP_Query( $$flickr_args );
   ?>
  <section class="black-footer">
    <ul>
      <li>
        <h3> Elite shop </h3>
        <p> <?php the_field('about_shop', 124) ?> </p>
        <div class="social2">
          <ul>
            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin-in"></i></i></a></li>
          </ul>
        </div>
      </li>
      <li>
        <div class="footer-information">
          <h4>OUR INFORMATION</h4>
          <ul>
            <li> <a href="#"><?php the_field('home', 124) ?></a> </li>
            <li> <a href="#"><?php the_field('menswear', 124) ?></a> </li>
            <li> <a href="#"><?php the_field('woomens_wear', 124) ?></a> </li>
            <li> <a href="#"><?php the_field('about', 124) ?></a> </li>
            <li> <a href="#"><?php the_field('contact', 124) ?></a> </li>
          </ul>
        </div>
      </li>
      <li class="store-info">
        <h4>STORE INFORMATION</h4>
        <div class="info">
          <div class="info-icon">
            <i class="fas fa-phone"></i>
          </div>
          <div >
            <h6> Phone number:</h6>
            <p><?php the_field('phone_number', 124) ?></p>
          </div>
        </div>
        <div class="info">
          <div class="info-icon">
            <i class="fas fa-envelope"></i>
          </div>
          <div>
            <h6>Email address:</h6>
            <p><?php the_field('email_adress', 124) ?></p>
          </div>
        </div>
          <div class="info">
            <div class="info-icon">
              <i class="fas fa-map-marker"></i>
            </div>
            <div>
              <h6>Location:</h6>
              <p><?php the_field('location', 124) ?></p>
            </div>
          </div>
      </li>
      <li>
        <div class="flickr-posts">
            <div >
              <h4>FLICKR POSTS</h4>
            </div>
              <ul>
                <?php while( $flickr->have_posts()) : $flickr->the_post();  ?>
            <li><img src="<?php the_post_thumbnail_url(); ?>" alt=""></li>
          <?php endwhile; ?>
          </ul>
        </div>
      </li>
    </ul>
  </section>

</footer>
  <?php wp_footer(); ?>
</html>
