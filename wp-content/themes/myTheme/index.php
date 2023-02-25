<?php get_header(); ?>

<br>---<code>index.php</code>---<br>

<h1><?php bloginfo('name');?></h1>
<h2><?php bloginfo('description');?></h2>
<p>Text</p>
<?php  if(have_posts()): while (have_posts()) :the_post();?>

 <h1><?php the_title(); ?></h1>
 <p><?php the_content(); ?></p>
 <p><?php the_date(); ?></p>

   <?php endwhile; endif; ?>

<?php get_footer(); ?>
