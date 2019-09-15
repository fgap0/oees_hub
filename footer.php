<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content afte r.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oees_hub
 */

?>

</div><!-- #content -->


<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-6 col-md-2 logo-footer">
					<img src="https://oees.pl/hub/wp-content/uploads/2019/04/logo_hub_b.png" />
				</div>
				
				<div class="col-6 col-md-3">
					<?php if( have_rows('kolumna_1', 'option')  ):
						while ( have_rows('kolumna_1', 'option') ) : the_row(); ?>
						<?php $link = get_sub_field('link_1');
							if( $link ): 
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
							?>
								<div class="link"><a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_title; ?></a></div>
						<?php endif; ?>
						<?php endwhile;
					endif; ?>
				</div>
				<div class="col-6 col-md-3">
					<?php if( have_rows('kolumna_2', 'option')  ):
						while ( have_rows('kolumna_2', 'option') ) : the_row(); ?>
						<?php $link = get_sub_field('link_2');
							if( $link ): 
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
							?>
								<div class="link"><a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_title; ?></a></div>
						<?php endif; ?>
						<?php endwhile;
					endif; ?>
				</div>
				<div class="col-6 col-md-3">
					<?php if( have_rows('kolumna_3', 'option')  ):
						while ( have_rows('kolumna_3', 'option') ) : the_row(); ?>
						<?php $link = get_sub_field('link_3');
							if( $link ): 
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
							?>
								<div class="link"><a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_title; ?></a></div>
						<?php endif; ?>
						<?php endwhile;
					endif; ?>
				</div>
				<div class="col-1">
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->


</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>