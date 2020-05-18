<?php get_header();?>

<div class="header-img-container container-fluid">
	<img 
	class="header-img" 
	role="banner" 
	src="/wp-content/uploads/2020/04/blog-page.jpg"	
	>
	<hr class="horizontal-line">

</div>

<div class="container">
    <div class="row">
            <div class="col">

                <div class="vertical-center">
                    <form action="http://crystalignchiropractic.fullslate.com/">
                        <button class="appointment-button btn button">Schedule Appointment</button>
                    </form>
                </div>
                <p class="page-body-title">Blog</p>
                <div id="primary" class="content-area">
					<main id="main" class="site-main">

					<?php
					if ( have_posts() ) {

						// Load posts loop.
						while ( have_posts() ) {
							the_post();
							get_template_part( 'template-parts/content/content' );
						}

						// Previous/next page navigation.
						//crystalign_the_posts_navigation();

					} else {

						// If no content, include the "No posts found" template.
						get_template_part( 'template-parts/content/content', 'none' );

					}
					?>

					</main><!-- .site-main -->
				</div><!-- .content-area -->
            </div>
    </div>
</div>
