<?php /* Template Name: Home */ get_header(); ?>
	<?php while (have_posts()) : the_post(); ?>
		<main class="home-page" role="main">
			<section class="work-section">
				<div class="content">
					<?php $args = array( 'post_type' => 'projects', 'posts_per_page' => -1 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<div class="single-project">
							<a href="<?php the_permalink(); ?>"></a>
							<div class="image-wrap"
            	<?php $image = get_field('featured_image');
            	if (!empty($image)): ?>
              	style='background-image: url("<?php echo $image; ?>");'
            	<?php endif;?>
            	></div>
							<h2><?php the_title(); ?></h2>
						</div>
						<? wp_reset_postdata(); ?>
					<?php endwhile;?>
				</div>
			</section>
		</main>
	<?php endwhile; ?>
<?php get_footer(); ?>
