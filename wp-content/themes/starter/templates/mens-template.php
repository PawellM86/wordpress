<?php

/* Template Name: Mens template */

get_header();?>

<section class="mens-template">
  <div class="exclusive">
    <div class="excl-img">
      <img src="http://localhost/wordpress/wp-content/themes/starter/assets/images/inner1.jpg" alt="">
    </div>
    <div>
      <p>MEN'S WEAR</p>
    </div>
  </div>
    <div class="collection">
        <img src="<?php the_field('mens_image',174); ?>" alt="">
      <div class="about-text">
        <h2>EXCLUSIVE MEN'S COLLECTIONS</h2>
        <p><?php the_field('mens_discription',174); ?></p>
      </div>
    </div>


  <!-- new arrivals section -->
  <?php $arrivals_args = array(
    'post_type' =>'arrivals',
    'post_per_page' => -1,
  );
  $arrivals = new WP_Query( $arrivals_args );
   ?>
   <ul class="clothes men list">
     <?php while( $arrivals->have_posts()) : $arrivals->the_post();  ?>
     <li>
       <figure>
       <img src=" <?php the_post_thumbnail_url(); ?> " alt=" ">
       <figcaption> <?php the_field('image_discription',124); ?> </figcaption>
      <p class="price"> <?php the_field('price',124); ?> </p>
       <input class ='want-buy' type="submit" value="ADD TO CART"></input>
     </figure>
   </li>
   <?php endwhile; ?>
   </ul>
</section>

<?php get_footer(); ?>
