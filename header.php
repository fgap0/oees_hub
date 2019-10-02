<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oees_hub
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'oees_hub'); ?></a>

		<header id="masthead" class="container-fluid site-header">
			<div class="row">
				<div class="col-2 col-logo">
					<div class="logo" style="margin-left:100px; margin-top:20px;">
						<?php the_custom_logo(); ?>
					</div>
				</div>
			</div>

			<div id="menu_button">
				<i class="fas fa-bars"></i>
			</div>

			<nav id="site-navigation" class="header-nav">
				<div class="container">
					<div class="row">
						<div class="col-12">



							<?php
							$menuLocations = get_nav_menu_locations();
							$menu = wp_get_nav_menu_items($menuLocations['main-menu']);
							$child = array();
							$main = array();
							$i = 0;
							$j = 0;
							foreach ($menu as $m) {

								if (!$m->menu_item_parent) {
									$main[$i]['id'] = $m->ID;
									$main[$i]['title'] = $m->title;
									$main[$i]['url'] = $m->url;
									$i++;
								} else {
									$child[$m->menu_item_parent][$j]['title'] = $m->title;
									$child[$m->menu_item_parent][$j]['url'] = $m->url;
									$j++;
								}
							}
							?>

							<ul class="firstnav">
								<?php foreach ($main as $m) {
									if (!empty($child[$m['id']])) $has_menu = 1;
									else $has_menu = 0;
									if (!$has_menu) echo '<li><a href="' . $m['url'] . '">' . $m['title'] . '</a></li>';
									else {
										echo '<li><a href="" class="disable-click">' . $m['title'] . '</a>';
										echo '<ul>';
										foreach ($child[$m['id']] as $ch) {
											echo '<li><a href="' . $ch['url'] . '">' . $ch['title'] . '</a></li>';
										}
										echo '</ul>';
										echo '</li>';
									}
								}
								?>





							</ul>







						</div>
					</div>
				</div>

				<div class="acc">
					<div class="czcionka">
						<div style="height:20px">
							Czcionka:
						</div>
						<div class="c-all">
							<span id="c1" onclick="
						addCookie('czcionka','c1');
						javascript:removejscssfile('<?php echo get_theme_file_uri(); ?>/acc/c2.css','css');
						javascript:removejscssfile('<?php echo get_theme_file_uri(); ?>/acc/c3.css','css');
					">A</span>
							<span id="c2" onclick="
						addCookie('czcionka','c2');
						javascript:removejscssfile('<?php echo get_theme_file_uri(); ?>/acc/c3.css','css');
						javascript:loadjscssfile('<?php echo get_theme_file_uri(); ?>/acc/c2.css','css');
					">A</span>
							<span id="c3" onclick="
						addCookie('czcionka','c3');
						javascript:removejscssfile('<?php echo get_theme_file_uri(); ?>/acc/c2.css','css');
						javascript:loadjscssfile('<?php echo get_theme_file_uri(); ?>/acc/c3.css','css');
					">A</span>
						</div>
					</div>
					<div class="kontrast">
						<div style="height:20px">
							Kontrast:
						</div>
						<div class="k-all">
							<span id="k1" onclick="
						addCookie('kontrast','k1');
						javascript:removejscssfile('<?php echo get_theme_file_uri(); ?>/acc/k2.css','css');
						javascript:removejscssfile('<?php echo get_theme_file_uri(); ?>/acc/k3.css','css');
						javascript:removejscssfile('<?php echo get_theme_file_uri(); ?>/acc/k4.css','css');
					">A</span>
							<span id="k2" onclick="
						addCookie('kontrast','k2');
						javascript:removejscssfile('<?php echo get_theme_file_uri(); ?>/acc/k3.css','css');
						javascript:removejscssfile('<?php echo get_theme_file_uri(); ?>/acc/k4.css','css');
						javascript:loadjscssfile('<?php echo get_theme_file_uri(); ?>/acc/k2.css','css');
					">A</span>
							<span id="k3" onclick="
						addCookie('kontrast','k3');
						javascript:removejscssfile('<?php echo get_theme_file_uri(); ?>/acc/k2.css','css');
						javascript:removejscssfile('<?php echo get_theme_file_uri(); ?>/acc/k4.css','css');
						javascript:loadjscssfile('<?php echo get_theme_file_uri(); ?>/acc/k3.css','css');
					">A</span>
							<span id="k4" onclick="
						addCookie('kontrast','k4');
						javascript:removejscssfile('<?php echo get_theme_file_uri(); ?>/acc/k2.css','css');
						javascript:removejscssfile('<?php echo get_theme_file_uri(); ?>/acc/k3.css','css');
						javascript:loadjscssfile('<?php echo get_theme_file_uri(); ?>/acc/k4.css','css');
					">A</span>
						</div>
					</div>
				</div>

			</nav><!-- #site-navigation -->

			<?php if (is_admin_bar_showing()) { ?>
				<style>
					.site-navigation,
					#menu_button {
						top: 32px !important;
					}
				</style>
			<?php } ?>

			<?php if (!is_front_page()) { ?>
				<style>
.site-header{
	position:static;
	background:#0B1E2C;
	margin-bottom:50px;
	height:160px;
}
				</style>
			<?php } ?>


		</header><!-- #masthead -->