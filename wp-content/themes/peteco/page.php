<?php get_header(); ?>
	<?php while (have_posts()) : the_post(); ?>
		<main class="general-page generalPage" role="main">
			<h2><?php the_title(); ?></h2>
			<div class="content sectionAnimate">
				<?php the_content(); ?>
			</div>
		</main>	
	<?php endwhile; ?>
<?php get_footer(); ?>
