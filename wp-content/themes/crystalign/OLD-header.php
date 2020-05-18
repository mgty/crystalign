<!DOCTYPE html> 
 <html> 
     <head> 
         <?php wp_head();?> 
            <meta charset="<?php bloginfo( 'charset' ); ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://fonts.googleapis.com/css2?family=Arima+Madurai:wght@100;200;300;400;500;700;800;900&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">


     </head> 
 <body <?php body_class();?>>
 	<div class="top-nav-img container-fluid">
 			<img 
			class="top-pattern-img" 
			role="banner" 
			src="http://crystalign-chiropractic.local/wp-content/uploads/2020/04/homepage-desktop-master-Blue-Banner.png"	
			>
 	</div>
	<header class="main-nav sticky-top d-none d-sm-none d-md-block">
	    <div class="container-fluid">
	    	<img 
			class="menu-center-img" 
			role="banner" 
			src="http://crystalign-chiropractic.local/wp-content/uploads/2020/04/homepage-desktop-master-LOGO.png"	
			>
	        <?php wp_nav_menu(
	            array(
	            'theme_location' => 'top-menu', #key taken from functions.php
	            'menu_class' => 'top-navigation', #assigns class name for styling

	            )

	        );?>
	    </div>

        
	</header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-md-none">
      <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <img 
            class="mobile-heart" 
            role="banner" 
            src="http://crystalign-chiropractic.local/wp-content/uploads/2020/04/homepage-desktop-master-LOGO-1.png"  
            >
        </button>
            <?php
            wp_nav_menu( array(
                'theme_location'    => 'top-menu',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-center',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
            ?>
    </nav>