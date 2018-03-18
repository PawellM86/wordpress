
<?php $slider_args = array(
  'post_type' =>'slider2',
  'post_per_page' => -1,
);
$slider = new WP_Query( $slider_args );
 ?>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php for($i = 0; $i < $slider->post_count; $i++):  ?>
    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i ?>" class="<?php if($slider->current_post == 0){echo 'active';} ?>"></li>
  <?php endfor; ?>
  </ol>
  <div class="carousel-inner">
    <?php while( $slider->have_posts() ) : $slider->the_post(); ?>
    <div class="carousel-item <?php if($slider->current_post == 0){echo 'active';} ?>">
      <img class="d-block w-100" src= "<?php the_post_thumbnail_url(); ?> "  alt="<?php the_title(); ?>">
      <div class="slider-discription">
        <h2><?php the_field('slide_discription1', 124) ?></h2>
        <h3><?php the_field('slide_discription_2', 124) ?></h3>
        <button type="submit" name="button">Shop now</button>
      </div>
    </div>
    <?php endwhile; ?>
  </div>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <i class="fas fa-chevron-circle-left"></i>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <i class="fas fa-chevron-circle-right"></i>
  </a>
</div>
