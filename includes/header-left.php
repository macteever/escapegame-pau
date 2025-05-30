<div class="row align-items-center justify-content-between menu-section anim-300 ml-15 mr-15 p-relative">
    <div class="col-auto anim-300 container-logo-menu pl-15 p-relative">
      <div class="p-relative">
        <a class="anim-300 d-flex flex-column justify-content-center align-items-center" href="<?php echo home_url(); ?>">
          <?php // include 'logo.php'; ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.svg" alt="Escape Game Bordeaux">
        </a>
      </div>
    </div>
    <div class="col-auto ml-auto anim-300 large-menu anim-300">
      <nav class="d-flex">
         <?php  customTheme_nav(); ?>
         <div id="menu-btn">
            <button>
               <span></span>
               <span></span>
               <span></span>
            </button>
            <!-- <span class="ml-10 poppins fs-13 ">MENU</span> -->
         </div>
      </nav>
        <!-- /nav -->
    </div>
    <div class="col-auto text-right">
      <div class="">
        <a class="btn-gold" href="<?php echo home_url() . '/reserver'; ?>">Réserver</a>
      </div>

    </div>
</div>
