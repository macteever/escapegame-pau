<?php /* Template Name: Home */
   get_header(); ?>
   <main role="main" class="home-main">
     <section id="home-top" class="container-fluid" style="background: -webkit-linear-gradient(321deg, rgba(71,71,71,0.58) 0%, rgba(71,71,71,0.58) 100%);
     	background: -o-linear-gradient(rgba(71,71,71,0.58) 0%, rgba(71,71,71,0.58) 100%);
     	background: linear-gradient(rgba(71,71,71,0.32) 0%, rgba(71,71,71,0.58) 100%),
      url(<?php the_field('home_top_bkg'); ?>)">
       <div class="container">
         <div class="row justify-content-center w-100">
           <?php if ( have_rows('home_title') ): ?>
             <?php while ( have_rows('home_title') ) : the_row(); ?>
               <div class="col-xl-10 col-lg-10 col-12 home-title text-center">
                 <div class="text-white uppercase fw-500 fs-42 apparition-2"><?php the_sub_field('title'); ?></div>
                 <div class="text-white fs-20 ls-4 mw-60 mx-auto mt-20">
                   <?php the_sub_field('subtitle'); ?>
                 </div>
               </div>
             <?php endwhile; ?>
           <?php endif; ?>
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
     <section id="home-present" class="container-fluid">
       <div class="container">
         <div class="row justify-content-center">
           <?php if ( have_rows('home_present') ): ?>
             <?php while ( have_rows('home_present') ) : the_row(); ?>
               <div class="col-xl-7 col-lg-7 col-12 home-present text-center">
                 <div class="uppercase fw-500 fs-15 ls-3 after-wave-white"><?php the_sub_field('title'); ?></div>
                 <div><?php the_sub_field('subtitle'); ?></div>
                 <div class="fs-17 mt-50">
                   <?php the_sub_field('content'); ?>
                 </div>
               </div>
             <?php endwhile; ?>
           <?php endif; ?>
         </div>
       </div>
     </section>
     <section id="home-about" class="container-fluid">
       <div class="container">
         <?php if ( have_rows('home_about') ): ?>
           <?php while ( have_rows('home_about') ) : the_row(); ?>
             <div class="row justify-content-center">
               <div class="uppercase fw-500 fs-15 ls-3 after-wave-brown fw-500"><?php the_sub_field('title'); ?></div>
             </div>
             <div class="row justify-content-center align-items-center home-about">
               <div class="col-xl-4 col-lg-4 col-md-6 col-12 pr-30">
                 <?php
                   $image = get_sub_field('img');
                   if ( !empty($image) ): ?>
                   <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                 <?php endif; ?>
               </div>
               <div class="col-xl-5 col-lg-5 col-md-6 col-12 pl-30">
                 <div class="fs-28 ls-3 fw-500"><?php the_sub_field('subtitle'); ?></div>
                 <div class="fs-17 lh-28 mb-50 mt-3 0">
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
     <section id="home-temoignages" class="container-fluid" style="background: url(<?php the_field('home_tem_bkg'); ?>)">
       <div class="container">
         <div class="row justify-content-center">
           <div class="col-xl-10 col-lg-10 col-12 home-tem text-center p-relative">
             <div class="uppercase ls-3 fs-15 after-wave-brown fw-500"><?php the_field('title_tem'); ?></div>
             <div class="home-tem-prev p-absolute zi-9999">
  				     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-left-hypnose-hypnotherapie-jonzac.svg" alt="Endodontie bordeaux">
      			 </div>
             <div class="home-tem-slider mw-80 mx-auto">
               <?php if ( have_rows('home_temoignages') ): ?>
                 <?php while ( have_rows('home_temoignages') ) : the_row(); ?>
                   <div class="fs-16 lh-26 mw-80 mx-auto fw-300 ls-1">
                     <?php the_sub_field('content'); ?>
                   </div>
                 <?php endwhile; ?>
               <?php endif; ?>
             </div>
             <div class="home-tem-next p-absolute zi-9999">
      				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right-webmaster-bordeaux-poitiers-nicolas-metivier.svg" alt="Endodontie bordeaux">
      			</div>
           </div>
         </div>
       </div>
     </section>
     <section id="home-blog" class="container-fluid">
       <div class="container">
        <div class="row justify-content-center">
          <h2 class="uppercase fs-15 fw-500 ls-3 after-wave-brown">Les dernières actualités</h2>
        </div>
        <div class="row justify-content-center">
          <?php $args = array(
            'posts_per_page'   => 2,
            'offset'           => 0,
            'orderby'          => 'date',
            'order'            => 'DESC',
            'include'          => '', 	'exclude'          => '',
            'post_type'        => 'post', 	'post_mime_type'   => '',
            'post_status'      => 'publish',
            'suppress_filters' => true
          );

          $myposts = get_posts( $args );

          foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        <!-- 	<div>  -->
        <div class="col-xl-4 col-lg-4 col-md-6 col-12">
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
              <?php echo get_the_post_thumbnail( $post->ID, 'full ' ); ?>
              <div class="home-post text-center">
                <?php
                $categories = get_the_category();
                $category_name = $categories[0]->cat_name;
                ?>
                <span class="fs-13 uppercase ls-2 mt-20"><?php echo $category_name ?></span>
                <h3 class="fs-18 ls-3 text-center mt-20 mb-20"><?php the_title(); ?></h3>
                <a class="fs-12 uppercase ls-3 after-wave-brown" href="<?php the_permalink(); ?>">Lire l'article</a>
              </div>
          </a>
        </div>
        <!-- 	</div> -->
          <?php
          endforeach;
          wp_reset_postdata();
          ?>
        </div>
        <div class="row justify-content-center mt-50">
            <a class="btn-grey" href="#">Voir les articles</a>
          </div>
        </div>
       </div>
     </section>
   </main>
<?php get_footer(); ?>
