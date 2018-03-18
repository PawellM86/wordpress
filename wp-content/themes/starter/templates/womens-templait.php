<?php

/* Template Name: womens template */

get_header();?>

<section class="womens-category">
  <div class="womens-wear">
    <div class="wo-img">
      <img src="http://localhost/wordpress/wp-content/themes/starter/assets/images/inner1.jpg" alt="">
    </div>
    <div >
      <p>WOMEN'S WEAR</p>
    </div>
  </div>
  <div class="exclusive-womens">
      <img src="<?php the_field('womens_image',128);?>" alt="">
    <div class="womens-collection">
      <h2>EXCLUSIVE WOMEN'S COLLECTIONS</h2>
      <p><?php the_field('image_discription',128);?></p>
    </div>
  </div>

   <?php $woomen_args = array(
     'post_type' =>'woomen_arrival',
     'post_per_page' => -1,
   );
   $arrivals_w = new WP_Query( $woomen_args );
    ?>
  <ul class="woomens list">
    <?php while( $arrivals_w->have_posts()) : $arrivals_w->the_post();  ?>
    <li>
      <figure>
      <img src=" <?php the_post_thumbnail_url(); ?> " alt=" ">
      <figcaption> <?php the_field('image_discription',124); ?> </figcaption>
     <p> <?php the_field('price',124); ?> </p>
      <input type="submit" value="ADD TO CART"></input>
    </figure>
  </li>
  <?php endwhile; ?>
  </ul>
</section>
<?php get_footer(); ?>
