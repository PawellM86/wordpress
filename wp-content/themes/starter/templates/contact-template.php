<?php

/* Template Name: Contact template */

get_header();?>


<section class="contact">
  <div class="contact-category">
    <div class="wo-img">
      <img src="http://localhost/wordpress/wp-content/themes/starter/assets/images/inner1.jpg" alt="">
    </div>
    <div>
      <p>CONTACT US</p>
    </div>
  </div>

  <div class="find-us">
    <ul>
      <li>
        <p class="h1">ADRESS</p>
        <p><?php the_field('adress',132); ?></p>
        <p><?php the_field('adress1',132); ?></p>
       </li>
      <li>
        <p class="h1">CALL US</p>
        <p><?php the_field('t_number',132); ?></p>
        <p><?php the_field('t_number1',132); ?></p>
       </li>
      <li>
        <p class="h1">EMAIL</p>
        <p><?php the_field('email',132); ?></p>
        <p><?php the_field('email1',132); ?></p>
       </li>
    </ul>
  </div>
  <section class="map">
  <iframe src="<?php the_field('loaction_map',132); ?>" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </section>
</section>

<!-- https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d120045.11470808984!2d-122.49927020712543!3d37.7537684833745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2slt!4v1521024645670 -->

  <section class="contact-section">
    <div class="heading-container">
      <p>CONTACT FORM</p>
    </div>
    <div class="form-container">
      <form>
        <div>
          <input type="text" name="name" placeholder="Name">
        </div>
        <div>
          <input type="email" name="email" placeholder="Email">
        </div>
        <div>
          <input type="text" name="subject"placeholder="Subject">
        </div>
        <div>
          <input type="text" name="comment"placeholder="Comment">
        </div>
        <button type="submit">
          SEND MESSEGE
        </button>
      </form>
      </div>
  </section>

<?php get_footer(); ?>
