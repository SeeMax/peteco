<!-- TEMPLATE FOR GENERAL POSTS -->
<?php get_header(); ?>	
	<?php while (have_posts()) : the_post(); ?>
		<main class="general-page general-post generalPage" role="main">
			<!-- The ACFs -->		
			<div class="content">
				<div class="project-back"><a href="/"><  back to projects</a></div>
				<h1><?php the_title(); ?></h1>
				<div class="description">
					<?php the_field('description'); ?>
				</div>
				
					<section class="media-section">
						<?php if (have_rows('media_field')): ?>
							<?php while (have_rows('media_field')) : the_row(); ?>
								<?php $width = get_sub_field('media_width'); ?>

								
								<?php if (get_sub_field('video_image') == 'video'): ?>
									<div class="video-frame <?php echo $width; ?>">
										<?php the_sub_field('project_video'); ?>
									</div>
								<?php endif; ?>
								<?php if (get_sub_field('video_image') == 'image'): ?>
									<?php $image = get_sub_field('project_image'); if (!empty($image)): ?>
										<img class="<?php echo $width; ?>" src="<?php echo $image; ?>" />
									<?php endif;?>
								<?php endif; ?>

								
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</section>
			</div>
		</main>
	<?php endwhile; ?>
<?php get_footer(); ?>						




