<?php 
/*
    Template Name: Meet The Staff
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
                <p class="page-body-title">Meet The Staff</p>
            </div>
    </div>
</div>

<img class="" alt="decoration" src="/wp-content/uploads/2020/04/homepage-desktop-master-Lines-copy.png" />   
<div class="staff-container container">
    <div class="row">
        <div class="col-12">
            <div class="staff-row row">
                <div class="staff-col col-lg-4 col-md-12">
                    <img 
                    class="staff-image" 
                    role="banner" 
                    src="<?php echo get_field('staff_1_image')['url'];?>"   
                    >
                </div>
                <div class="staff-col col-lg-8 col-md-12">
                    <div class="staff-text"><?php the_field('staff_1_text');?></div>
                </div>
            </div>

            <div class="staff-row row">
                <div class="col-12">
                    <div class="staff-more-text"><?php the_field('staff_1_more_text');?></div>
                </div>
            </div>
        </div>
    </div>
</div>


<img class="" alt="decoration" src="<?php echo $baseurl;?>/wp-content/uploads/2020/04/homepage-desktop-master-Lines-copy.png" />   
<div class="staff-container container">
    <div class="row">
        <div class="col-12">
            <div class="staff-row row">
                
                <div class="staff-col col-lg-8 col-md-12">
                    <div class="staff-text"><?php the_field('staff_2_text');?></div>
                </div>

                <div class="staff-col col-lg-4 col-md-12">
                    <img 
                    class="staff-image" 
                    role="banner" 
                    src="<?php echo get_field('staff_2_image')['url'];?>"   
                    >
                </div>
            </div>

            <div class="staff-row row">
                <div class="col-12">
                    <div class="staff-more-text"><?php the_field('staff_2_more_text');?></div>
                </div>
            </div>
        </div>
    </div>
</div>

<img class="" alt="decoration" src="/wp-content/uploads/2020/04/homepage-desktop-master-Lines-copy.png" />   
<div class="staff-container container">
    <div class="row">
        <div class="col-12">
            <div class="staff-row row">
                <div class="staff-col col-lg-4 col-md-12">
                    <img 
                    class="staff-image" 
                    role="banner" 
                    src="<?php echo get_field('staff_3_image')['url'];?>"   
                    >
                </div>
                <div class="staff-col col-lg-8 col-md-12">
                    <div class="staff-text"><?php the_field('staff_3_text');?></div>
                </div>
            </div>

            <div class="staff-row row">
                <div class="col-12">
                    <div class="staff-more-text"><?php the_field('staff_3_more_text');?></div>
                </div>
            </div>
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