<?php
if ( (get_theme_mod('seller_main_slider_enable')) && (is_front_page() || is_home())) :

	$count_x = $count = get_theme_mod('seller_main_slider_count'); ?>
	
	    <div id="slider-wrapper">
	        <ul class="bxslider">
	        	<?php for ( $i = 1; $i <= $count; $i++ ) :

		    		  			$url = esc_url ( get_theme_mod('seller_slide_url'.$i) );
		    		  			$img =  get_theme_mod('seller_slide_img'.$i);
		    		  			$title = esc_html( get_theme_mod('seller_slide_title'.$i));
		    		  			$desc = esc_html( get_theme_mod('seller_slide_desc'.$i));
                ?>
		    					<li>
		    					    <a class="slideurl" href="<?php $url; ?>">
		    					        <img alt="<?php $title; ?>" src="<?php echo $img; ?>">
		    					    </a>

		    					    <div class='slider-caption container'>
                                        <?php if ( $title !='' ): ?>
                                            <div class='slider-caption-title'><?php echo $title; ?></div>
                                        <?php endif; ?>
                                        <?php if ( $desc !='' ): ?>
                                            <div class='slider-caption-desc'><?php echo $desc; ?></div>
                                        <?php endif; ?>
                                    </div>

		    					</li>
		    	<?php endfor; ?>
	        </ul>
		</div>
	    
<?php endif;?>

