<?php get_header();?>

<div class="front-body">

<div class="container-fluid">
	<div class="row">
        <div class="col">
        </div>
    </div>
</div>

<div class="header-img-container container-fluid">
    <img 
	class="header-img" 
	alt="header image"
	src="<?php echo get_field('header_upper_image')['url'];?>"	
	>
</div>




<div class="container">
    <div class="row">
            <div class="col">

                <div class="vertical-center">
                    <?php 
                    $link = get_field('appointment_button');
                    if( $link ): ?>
                        <form action="<?php echo esc_url( $link ); ?>">
                            <button class="appointment-button btn button">Schedule Appointment</button>
                        </form>
                    <?php endif; ?>

                </div>


                <div><p class="accent-mission-title">Our Mission</p></div>

                <img class="" alt="decoration" src="/wp-content/uploads/2020/04/homepage-desktop-master-Lines-copy.png" />
                <div class="mission-text"><?php the_field('mission_text');?></div>
                <img class="mission-decoration" alt="decoration" src="/wp-content/uploads/2020/04/homepage-desktop-master-Lines-1.png" />

                <div class="body-text"><?php the_field('body_text');?></div>
            </div>
    </div>
</div>



<div class="services-section container">
    <?php $services = get_field('services');?>
    <div class="row">
        <div class="service-box col-md-6">

            <a href="<?php echo esc_url( $services['service_link_1']['url'] ); ?>">
                <img class="service-image" alt="service image" src="<?php echo esc_url( $services['service_image_1']['url'] ); ?>" />
             </a>

            <p class="service-title"><?php echo $services['service_title_1']; ?></p>
            <p class="service-text"><?php echo $services['service_text_1']; ?></p>
       

        </div>
        <div class="service-box col-md-6">
            <a href="<?php echo esc_url( $services['service_link_2']['url'] ); ?>">
                <img class="service-image" alt="service image" src="<?php echo esc_url( $services['service_image_2']['url'] ); ?>" />
             </a>

            <p class="service-title"><?php echo $services['service_title_2']; ?></p>
            <p class="service-text"><?php echo $services['service_text_2']; ?></p>

        </div>
    </div>

    <div class="row">
        <div class="service-box col-md-6">
            <a href="<?php echo esc_url( $services['service_link_3']['url'] ); ?>">
                <img class="service-image" alt="service image" src="<?php echo esc_url( $services['service_image_3']['url'] ); ?>" />
             </a>

            <p class="service-title"><?php echo $services['service_title_3']; ?></p>
            <p class="service-text"><?php echo $services['service_text_3']; ?></p>

        </div>
        <div class="service-box col-md-6">
            <a href="<?php echo esc_url( $services['service_link_4']['url'] ); ?>">
                <img class="service-image" alt="service image" src="<?php echo esc_url( $services['service_image_4']['url'] ); ?>" />
             </a>    
            <p class="service-title"><?php echo $services['service_title_4']; ?></p>
            <p class="service-text"><?php echo $services['service_text_4']; ?></p>

        </div>
    </div>
</div>



<div class="testimonial-container container-fluid">
    <div class="testimonial-row row">
        <div class="col-md-6 col-sm-12">
            <img 
            class="testimonial-image" 
            alt="testimonial image"  
            src="<?php echo get_field('testimonial_image')['url'];?>"   
            >
        </div>

        <div class="col-md-6 col-sm-12">
            <div class="testimonial-text"><?php the_field('testimonial_text');?></div>
        </div>

    </div>
</div>
</div>

<?php get_footer();?>