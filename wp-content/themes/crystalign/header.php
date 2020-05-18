<?php
    $baseurl = 'https://gwd-test.com/crystalign';
    $page_title = ($page_title != '' ? $page_title : 'Crytalign Chiropractic | Energywork and Chiro | Asheville NC');
    $meta_description= ($meta_description != '' ? $meta_description : 'At Crystalign Chiropractic, we are excited to help you do what you love to do, pain free. Both of our doctors are trained in many forms of adjusting.');
    $meta_content= ($meta_content != '' ? $meta_content : 'chiro, chiropractic, asheville, craniosacral, cranio, sacral, nutrition, functional medicine');
    
?>

<!DOCTYPE html> 
 <html lang="en"> 
     <head> 
         <?php wp_head();?> 
            <meta charset="<?php bloginfo( 'charset' ); ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://fonts.googleapis.com/css2?family=Arima+Madurai:wght@100;200;300;400;500;700;800;900&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
            <script type="text/javascript" src='https://www.google.com/recaptcha/api.js'></script>



     </head> 
 <body <?php body_class();?>>
 	
	<header class="sticky-top">
        <div class="top-nav-img container-fluid sticky-top">
            <img 
            class="top-pattern-img" 
            alt="hero image"
            src="/wp-content/uploads/2020/04/homepage-desktop-master-Blue-Banner.png"   
            >
        </div>  
	    <!-- <div class="container-fluid">
	    	<img 
			class="menu-center-img" 
			role="banner" 
			src="http://localhost:8888/crystalign/wp-content/uploads/2020/04/homepage-desktop-master-LOGO.png"	
			>
	        <?php wp_nav_menu(
	            array(
	            'theme_location' => 'top-menu', #key taken from functions.php
	            'menu_class' => 'top-navigation', #assigns class name for styling

	            )

	        );?>
	    </div> -->
        <div class="main-nav ">
            
        
        <img 
            class="menu-center-img d-md-none d-lg-block" 
            alt="logo"
            src="/wp-content/uploads/2020/04/favicon2.png"  
            >
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <img 
                class="mobile-heart d-md-block" 
                alt="heart logo"
                src="/wp-content/uploads/2020/04/favicon2.png"  
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
            </div>
	</header>
    <img 
    class="crystalign-chiropractic" 
    alt="crystalign chiropractic image"
    src="/wp-content/uploads/2020/04/homepage-desktop-master-Footer-Logo-copy-e1588020448747.png"  
    >
    