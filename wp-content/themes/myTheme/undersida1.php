<!-- 
Template Name: Undersida 1
 -->

<?php get_header();?>

<div class="contact-container row-contain">
  
<div class="undersida-sidebar">
<?php wp_nav_menu(
        array(
            'container' => 'nav',
            'theme_location' => 'undersidameny',
            // 'menu_class' => 'nav-items',
        )
    )
    ?>    
</div>
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