<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package oees_hub
 */

get_header();
?>

<article class="main single-post">
	<div class="container con-sm">

	<?php while(have_posts()) {
		the_post(); ?>

			<div class="row">
				<div class="col-12">
					<h1><?php the_title(); ?></h1>
					<div class="date">Opublikowano: <b><?php the_date(); ?></b></div>
				</div>
			</div>
			<div class="row post-thumbnail">
				<div class="col-12">
					<?php the_post_thumbnail(); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<?php the_content(); ?>
				</div>
			</div>

	<?php } ?>

	</div>
</article>



<?php
get_footer();
