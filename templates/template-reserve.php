<?php /* Template Name: Reserver */
   get_header(); ?>
   <main role="main" class="reserver-main">
     <section id="reserver-top" class="container-fluid">
 		 <div class="container h-100">
 			 <?php if ( have_rows('top_reserver') ): ?>
 				 <?php while ( have_rows('top_reserver') ) : the_row();
 				 ?>
 			 	<div class="row h-100 reserver-top-page">
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
    <section class="container-fluid">
      <div class="container integ-bookeo">
        <script type="text/javascript" src="https://bookeo.com/widget.js?a=42556JPH43316D1AF9876F"></script>
      </div>
    </section>
    <?php get_template_part("includes/panel-question"); ?>
   </main>
<?php get_footer(); ?>
