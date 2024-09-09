<div id="logoholder" class="nav-scroll ease-in mb-3 w-100 position-fixed d-flex align-items-center"
    style="z-index: 1000; ">
    <?php /*<img  class='' src="<?php bloginfo('template_directory'); ?>/images/logo/logo.svg" /> */ ?>
    <div id="desktop-logo" class=" desktop-image m-0 pt-2 p-2 z-index-100">

        <a href="<?php echo get_home_url(); ?>">
            <div class="table-container" style="min-height: 1vh">
                <div class="centre-content logo-reveal">

                    <img id="logo-icon" width="80px" class="z-index-100 position-relative"
                        src="<?php bloginfo('template_directory'); ?>/assets/images/logo/embrace-logo-icon.svg" />

                    <img id="logo-text" width="200px" class="position-relative"
                        src="<?php bloginfo('template_directory'); ?>/assets/images/logo/embrace-logo-text.svg" />

                </div>
            </div>

        </a>
    </div>
    <div class="mobile-image m-2 pl-2 pt-1 h-100 z-index-100 position-absolute">
        <a href="<?php echo get_home_url(); ?>">
            <div class="pt-1">
                <img height="50px"
                    src="<?php bloginfo('template_directory'); ?>/assets/images/logo/embrace-logo-icon.svg" />
            </div>
        </a>
    </div>

    <nav id="socialNav" class="d-none justify-content-end navbar navbar-expand-lg navbar-light text-secondary">


        <h2 class="btn btn-circle rounded-circle mt-2 mr-2 mb-1  font-weight-bold text-primary">
            <a aria-label="visit Speech Matters facebook page"
                href="https://www.facebook.com/speechmattersspeechtherapy">
                <img width="20px"
                    src="<?php bloginfo('template_directory'); ?>/assets/images/icons/primary/facebook.svg">
            </a>
        </h2>

        <h2 class="mt-2 mr-2 mb-1 font-weight-bold rounded-circle">
            <a aria-label="visit Speech Matters"
                href="https://instagram.com/speechmattersspeechtherapy?utm_medium=copy_link">
                <img width="20px"
                    src="<?php bloginfo('template_directory'); ?>/assets/images/icons/primary/instagram.svg">
            </a>

        </h2>

    </nav>

    <nav id="desktopNav"
        class="right-0 reveal-children-left position-absolute justify-content-end small-nav navbar navbar-expand-lg rounded navbar-dark bg-light me-3"
        style="clear: both;">

        <?php wp_nav_menu(
        array(
        'theme_location' => 'top-menu',
        'menu_class' => 'nav-list-block list-inline mx-auto justify-content-end h-100 mb-0 text-primary d-flex font-weight-bold'
          )


        ); ?>
    </nav>
    <nav id="mobileNav" class="position-absolute justify-content-end small-nav navbar radius-lg navbar-dark"
        style="clear: both;">
        <div aria-label="Open Page Menu" class="openmenu  btn-transparent rounded-circle text-secondary">
            <img width="20px" src="<?php bloginfo('template_directory'); ?>/assets/images/icons/primary/menu.svg">
        </div>
    </nav>


    <!-- Mobile menu -->
    <div id="menu-top-menu" class="mobile-menu-dropdown">
        <button aria-label="close menu" class="bg-primary btn-circle menu-close-button border-0 z-index-100">
            <img width="20px" src="<?php bloginfo('template_directory'); ?>/assets/images/icons/white/menu.svg"
                alt="Close Page Menu" style="width: 1.53rem;">
            <span class="d-none">close the menu</span>
        </button>
        <div class="mobile-menu-content">
            <nav class="mobile-nav">
                <?php
            wp_nav_menu(array(
                    'theme_location' => 'top-menu',
                    'menu_class' => 'text-light font-weight-bold h-100 d-flex flex-column justify-content-center'
            ));?>
            </nav>

            <div class="mobile-menu-contacts">

            </div>
        </div>
    </div>
</div>
<div id="navTrigger" class="p-2 mt-5 position-absolute" style="top: 50%"></div>
<div id="topLogoTrigger" class="p-2 mt-5 position-absolute" style="top: 50%"></div>