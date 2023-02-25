<!-- <?php 
if (is_home()):
    get_header ('home');
elseif (is_404()):
    get_header('404');
else:
    get_header();
endif;
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?></title>
    <?php wp_head();?>
<?php include('stylesheet.php')?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body> 
    <?php 
    if(is_active_sidebar('header-widget')): ?>
    <?php dynamic_sidebar('header-widget');?>
    <?php endif; ?>
<header>

<div class="center-header">

<div class="header-btn-wrap">
<button class="menu-toggle active"></button>
<button class="header-search-toggle"></button>
</div>
<!-- Searchbar for phone mode -->
<div class="header-search-menu hide-search2">
<form action="<?php echo home_url();?>">
<input class="searchbar" type="text" name="s" placeholder="Sök på sidan..." required>
<input class="submit-btn" type="submit" value="Sök">
</form>
</div>

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

<!-- Searchbar for window mode -->
<form class="hide-search" action="<?php echo home_url();?>">
<input class="searchbar" type="text" name="s" placeholder="Sök på sidan..." required>
<input class="submit-btn" type="submit" value="Sök">
</form>
</div>
<!-- Toggle function -->
<script>
  $(document).ready(function() {
    $('.menu-toggle').click(function() {
      // $(".menu-toggle").toggleClass("active");
      $('.nav-menu').toggle();
    });
    $('.header-search-toggle').click(function() {
      $('.header-search-menu').toggle();
    });
  });
</script>
</header>