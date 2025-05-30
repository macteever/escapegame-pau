<?php /* Template Name: FAQ */
   get_header(); ?>
   <main role="main" class="faq-main">
     <section id="faq-top" class="container-fluid">
 		 <div class="container h-100">
 			 <?php if ( have_rows('top_faq') ): ?>
 				 <?php while ( have_rows('top_faq') ) : the_row();
 				 ?>
 			 	<div class="row h-100 faq-top-page">
 			 		<div class="col-12 apparition-2">
 			 			<h3 class="text-green fs-18"><?php the_sub_field('subtitle'); ?></h3>
 						<div class="fs-72 fw-600 mb-30 mt-0"><?php the_sub_field('title'); ?></div>
 						<div class="mw-60 fs-18 lh-32"><?php the_sub_field('content'); ?></div>
 			 		</div>
 			 	</div>
 				<?php endwhile; ?>
 	 		<?php endif; ?>
 		 </div>
 		</section>
    <section class="container-fluid faq-questions">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-30">
            <h2 class="fs-32">Questions fréquentes :</h2>
          </div>
        </div>
        <div class="row justify-content-between">
          <?php if ( have_rows('faq_questions') ): ?>
            <?php while ( have_rows('faq_questions') ) : the_row();
            ?>
            <div class="col-xl-5 col-lg-6 col-12 faq-questions-content mb-30 apparition-2">
              <div class="d-flex justify-content-between pt-20 pb-20 row-question p-relative">
                <h3 class="question-content fs-20 fw-600"><?php the_sub_field('question'); ?></h3>
                <img class="btn-question-faq" src="<?php echo get_template_directory_uri(); ?>/assets/img/plus-shape.svg" alt="Escape Game Pau" class="anim-300">
              </div>
              <div class="reponse-content p-relative fs-17"><?php the_sub_field('reponse'); ?></div>
            </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </section>
    <section class="panel-question p-relative o-hidden">
      <div class="container-fluid before-panel">
        <div class="container zi-9999 p-relative">
          <div class="row justify-content-center">
            <div clas="col-12 text-center">
              <h2 class="fs-36 uppercase text-white fw-600 text-center">J’ai toujours rien compris</h2>
              <div class="text-white fs-20 text-center mw-60 mx-auto mt-30">
                Ok alors contactez-nous directement !
              </div>
              <div class="d-flex justify-content-center">
                <!-- <div class="mt-30 mr-10">
                    <a class="btn-brd-white" href="#contact">Nous contacter</a>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   </main>
<?php get_footer(); ?>
