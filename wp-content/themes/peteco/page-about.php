<?php /* Template Name: About */ get_header(); ?>
	<?php while (have_posts()) : the_post(); ?>
		<main class="about-page" role="main">
			<section class="">
				<div class="content">
					<!-- <h1><?php the_title(); ?></h1> -->
					<?php if (have_rows('about_section')): ?>
						<?php while (have_rows('about_section')) : the_row(); ?>
							<div class="single-about-section">
								<h2><?php the_sub_field('section_title'); ?></h2>
								<div class="about-section-content">
									<?php the_sub_field('section_content'); ?>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</section>
		</main>
	<?php endwhile; ?>
<?php get_footer(); ?>
