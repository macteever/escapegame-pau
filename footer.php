			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="container-fluid" id="contact">
					<div class="container">
						<div class="row justify-content-center">
							<nav class="footer-menu">
								<div class="row align-items-center">
									<div class="col-xl-4 col-lg-4 col-12">
										<h3 class="text-white fs-18 mb-30 fw-600">Nous contacter</h3>
										<div class="text-white fs-15 footer-contacter">
											<?php the_field('footer_adress', 'option'); ?>
										</div>
									</div>
									<div class="col-xl-4 col-lg-4 col-12">
										<?php echo do_shortcode('[contact-form-7 id="53" title="Formulaire de contact 1"]'); ?>
									</div>
									<div class="col-xl-4 col-lg-4 col-12 text-right">
										<h3 class="text-white fs-18 mb-30 fw-600">Nos horaires</h3>
										<div class="text-white fs-15">
											<?php the_field('footer_horaires', 'option'); ?>
										</div>
										<div class="mt-30">
											<?php

											$link = get_field('footer_lien', 'option');

											if( $link ):
												$link_url = $link['url'];
												$link_title = $link['title'];
												?>
												<a class="btn-gold" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
											<?php endif; ?>
										</div>
									</div>
								</div>
							</nav>
						</div>
					</div>
				</div>
				<div class="container-fluid subfooter">
					<div class="row text-white fs-13">
						<div class="col-xl-4 col-lg-4 col-12 d-flex text-white">
							<span class="fs-13">Nous suivre</span>
							<div>
				        <a href="#" target="blank"><i class="fa fa-facebook-official fs-15 ml-15 text-white" aria-hidden="true"></i></a>
				        <a href="#" target="blank"><i class="fa fa-linkedin fs-15 ml-15 text-white" aria-hidden="true"></i></a>
				      </div>
						</div>
						<div class="col-xl-4 col-lg-4 col-12 footer-extra-menu d-flex justify-content-center">
							<?php wp_nav_menu( array( 'theme_location' => 'extra-menu' ) ); ?>
							<span class="fs-13 text-white"> ~ Escape Game Pau</span>
						</div>
						<div class="col-xl-4 col-lg-4 col-12 text-right">
							Création web
						</div>
					</div>
				</div>
			</footer>
			<!-- /footer -->
		</div>
		<!-- /wrapper -->
		<?php wp_footer(); ?>

	</body>
</html>
