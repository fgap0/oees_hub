<?php get_header(); ?>

	
<section class="main kontakt">
	<div class="container con-sm">

		<?php while(have_posts()) {
			the_post(); ?>

			<div class="row">
				<div class="col-12">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
			<div class="row box">
				<div class="col-12 col-md-6 left">
					<?php the_field('kolumna_lewa'); ?>
				</div>
				<div class="col-12 col-md-6 right">
					<?php the_field('kolumna_prawa'); ?>
				</div>
			</div>

		<?php } ?>

	</div>
</section>

<section class="mapa">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2560.7164649247734!2d19.957705315837412!3d50.07287142237977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47165b1fc4f1bdd1%3A0x77c3d6cb8f24fec!2sFundacja+Gospodarki+i+Administracji+Publicznej!5e0!3m2!1spl!2spl!4v1554929361189!5m2!1spl!2spl" 
		width="100%" height="500" frameborder="0" style="border:0" allowfullscreen>
	</iframe>
</section>

<?php
get_footer();
