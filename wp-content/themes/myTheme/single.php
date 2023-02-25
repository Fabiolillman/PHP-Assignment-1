<?php get_header(); ?>
<!-- <br>---<code>home.php</code>---<br> -->


<main class="home-container center">

<div class="home-article-container">
<?php  if(have_posts()): while (have_posts()) :the_post();?>

<!-- <?php ?> -->
<h1><?php the_title(); ?></h1>

<?php if(has_post_thumbnail()): ?>
    <img class="blogg-img" src="<?php the_post_thumbnail_url('M') ?>" alt="">
    <?php endif;?>


 <p><?php the_content(); ?></p>

 <!-- Category adjuted not to jump in a new row in caterogy-template.php file -->
 <p class="blog-info"> Publicerad  <?php the_date(); ?>: Skrivet av  <?php the_author(); ?>: Kategori <?php the_category()?></p>

 <?php endwhile; endif; ?>
   </div>

    <aside class="sidebar-search">
    <h1>Category</h1>
    <nav>
        <ul>
             <!-- Get Category -->
            <?php $categories = get_categories();
            foreach ($categories as $cat):
            ?>
            <li>
                <a  href="<?php echo home_url();?>/category/<?= $cat->slug ?>"><?=$cat->name;?></a>
            </li>
            <?php endforeach; ?>

  
        </ul>
    <h1>Author</h1>
        <ul>
                      <!-- Get Author who has published posts-->
                      <?php
        $authors = get_users(array('has_published_posts' => true));
        foreach ($authors as $author):
        ?>
        <li>
        <a href="<?php echo home_url(); ?>/author/<?php echo $author->user_nicename; ?>"><?=$author->display_name; ?></a>
        </li>
        <?php endforeach; ?>
        </ul>
        <h1>Date</h1>
        <ul>
            
  <?php
  $dates = wp_get_archives(array(
    'type' => 'yearly', // Show dates by year
    'format' => 'html', // Output as a list
    'show_post_count' => false, // Don't show post count
  ));
  foreach ($dates as $date):
  ?>
  <li>
    <?php echo $date; ?>
  </li>
  <?php endforeach; ?>
</ul>
    </nav>
</aside>
</main>
<?php get_footer(); ?> -->
