<footer>

  <!-- footer section start -->
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
      <li>
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
            <li><img src="http://localhost/wordpress/wp-content/themes/starter/assets/images/t1.jpg" alt=""></li>
            <li><img src="http://localhost/wordpress/wp-content/themes/starter/assets/images/t2.jpg" alt=""></li>
            <li><img src="http://localhost/wordpress/wp-content/themes/starter/assets/images/t3.jpg" alt=""></li>
            <li><img src="http://localhost/wordpress/wp-content/themes/starter/assets/images/t4.jpg" alt=""></li>
            <li><img src="http://localhost/wordpress/wp-content/themes/starter/assets/images/t1.jpg" alt=""></li>
            <li><img src="http://localhost/wordpress/wp-content/themes/starter/assets/images/t2.jpg" alt=""></li>
            <li><img src="http://localhost/wordpress/wp-content/themes/starter/assets/images/t3.jpg" alt=""></li>
            <li><img src="http://localhost/wordpress/wp-content/themes/starter/assets/images/t4.jpg" alt=""></li>
            <li><img src="http://localhost/wordpress/wp-content/themes/starter/assets/images/t1.jpg" alt=""></li>
          </ul>
        </div>
      </li>
    </ul>

  </section>

</footer>
<?php wp_footer(); ?>
</body>
</html>
