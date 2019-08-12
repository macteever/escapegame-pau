<?php /* Template Name: Hypnose */ get_header(); ?>
	<main role="main" class="main-content">
		<section id="hypnose-top" class="container-fluid" style="background: -webkit-linear-gradient(321deg, rgba(71,71,71,0.58) 0%, rgba(71,71,71,0.58) 100%);
		 background: -o-linear-gradient(rgba(71,71,71,0.58) 0%, rgba(71,71,71,0.58) 100%);
		 background: linear-gradient(rgba(71,71,71,0.32) 0%, rgba(71,71,71,0.58) 100%),
		 url(<?php the_field('hypnose_top_bkg'); ?>)">
		 <div class="container h-100">
		 	<div class="row align-items-end h-100">
		 		<div class="col-auto mx-auto fs-18 hypnose-title ls-3 apparition-2">
		 			<?php the_field('hypnose_title'); ?>
		 		</div>
		 	</div>
		 </div>
		</section>
		<section id="hypnose-present" class="container-fluid">
			<div class="container">
				<?php if ( have_rows('hypnose_present') ): ?>
					<?php while ( have_rows('hypnose_present') ) : the_row(); ?>
						<div class="row justify-content-around align-items-center hypnose-present">
							<div class="col-xl-4 col-lg-4 col-md-6 col-12 pr-30">
								<?php
									$image = get_sub_field('img');
									if ( !empty($image) ): ?>
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								<?php endif; ?>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-12 pl-30">
								<div class="uppercase fw-500 fs-28 ls-4 fw-500"><?php the_sub_field('title'); ?></div>
								<div class="fs-22 ls-3 fw-500"><?php the_sub_field('subtitle'); ?></div>
								<div class="fs-16 lh-28 mb-50 mt-30">
									<?php the_sub_field('content'); ?>
								</div>
								<div>
									<?php
									 $link = get_sub_field('link');

									 if( $link ):
										 $link_url = $link['url'];
										 $link_title = $link['title'];
										 $link_target = $link['target'] ? $link['target'] : '_self';
										 ?>
										 <a class="btn-grey" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
									 <?php endif; ?>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</section>
		<section id="hypnose-details" class="container-fluid">
			<div class="container">
				<div class="row justify-content-center">
					<?php if ( have_rows('hypnose_details') ): ?>
						<?php while ( have_rows('hypnose_details') ) : the_row(); ?>
							<div class="col-12 hypnose-details text-center">
								<div class="uppercase fw-500 fs-15 ls-3 after-wave-white text-center"><?php the_sub_field('title'); ?></div>
								<div class="fs-22 ls-3 fw-500"><?php the_sub_field('subtitle'); ?></div>
							</div>
							<div class="d-flex flex-wrap justify-content-between mt-80">
								<?php if ( have_rows('hypnose_etape') ): ?>
									<?php while ( have_rows('hypnose_etape') ) : the_row(); ?>
										<div class="col-xl-4 col-lg-4 col-12 text-center hypnose-details-content">
											<div class="fs-18 uppercase ls-4">
												<?php the_sub_field('title'); ?>
											</div>
											<div class="fs-16 lh-28 fw-300 mt-30 hyp-details-text">
												<?php the_sub_field('content'); ?>
											</div>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
							<div class="mt-50">
								<?php
								 $link = get_sub_field('lien');

								 if( $link ):
									 $link_url = $link['url'];
									 $link_title = $link['title'];
									 $link_target = $link['target'] ? $link['target'] : '_self';
									 ?>
									 <a class="btn-white" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
								 <?php endif; ?>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</section>
	</main>
<!-- /container-fluid -->
<?php get_footer(); ?>
