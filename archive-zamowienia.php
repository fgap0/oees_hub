<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package oees_hub
 */

get_header();
?>


<section class="main">
	<div class="container con-sm">
		<div class="row">
			<div class="col-12">
				<h1>Zamówienia</h1>
			</div>
		</div>
	</div>
</section>

<section class="posts">
	<div class="container con-sm">

		<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array(
			'post_type' => 'zamowienia', // Your post type name
			'posts_per_page' => -1,
			'paged' => $paged,
		);

		$loop = new WP_Query($args);
		if ($loop->have_posts()) {
			while ($loop->have_posts()) : $loop->the_post(); ?>

				<article class="row">

					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

					<div class="post-box">
						<div class="wrapper">
							<div class="content">
								<h2><?php the_title(); ?></h2>
								<?php echo wp_trim_words(get_the_content(), 40, '...'); ?>
							</div>
							<div class="bottom">
								<div class="date">Opublikowano: <b><?php the_date(); ?></b></div>
								<a class="button" href="<?php the_permalink(); ?>">WIĘCEJ</a>
							</div>
						</div>
					</div>

				</article> <?php //row 
									?>





		<?php endwhile;
			$total_pages = $loop->max_num_pages;
			if ($total_pages > 1) {
				$current_page = max(1, get_query_var('paged'));
				echo paginate_links(array(
					'base' => get_pagenum_link(1) . '%_%',
					'format' => '/page/%#%',
					'current' => $current_page,
					'total' => $total_pages,
					'prev_text'    => __('« Poprzednia Strona |'),
					'next_text'    => __('| Następna Strona »'),
				));
			}
		}
		wp_reset_postdata(); ?>



	</div> <?php //container 
			?>
</section>


<?php
get_footer();
