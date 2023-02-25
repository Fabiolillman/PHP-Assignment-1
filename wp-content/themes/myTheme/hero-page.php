<!-- 
Template Name: Front Page
 -->



 <?php get_header();?>

<div class=" hero-container">
  
<?php  if(have_posts()): while (have_posts()) :the_post();?>
<div class="side-menu-bar hero-side-menu">

 <?php if(has_post_thumbnail()): ?>
    <img class="hero-img" src="<?php the_post_thumbnail_url('XXL') ?>" alt="">
    <?php endif;?>
   <h1><?php the_title(); ?></h1>
 <p><?php the_content(); ?></p>
 </div>
   <?php endwhile; endif; ?>

</div>
   <?php get_footer();?>




