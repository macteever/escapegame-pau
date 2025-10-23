<?php /* Template Name: Anniversaire */ get_header(); ?>
	<main role="main" class="main-content o-hidden">
		<section id="teambuilding-top" class="container-fluid" style="background: -webkit-linear-gradient(180deg, #FFFFFF 15%, rgba(255,255,255,0.00) 100%);
		 background: -o-linear-gradient(180deg, #FFFFFF 15%, rgba(255,255,255,0.00) 100%);
		 background: linear-gradient(180deg, #FFFFFF 15%, rgba(255,255,255,0.00) 100%),
		 url(<?php the_field('team_bkg'); ?>); background-size: cover;">
		 <div class="container h-100">
			 <?php if ( have_rows('team_top_page') ): ?>
				 <?php while ( have_rows('team_top_page') ) : the_row();
				 ?>
			 	<div class="row h-100 team-top-page">
			 		<div class="col-xl-auto col-lg-auto col-12 apparition-2">
			 			<h3 class="text-green fs-18"><?php the_sub_field('subtitle'); ?></h3>
						<h1 class="fs-72 fw-600 mb-30 mt-0"><?php the_title(); ?></h1>
						<div class="mw-60 fs-18 lh-32"><?php the_sub_field('content'); ?></div>
			 		</div>
			 	</div>
				<?php endwhile; ?>
	 		<?php endif; ?>
		 </div>
		 <div class="box-parent row flex-column align-items-center">
			 <p class="fs-12 text-center ls-2 mb-10 uppercase text-white">Découvrir</p>
			 <div class="box">
				 <span></span>
				 <span></span>
			 </div>
		 </div>
		</section>
		<section class="container-fluid team-avantages p-relative">
			<!-- <div class="uppercase overlay-title p-absolute">
				cohésion
			</div> -->
			<div class="container">
				<?php if ( have_rows('team_avantages') ): ?>
 				 <?php while ( have_rows('team_avantages') ) : the_row();
 				 ?>
				<div class="row justify-content-around">
					<div class="col-12 uppercase fs-44 fw-700 ls-5 text-center mb-80">
						<?php the_sub_field('title'); ?>
					</div>
					<div class="col-xl-5 col-lg-5 col-12 team-avantages-img">
						<?php
						$image = get_sub_field('img');
						if ( !empty($image) ): ?>
						  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
					</div>
					<div class="col-xl-5 col-lg-5 col-12 d-flex flex-column">
						<?php if ( have_rows('repeater') ): ?>
							<?php while ( have_rows('repeater') ) : the_row();
							?>
							<div class="fs-32 fw-600">
								<?php the_sub_field('subtitle'); ?>
							</div>
							<div class="fs-18 lh-32 mt-50">
								<?php the_sub_field('content'); ?>
							</div>
							<div class="mt-40 mb-80">
								<?php
								$link = get_sub_field('lien');

								if( $link ):
									$link_url = $link['url'];
									$link_title = $link['title'];
									?>
									<a class="btn-gold fw-600" href="<?php echo esc_url($link_url); ?>" ><?php echo esc_html($link_title); ?></a>
							   <?php endif; ?>
							</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
				<?php endwhile; ?>
			<?php endif; ?>
			</div>
		</section>
		<section class="container-fluid team-recrutement p-relative">
			<?php if ( have_rows('team_recrutement') ): ?>
				<?php while ( have_rows('team_recrutement') ) : the_row();
				?>
				<div class="uppercase overlay-title p-absolute">
					<?php the_sub_field('title'); ?>
				</div>
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-12 recrutement-img" style="background: url(<?php the_sub_field('img'); ?>); background-size: cover;">
					</div>
					<div class="col-xl-6 col-lg-6 col-12" style="background-color: #F0F0F0;">
						<div class="recrutement-content">
							<div class="fs-44 fw-600 mb-50">
								<?php the_sub_field('subtitle'); ?>
							</div>
							<div class="fs-17 lh-32">
								<?php the_sub_field('content'); ?>
							</div>
							<div class="mt-80 cta-anim">
								<?php
								$link = get_sub_field('lien');

								if( $link ):
									$link_url = $link['url'];
									$link_title = $link['title'];
									?>
									<a class="btn-brd-green fw-600 text-darkgrey" href="<?php echo esc_url($link_url); ?>" ><?php echo esc_html($link_title); ?></a>
							   <?php endif; ?>
							</div>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</section>
		<?php get_template_part("includes/panel-question"); ?>
	</main>
<!-- /container-fluid -->
<?php get_footer(); ?>
