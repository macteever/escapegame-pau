<?php /* Template Name: Home */
   get_header(); ?>
   <main role="main" class="home-main">
     <section id="home-top" class="container-fluid" style="background: -webkit-linear-gradient(160deg, rgba(0,0,0,0) 10%, #000000 100%);
    				background: -o-linear-gradient(160deg, rgba(0,0,0,0) 10%, #000000 100%);
    				background: linear-gradient(160deg, rgba(0,0,0,0) 10%, #000000 100%),
            url(<?php the_field('home_bkg'); ?>); background-size: cover;">
         <div class="container">
           <div class="row justify-content-center home-top-content align-items-center">
             <div class="col-12 text-center mb-80 ">
               <h1 class="mb-0 apparition-2"><?php the_title(); ?></h1>
               <h3 class="home-slogan apparition-2"><?php bloginfo('description'); ?></h3>
               <div class="text-center mt-80 apparition-2 cta-anim">
                 <a class="btn-brd-gold" href="<?php echo home_url() . '/missions'; ?>">Découvrir les missions</a>
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
             <div class="col-xl-4 col-lg-4 col-12 d-flex flex-column align-items-center bloc-concept">
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
         <div class="row justify-content-center home-concept-links mt-120">
           <div class="mr-10">
             <a class="btn-gold" href="<?php echo home_url() . '/reserver'; ?>">Réserver</a>
           </div>
           <div class="ml-10">
             <a class="btn-brd-white" href="<?php echo home_url() . '/faq'; ?>">Une question ?</a>
           </div>
         </div>
       </div>
     </section>
     <section class="container-fluid home-missions p-relative">
       <h2 class="uppercase text-white">missions</h2>
       <div class="container home-missions-row">
         <?php if ( have_rows('les_missions') ): ?>
           <?php while ( have_rows('les_missions') ) : the_row();
           ?>
           <div class="">
             <div class="row align-items-center justify-content-center">
               <div class="col-xl-6 col-lg-6 col-12">
                 <?php
                 $image = get_sub_field('img');
                 if ( !empty($image) ): ?>
                 <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
               <?php endif; ?>
             </div>
             <div class="col-xl-6 col-lg-6 col-12 home-slide-content">
               <div class="text-white fs-44 fw-600 mb-30 text-right">
                 <?php the_sub_field('title'); ?>
               </div>
               <div class="text-white fs-18 lh-30 fw-300 mb-50 text-right mw-80 ml-auto">
                 <?php the_sub_field('content'); ?>
               </div>
               <div class="text-right cta-anim">
                 <?php
                 $link = get_sub_field('lien');

                 if( $link ):
                   $link_url = $link['url'];
                   $link_title = $link['title'];
                   ?>
                   <a class="btn-brd-gold fw-600" href="<?php echo esc_url($link_url); ?>" ><?php echo esc_html($link_title); ?></a>
                 <?php endif; ?>
               </div>
             </div>
           </div>
           </div>
         <?php endwhile; ?>
        <?php endif; ?>
       </div>
     </section>
     <section class="container-fluid home-tarifs">
       <div class="container">
         <div class="row justify-content-center mb-20">
           <div class="col-xl-10 col-lg-10 col-12 d-flex justify-content-between align-items-end padding-resp pl-0 pr-0">
             <div class="fs-72 text-white fw-700">
               <?php the_field('tarifs_title'); ?>
             </div>
             <div class="d-flex">
               <span class="text-green fs-15 fw-600">Tarifs réduits*</span>
               <span class="text-gold fs-15 fw-600 ml-15">Tarifs normaux*</span>
             </div>
           </div>
         </div>
         <?php if ( have_rows('tarifs_line') ): ?>
           <?php while ( have_rows('tarifs_line') ) : the_row();
           ?>
           <div class="row justify-content-center">
             <div class="col-xl-10 col-lg-10 col-12 d-flex justify-content-between align-items-center home-line-tarif padding-resp">
               <div class="fs-18 text-white">
                 <?php the_sub_field('nb_joueurs'); ?> :
               </div>
               <div class="d-flex">
                 <p class="text-green fs-24 fw-600"><?php the_sub_field('tarif_reduit'); ?><span class="fs-15 fw-300">/j</span></p>
                 <p class="text-gold fs-24 fw-600 ml-50"><?php the_sub_field('tarif_normal'); ?><span class="fs-15 fw-300">/j</span></p>
               </div>
             </div>
           </div>
           <?php endwhile; ?>
         <?php endif; ?>
         <div class="row justify-content-center mt-80">
           <div class="col-xl-10 col-lg-10 col-12 text-white fs-12 fw-300">
             <?php the_field('tarifs_infos'); ?>
           </div>
         </div>
       </div>
     </section>
     <section class="container-fluid home-team" style="background: url(<?php the_field('team_bkg'); ?>); background-size: cover;">
       <div class="container">
         <?php if ( have_rows('home_teambuilding') ): ?>
           <?php while ( have_rows('home_teambuilding') ) : the_row();
           ?>
           <div class="row">
             <div class="col-xl-6 col-lg-6 col-12 d-flex flex-column">
               <div class="fs-44 fw-700">
                <?php the_sub_field('title'); ?>
               </div>
               <div class="text-green fs-28 fw-700 mt-20 mb-30">
                <?php the_sub_field('subtitle'); ?>
               </div>
               <div class="fs-18 lh-28">
                <?php the_sub_field('content'); ?>
               </div>
               <div class="">
                 <div class="mt-30 cta-anim">
                   <?php
                   $link = get_sub_field('lien');

                   if( $link ):
                     $link_url = $link['url'];
                     $link_title = $link['title'];
                     ?>
                     <a class="btn-brd-green fw-600" href="<?php echo esc_url($link_url); ?>" ><?php echo esc_html($link_title); ?></a>
                   <?php endif; ?>
                 </div>
               </div>
             </div>
           </div>
           <?php endwhile; ?>
        <?php endif; ?>
       </div>
     </section>
     <?php get_template_part("includes/panel-question"); ?>
   </main>
<?php get_footer(); ?>
