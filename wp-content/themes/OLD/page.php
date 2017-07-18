<?php get_header(); ?>
	<?php while (have_posts()) : the_post(); ?>
		<main class="general-page generalPage" role="main">
		<!-- The ACFs -->
			<section class="hero-section heroSection">
			<div class="content">
				<h2><?php the_title(); ?></h2>
			</div>
		</section>
		<section class="main-section">
			<div class="content sectionAnimate">
				<?php the_content(); ?>
			</div>
		</section>
	</main>
	<!-- ABOUT PAGE POP UP PARTIAL -->
	<?php get_template_part('partials/_about-page'); ?>
	<!-- FOOTER TEMPLATE OPENS HERE -->
	<footer class="footer" role="contentinfo">
	<div class="content">
		<!-- FOOTER CTA -->
		<div class="footer-hero">
			<?php get_template_part('partials/_footerCTA'); ?>
		</div>
		<!-- END FOOTER CTA -->
	<?php endwhile; ?>
<?php get_footer(); ?>
