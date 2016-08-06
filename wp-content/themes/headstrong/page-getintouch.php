<?php
/**
 * Template Name: Headstrong Get in touch page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Headstrong
 * @since Headstrong 1.0
 */
?>

<?php get_header(); ?>
	<div class="getintouch-page">
		<?php while (have_posts()) : the_post(); ?>
			<section class="overlapHeroBanner contactFormBanner">
				<div class="overlapHeroBannerImage" style="background-image: url(<?php echo wp_get_attachment_url(get_post_meta($post->ID, 'banner_image', true)); ?>)">
				</div>
				<div class="mobile-bg dark">
					&nbsp;
				</div>
				<div class="wrapper banner-body">
					<div class="container">
			   		<div class="row">
				   		<div class="col-xs-12 col-md-10 col-md-offset-1 banner-text-header">
		   			   <?php echo get_post_meta($post->ID, 'banner_text', true); ?>
				   		</div>
			   		</div>

			   		<div class="row">
				   		<div class="col-xs-12 col-md-10 col-md-offset-1 banner-text-header">
					   		<div class="get-help__form-box">
									<?php get_template_part('get-help-form'); ?>
				   			</div>
			   			</div>
		   			</div>
					</div>
				</div>
			</section>

			<div class="wrapper padded-panel extra-padded-panel">
				<?php echo get_post_meta($post->ID, 'get_in_touch_form', true); ?>
			</div>

			<?php echo get_post_meta($post->ID, 'page_scripts', true); ?>

		<?php endwhile; ?>
	</div>
<?php get_footer(); ?>
