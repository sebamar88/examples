<button style="    position: fixed;
    bottom: 10%;
    background-color: #59B200;
    z-index: 10;
    right: 10%;
    border: 1px solid white;
    padding: 20px;
    border-radius: 50%;
    box-shadow: 10px 10px 33px -9px rgba(0,0,0,0.38);" data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                        <span class="sr-only">Abrir Menú de navegación</span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
     <!--Menu movil-->					
              <div id="menu-a" class="d-flex d-lg-none lebianch-menu-m" style="position: fixed;
right: 20%;
bottom: 20%;
background: #072146;
border-radius: 15px;
z-index:10;
color:white !important">
<!--Menu movil-->					


<?php wp_nav_menu( array(
  'menu' => '',
  'theme_location' => 'header-menu',
  'depth' => 2,
  'container' => 'div',
  'container_class' => 'collapse navbar-collapse menu-lebianch-seo',
  'container_id' => 'navcol-1',
  'menu_class' => 'nav navbar-nav ml-auto menu-lebianch',
  'fallback_cb' => 'header_menu',
  'walker' => new wp_bootstrap_navwalker())
); ?>
</div>

<!--Menu desktop -->

<?php wp_nav_menu( array(
  'menu' => '',
  'theme_location' => 'header-menu',
  'depth' => 2,
  'container' => 'div',
  'container_class' => 'collapse navbar-collapse justify-content-end',
  'container_id' => '',
  'menu_class' => 'nav navbar-nav mx-auto',
  'fallback_cb' => 'header_menu',
  'walker' => new wp_bootstrap_navwalker())
); ?>


</div>
</nav>