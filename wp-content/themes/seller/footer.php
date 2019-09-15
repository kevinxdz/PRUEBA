<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Seller
 */
?>

	</div><!-- #content -->
</div><!-- #page -->

<?php get_sidebar('footer'); ?>

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="site-info col-md-4">
            <span class="credit-line">
			    <?php printf( __( 'Designed by %1$s.', 'seller' ), '<a target = "_blank" href="http://inkhive.com" rel="nofollow">Inkhive Theme</a>' ); ?>
            </span>
            <span class="sep">
                <?php echo ( esc_html(get_theme_mod('seller_footer_text')) == '' ) ? ('&copy; '.date('Y').' '.get_bloginfo('name').esc_html('. All Rights Reserved. ','seller')) : esc_html( get_theme_mod('seller_footer_text') ); ?>
            </span>
		</div><!-- .site-info -->

        <?php get_template_part('modules/navigation/footer','menu');?>
	</div><!--.container-->
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>