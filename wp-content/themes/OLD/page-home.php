<?php /* Template Name: Home */ get_header(); ?>
	<?php while (have_posts()) : the_post(); ?>
		<main class="home-page" role="main">
			<section class="hero-section">
				<div class="content">
				</div>
			</section>
			<section class="work-section">
				<div class="content">
					<div class="single-project">
						<div class="project-image">
							<img src="">
						</div>
						<div class="project-title">
							<h2></h2>
						</div>
					</div>
				</div>
			</section>
		</main>
	<?php endwhile; ?>
<?php get_footer(); ?>
	
