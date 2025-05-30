<?php get_header(); ?>
<main role="main" class="main-content main-archive">
  <section class="container-fluid archive-content">
    <div class="container">
      <div class="row mb-50">
        <div class="col-12 pl-0 archive-mission-title">
          <?php
          if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p class="text-gold fs-18 mb-0" id="breadcrumbs">','</p>' );
          }
           ?>
          <h1 class="fw-700 fs-60 mt-0 mb-0 text-white">Nos missions de jeux</h1>
        </div>
      </div>
      <div class="row justify-content-center archive-row-mission">
        <?php
        while ( have_posts() ) :
          the_post();
          ?>
          <div class="apparition-2 col-xl-4 col-lg-4 col-md-6 col-12 mb-15 anim-300 p-relative mission-thumbnail">
            <a href="<?php echo esc_url( get_permalink()); ?>">
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php echo get_the_post_thumbnail(); ?>

                <div class="mission-hover-thumbnail anim-300">
                  <div class="fs-16 category">
    								<?php $term_list = wp_get_post_terms($post->ID, 'taxonomy-missions', array("fields" => "all"));
    								foreach($term_list as $term_single) {?>
    								<span class="fs-15 text-white"><?php echo $term_single->name; ?></span>
    								<?php } ?>
    							</div>
                  <h2 class="fs-30 fw-700 text-white"><?php the_title(); ?></h2>
                  <p class="text-white fs-17 lh-26 mission-thumbnail-content"><?php echo excerpt(16); ?></p>
                </div>
              </article>
            </a>
          </div>
          <?php
          // End the loop.
        endwhile;
        ?>
      </div>
    </div>
  </section>
  <?php get_template_part("includes/panel-question"); ?>
</main>

<?php get_footer(); ?>
