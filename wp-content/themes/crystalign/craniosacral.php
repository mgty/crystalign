<?php 
/*
    Template Name: Craniosacral
*/

get_header();?>
<div class="header-img-container container-fluid">
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
                <div class="page-body-text"><?php the_field('body_text');?></div>
            </div>
    </div>
</div>






<div class="testimonial-container container-fluid">
    <div class="testimonial-row row">
        <div class="col-md-6 col-sm-12">
            <img 
            class="testimonial-image" 
            role="banner" 
            src="<?php echo get_field('testimonial_image')['url'];?>"   
            >
        </div>

        <div class="testimonial-col col-md-6 col-sm-12">
            <div class="testimonial-text"><?php the_field('testimonial_text');?></div>
        </div>
    </div>
</div>


<?php get_footer();?>