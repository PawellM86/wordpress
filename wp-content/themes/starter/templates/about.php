<?php get_header();?>

<!-- Template Name: About -->

<section class="about-section">
  <div class="about-us">
    <img src="http://localhost/wordpress/wp-content/themes/starter/assets/images/inner1.jpg" alt="">
    <div>
      <p>ABOUT US</p>
    </div>
  </div>
  <div class="about-us2">
    <img src="<?php the_field('about_image',130); ?>" alt="">
    <div class="about-text">
      <h2>ABOUT OUR ELITE SHOPPY</h2>
      <p> <?php the_field('about_text',130); ?> </p>
    </div>
  </div>
</section>

<?php $about_team_members = array(
  'post_type' =>'about_team_members',
  'post_per_page' => -1,
);
$about_team = new WP_Query( $about_team_members );
 ?>

<section class="our-team">
  <div class="our-team-text">
    <h2><?php the_field('our_team',130); ?></h2>
  </div>
  <ul>
    <?php while( $about_team->have_posts()) : $about_team->the_post();  ?>
    <li> <img src="<?php the_post_thumbnail_url(); ?>" alt=""> </li>
    <?php endwhile; ?>
      </ul>
</section>

<?php get_footer(); ?>
