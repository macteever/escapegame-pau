  <section class="panel-question p-relative o-hidden">
    <div class="container-fluid before-panel">
      <div class="container">
        <div class="row justify-content-center">
          <div clas="col-12 text-center">
            <h2 class="fs-36 uppercase text-white fw-600 text-center"><?php the_field('help_title', 'option'); ?></h2>
            <div class="text-white fs-20 text-center mw-60 mx-auto mt-30">
              <?php the_field('help_content', 'option'); ?>
            </div>
            <div class="d-flex justify-content-center">
              <div class="mt-30 mr-10">
                <?php
                $link = get_field('help_lien1', 'option');

                if( $link ):
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  ?>
                  <a class="btn-brd-white" href="<?php echo esc_url($link_url); ?>" ><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
              </div><div class="mt-30 ml-10">
                <?php
                $link = get_field('help_lien2', 'option');

                if( $link ):
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  ?>
                  <a class="btn-brd-white" href="<?php echo esc_url($link_url); ?>" ><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
