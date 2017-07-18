<?php get_header(); ?>



<div class="the404">

<?php if(get_field('404_error_image','option')): ?>
<section class="row error max-height-vh center" style="background-image: url('<?php the_field('404_error_image_1','option'); ?>');">
	<div class="block absolute z-2">
        <div class="row max-height">
        	<div class="col mid">
                <div class="row heading"><h1 class="white the404inner"><?php the_field('404_error_heading','option'); ?></h1></div>
                <div class="row entry"><?php the_field('404_error_subheading','option'); ?></div>
                <div class="row click"><a class="button outline white" href="<?php echo site_url();?>"><?php the_field('404_error_button_text','option'); ?></a></div>
            </div>
        </div>
    </div>
    <div class="block absolute overlay z-1"></div>
	
</section>
<?php endif; ?>
</div>


<?php get_footer(); ?>














