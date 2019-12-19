<?php
/*
Template Name: Rekrutacja
*/
?>

<?php get_header(); ?>


<section class="main">
	<div class="container con-sm">

		<?php while (have_posts()) {
			the_post(); ?>

			<div class="row">
				<div class="col-12">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-12 page-content">
					<?php the_content(); ?>
				</div>
			</div>

		<?php } ?>

	</div>
	<div class="container">
		<div class="row">
			<div class="col-4 offset-4">
				<a class="rek_btn2" href="<?php the_field('r_odnosnik'); ?>" style="background: #14B9FF; color:#fff; display:block; text-align:center;margin:auto; margin-top:60px; padding:40px;">
					<?php the_field('r_tresc'); ?>
				</a>

			</div>
			<style>
				.rek_btn2:hover{
					text-decoration: none;
				}
			</style>
		</div>
	</div>
</section>


<?php
get_footer();
