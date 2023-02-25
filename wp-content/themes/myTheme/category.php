<?php get_header();?>


<main class="home-container">

<div class="main-content-container">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <?php if (has_post_thumbnail()) : ?>

    <article class="home-article-container">
      <h2><?php the_title(); ?></h2>
      <img src="<?php the_post_thumbnail_url('XS'); ?>" alt="">
      <div>
        <div class="blog-text">

          <p><?php the_excerpt(); ?></p>
        </div>
        <a href="<?php the_permalink(); ?>">Läs mer</a>
      </div>
    </article>
  <?php else : ?>
    <article class="home-article-container">
      <div>
        <h2><?php the_title(); ?></h2>
        <p><?php the_excerpt(); ?></p>
      </div>
      <a href="<?php the_permalink(); ?>">Läs mer här</a>
    </article>
  <?php endif; ?>
<?php endwhile; ?>

<div class="pagination-container">
  <?php
  echo paginate_links(array(
    'next_text' => 'Nästa',
    'prev-text' => 'Förgående sida'
  ));
  ?>
</div>

<?php endif; ?>
    </div>
    <aside class="sidebar-search">

    <!-- Search -->
    <form class="list-search" action="<?php echo home_url();?>">
<input class="searchbar" type="text" name="s" placeholder="Sök på sidan..." required>
<input class="submit-btn" type="submit" value="Sök">
</form>

<div class="nav-menu">
<?php wp_nav_menu(
        array(
            'container' => 'nav',
            'theme_location' => 'huvudmeny',
            'menu_class' => 'nav-items',
        )
    )
    ?>    
</div>
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
    'type' => 'yearly', // Dates by year
    'format' => 'html', // Output list
    'show_post_count' => false, // Don't show post count
  ));
  
  foreach ($dates as $date):
  ?>
  <li>
    <!-- <?php echo $date; ?> -->
    <a href="<?php echo home_url(); ?>/date/<?php echo $date->year; ?>"><?=$date->year; ?></a>
  </li>
  
  <?php endforeach; ?>
</ul>
    </nav>
</aside>
</main>
   
   <?php get_footer();?>

