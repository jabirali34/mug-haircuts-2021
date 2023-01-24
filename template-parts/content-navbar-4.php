<header class="site-header fixed <?php if(is_front_page()){ echo 'home-page'; } ?>">
  <div id="top-nav" class="top-nav">
    <nav class="navbar fullwidth" role="navigation" style="min-height:96px;">
      <div class="container">
        <div class="row row-navbar m-0" style="display:flex; justify-content:space-between; align-items:center;">
          <div class="navbar-header full-width">

          </div>
          <div class="nav-open float-right">
            <button id="open-nav" type="button" class="btn btn-navbar btn-menu">
              <span class="lines-circle">
                <span class="line-1"></span>
                <span class="line-2"></span>
                <span class="line-3"></span>
              </span>
            </button>
          </div>
          <div class="nav-collapse collapse middle" style="">
            <div class="nav-top">
                ul#navigation-top>li
            <a class="brand" href="<?php echo home_url(); ?>">
              <?php
                $logo = get_field('company_logo', 'options');
                $url = $logo['url'];
                $alt = $logo['alt'];

                echo '<img src="'.$url.'" alt="'.$alt.'">';
              ?>
            </a>
              <?php
                $args = array(
                  'menu' => 'main-menu',
                  'menu_class' => 'nav',
                  'menu_id' => 'navigation-top',
                  'container' => false,
                  'theme_location' => 'primary'
                );
                wp_nav_menu($args);
              ?>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>
</header>