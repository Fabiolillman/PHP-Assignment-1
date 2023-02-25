<?php get_header();?>
<div class="contact-container">
  
<?php  if(have_posts()): while (have_posts()) :the_post();?>
<div class="side-menu-bar">
 <h1><?php the_title(); ?></h1>
 <?php if(has_post_thumbnail()): ?>
    <img class="blogg-img" src="<?php the_post_thumbnail_url('M') ?>" alt="">
    <?php endif;?>
 <p><?php the_content(); ?></p>
 </div>
   <?php endwhile; endif; ?>

</div>
   <?php get_footer();?>

