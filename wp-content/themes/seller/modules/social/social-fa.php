<?php
/*
** Template to Render Social Icons on Top Bar
*/

for ($i = 1; $i <= 8; $i++) :
	$social = esc_html(get_theme_mod('seller_social_'.$i));
	$social_url = esc_url(get_theme_mod('seller_social_url'.$i));
	if ( ($social != 'none') && ($social_url != '') ) : ?>
	<a title="<?php echo ucfirst($social) ?>" href="<?php echo $social_url; ?>"><i class="fa fa-<?php echo $social; ?>"></i></a>
	<?php endif;

endfor; ?>