<?php 
if (is_home()):
    get_footer ('home');
elseif (is_404()):
    get_footer('404');
else:
    get_footer();
endif;
?>


<!-- <?php wp_footer();?> -->
<!-- Footer widget -->
<?php if ( is_active_sidebar( 'footer-widget' ) ) : ?>
    <div class="footer-widget-area">
        <?php dynamic_sidebar( 'footer-widget' ); ?>
    </div>
<?php endif; ?>

</body>
</html>