<?php get_header(); ?>


<section class="main">
	<div class="container con-sm">

	<?php while(have_posts()) {
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
</section>


<?php
get_footer();
