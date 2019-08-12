<?php /* Template Name: Contact */ get_header(); ?>
<main role="main" class="main-content">
	<section id="contact-top" class="container-fluid" style="background: -webkit-linear-gradient(321deg, rgba(71,71,71,0.58) 0%, rgba(71,71,71,0.58) 100%);
	 background: -o-linear-gradient(rgba(71,71,71,0.58) 0%, rgba(71,71,71,0.58) 100%);
	 background: linear-gradient(rgba(71,71,71,0.32) 0%, rgba(71,71,71,0.58) 100%),
	 url(<?php the_field('contact_top_bkg'); ?>)">
	 <div class="container h-100">
		<div class="row align-items-end h-100">
			<div class="col-auto mx-auto fs-18 contact-title ls-3">
				<?php the_field('contact_title'); ?>
			</div>
		</div>
	 </div>
	</section>
	<section id="contact-hypnose" class="container-fluid">
		<div class="container">
			<?php if ( have_rows('contact_content') ): ?>
		    <?php while ( have_rows('contact_content') ) : the_row(); ?>
					<div class="row justify-content-center align-items-end">
						<div class="col-xl-4 col-lg-4 col-md-5 col-12">
							<?php
								$image = get_sub_field('img');
								if ( !empty($image) ): ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							<?php endif; ?>
						</div>
						<div class="col-xl-5 col-lg-5 col-md-7 col-12">
							<div class="fs-20 ls-3 fw-500"><?php the_sub_field('subtitle'); ?></div>
							<div class="fs-15 lh-26	 mb-30 mt-20">
								<?php the_sub_field('content'); ?>
							</div>
							<div class="contact-form">
								<?php echo do_shortcode('[contact-form-7 id="96" title="Sans titre"]'); ?>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</section>
	<!-- <div class="container-fluid mt-80">
		<div class="row map">
			<div id="map"></div>
		</div>
	</div> -->
</main>
<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYM2FZ6PBFvla3XFMkE6xALHBw2KPY3LY&callback=initMap"></script> -->
<!-- /container-fluid -->
<?php get_footer(); ?>
