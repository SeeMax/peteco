<!-- TEMPLATE FOR GENERAL POSTS -->
<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
	<main class="general-page general-post generalPage" role="main">
		<!-- The ACFs -->
		<section class="hero-section heroSection">
			<div class="content">
				<!-- <p class="post-type-title sectionAnimate">
				<?php $category = get_the_category();
                echo $category[0]->cat_name;
                ?>
			</p> -->
			<h2><?php the_title(); ?></h2>
		</div>
	</section>
	<section class="post-image-section">
		<div class="content sectionAnimate">
			<?php $image = get_field('post_image');
            if (!empty($image)): ?>
			<img src="<?php echo $image; ?>" alt="<?php echo $image['alt']; ?>" />
		<?php endif;?>
		<?php if (get_field('post_image_caption')): ?>
			<div class="post-image-caption">
				<?php the_field('post_image_caption'); ?>
			</div>
		<?php endif; ?>
	</div>
</section>
<section class="main-section">
	<div class="content sectionAnimate postContent">
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
