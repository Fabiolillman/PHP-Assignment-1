<!-- 
Template Name: Page Contact
 -->

<?php get_header();?>

<!-- <br>---<code>page-contact.php</code>---<br> -->

<main class="contact-container">
<?php  if(have_posts()): while (have_posts()) :the_post();?>
 <h1><?php the_title(); ?></h1>
 <?php the_content(); ?>

   <?php endwhile; endif; ?>

</main> 
   <?php get_footer();?>

