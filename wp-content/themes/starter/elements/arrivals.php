
<!-- new arrivals section -->
<?php $arrivals_args = array(
  'post_type' =>'arrivals',
  'post_per_page' => -1,
);
$arrivals = new WP_Query( $arrivals_args );
 ?>

<section class="arrivals-container">
  <div class="head">
    <h3>NEW ARRIVALS</h3>
  </div>
  <div class="arrival-menu">
    <ul>
      <li class="link1" data-filter="men"> <a href="#"> <?php the_field('mens_field',124) ?> </a> </li>
      <li class="link2" data-filter="woomens"> <a href="#"> <?php the_field('woomens_field',124) ?> </a> </li>
      <li class="link3" data-filter="bags"> <a href="#"> <?php the_field('bags_field',124) ?> </a> </li>
      <li class="link4" data-filter="footwear"> <a href="#"> <?php the_field('footwear_field',124) ?> </a> </li>
    </ul>
  </div>


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

<!-- woomens arrivals -->
 <?php $woomen_args = array(
   'post_type' =>'woomen_arrival',
   'post_per_page' => -1,
 );
 $arrivals_w = new WP_Query( $woomen_args );
  ?>
<ul class="woomens list hide">
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

<!-- bags arrivals -->
<?php $bags_args = array(
  'post_type' =>'bags_arrivals',
  'post_per_page' => -1,
);
$bags = new WP_Query( $bags_args );
?>
<ul class="bags list hide">
  <?php while( $bags->have_posts()) : $bags->the_post();  ?>
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

<!-- footwear arrivals -->
<?php $footwear_args = array(
  'post_type' =>'footwear_arrivals',
  'post_per_page' => -1,
);
$footwear = new WP_Query( $footwear_args );
?>
<ul class="footwear list hide">
  <?php while( $footwear->have_posts()) : $footwear->the_post();  ?>
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
