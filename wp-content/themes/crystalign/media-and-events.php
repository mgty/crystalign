<?php 
/*
    Template Name: Media & Events
*/

get_header();?>


<div class="header-img-container">
	<img 
	class="header-img" 
	role="banner" 
	src="<?php echo get_field('header_image')['url'];?>"	
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
                <p class="page-body-title"><?php the_title();?></p>
            </div>
    </div>
</div>


<div class="container">
    <div class="row">
            <div class="page-body-text"><?php the_field('body_text');?></div>
    </div>
</div>


<?php get_footer();?>