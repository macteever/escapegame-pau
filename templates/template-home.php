<?php /* Template Name: Home */
   get_header(); ?>
   <main role="main" class="home-main">
     <section id="home-top" class="container-fluid" style="background: -webkit-linear-gradient(180deg, rgba(0,0,0,0.15) 10%, #000000 100%);
				background: -o-linear-gradient(180deg, rgba(0,0,0,0.15) 10%, #000000 100%);
				background: linear-gradient(180deg, rgba(0,0,0,0.15) 10%, #000000 100%),
      url(<?php the_field('home_bkg'); ?>)">
       <div class="container">
         <div class="row justify-content-center home-top-content align-items-center">
           <div class="col-12 text-center mb-80">
             <h1 class="mb-0"><?php the_title(); ?></h1>
             <h3 class="home-slogan"><?php bloginfo('name'); ?></h3>
             <div class="text-center mt-80">
               <a class="btn-brd-gold" href="#">Découvrir les missions</a>
             </div>
           </div>
         </div>
       </div>
       <div class="box-parent row flex-column align-items-center">
         <p class="fs-12 text-center ls-2 mb-10 uppercase text-white">Découvrir</p>
         <div class="box">
           <span></span>
           <span></span>
         </div>
       </div>
     </section>
     <section class="container-fluid home-concept">
       <div class="container">
         <?php if ( have_rows('concept_present') ): ?>
           <?php while ( have_rows('concept_present') ) : the_row();
           ?>
           <div class="row flex-column align-items-center justify-content-center mb-100">
             <div class="col-12 text-green text-center fs-15">
               <?php the_sub_field('subtitle'); ?>
             </div>
             <div class="col-12 text-white text-center fw-700 fs-44 mb-30">
               <?php the_sub_field('title'); ?>
             </div>
             <div class="col-xl-6 col-lg-6 colmd-8 col-12 text-white text-center fs-22">
               <?php the_sub_field('content'); ?>
             </div>
           </div>
           <?php endwhile; ?>
         <?php endif; ?>
         <div class="row justify-content-around">
           <?php if ( have_rows('concept_infos') ): ?>
             <?php while ( have_rows('concept_infos') ) : the_row();
             ?>
             <div class="col-xl-4 col-lg-4 col-12 d-flex flex-column align-items-center">
               <div class="d-flex align-items-center mb-30">
                 <?php
                 $image = get_sub_field('img');
                 if ( !empty($image) ): ?>
                   <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                 <?php endif; ?>
                 <h3 class="fw-700 fs-28 text-white ml-15"><?php the_sub_field('title'); ?></h3>
               </div>
               <div class="text-white fs-17 mw-80">
                 <?php the_sub_field('content'); ?>
               </div>
             </div>
             <?php endwhile; ?>
           <?php endif; ?>
         </div>
         <div class="row justify-content-center mt-100">
           <a href="#">Réserver</a>
           <a class="btn-brd-gold" href="#">Une question ?</a>
         </div>
       </div>
     </section>
   </main>
<?php get_footer(); ?>
