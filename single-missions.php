<?php get_header(); ?>
	<main role="main">
		<section class="container-fluid pl-0 pr-0">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="row">
					<aside class="col-xl-4 col-lg-4 col-12 p-relative pl-0 pr-0">
						<!-- TEST SLIDER FANCYBOX -->
						<div class="slider-single">
							<?php
							if( have_rows('single_gallerie') ):
								while ( have_rows('single_gallerie') ) : the_row();
								$image = get_sub_field('img');
								if( !empty($image) ): ?>
									<a href="<?php echo $image['url']; ?>" data-fancybox="images">
										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									</a>
								<?php endif; ?>
								<?php
								endwhile;
								else :
							endif;
							?>
						</div>
						<div class="d-flex single-box-arrow">
							<img class="single-mission-prev" src="<?php echo get_template_directory_uri(); ?>/assets/img/slider-arrow-left.svg" alt="Escape Game Pau" class="anim-300">
							<img class="single-mission-next" src="<?php echo get_template_directory_uri(); ?>/assets/img/slider-arrow-right.svg" alt="Escape Game Pau" class="anim-300">
						</div>
					</aside>
					<div class="col-xl-5 col-lg-5 col-12 single-mission-content">
						<div class="pr-15">
		          <?php
		          if ( function_exists('yoast_breadcrumb') ) {
		            yoast_breadcrumb( '<p class="text-green fs-15 mb-0" id="breadcrumbs">','</p>' );
		          }
		           ?>
		          <h1 class="fw-700 fs-60 mt-0 mb-0"><?php the_title(); ?></h1>
							<div class="d-flex align-items-center justify-content-between mt-30 mw-80 ml-auto">
								<?php
								if( have_rows('single_infos') ):
									while ( have_rows('single_infos') ) : the_row();
									?>
										<span class="before-diff fs-14 p-relative"><span class="fw-600">Difficulté : </span><?php the_sub_field('difficulte'); ?></span>
										<span class="before-genre fs-14 p-relative"><span class="fw-600">Genre : </span><?php the_sub_field('genre'); ?></span>
										<span class="before-joueur fs-14 p-relative"><span class="fw-600">Joueurs : </span><?php the_sub_field('joueurs'); ?></span>
									<?php
									endwhile;
									else :
								endif;
								?>
							</div>
							<div class="fs-16 lh-26 text-grey mw-90 ml-auto mt-15">
								<?php the_content(); ?>
							</div>
							<div class="d-flex mt-80 justify-content-end">
								<div class="mr-10">
		              <a class="btn-gold" href="#">Réserver</a>
		            </div>
		            <div class="ml-10">
		              <a class="btn-brd-green" href="#">Une question ?</a>
		            </div>
							</div>
		        </div>
					</div>
					<div class="col-xl-3 col-lg-3 col-12 missions-related">
						<div class="missions-related-child">
							<div class="pr-30">
								<h3 class="fs-22 fw-600 pl-50 mb-10 text-green">Avez-vous essayé :</h3>
							</div>
								<?php
								$myposts = get_posts(array(
									'showposts' => 3,
									'post_type' => 'missions',
									'orderby'  => 'name',
									'order'     => 'ASC'
								));
								foreach ( $myposts as $post ) : setup_postdata( $post );
								?>
								<div class="mission-related-thumbnail mt-15 mb-15">
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<div class="anim-300 p-relative">
											<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="escape game pau">
											<div class="text-white anim-300 thumbnail-related-title">
												<div class="fs-14 text-gold text-right">
													<?php $term_list = wp_get_post_terms($post->ID, 'taxonomy-missions', array("fields" => "all"));
													foreach($term_list as $term_single) {?>
														<span class="fs-14 text-gold text-right"><?php echo $term_single->name; ?></span>
													<?php } ?>
												</div>
												<h3 class="fw-600 fs-22 text-right"><?php the_title(); ?></h3>
											</div>
										</div>
									</a>
								</div>
								<?php
							endforeach;
							?>
							<?php wp_reset_postdata();
							?>
							<div class="mt-50 text-center pb-50">
								<a href="<?php home_url() . '/missions' ?>" class="btn-brd-green text-center">Voir toutes les missions</a>
							</div>
						</div>
					</div>
				</div>
			</article>
			<!-- /article -->
		<?php endwhile; ?>

		<?php else: ?>
			<!-- article -->
			<article>
				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
			</article>
			<!-- /article -->
		<?php endif; ?>
		</section>
	</main>

<?php get_footer(); ?>
