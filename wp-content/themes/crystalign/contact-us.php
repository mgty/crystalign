<?php 
/*
    Template Name: Contact Us
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
                <p class="page-body-title">Contact Crystalign Chiropractic</p>
            </div>
    </div>
</div>



<div class="container">
    <div class="location-row row">
            <div class="col-md-6 col-sm-12">
                <div class="page-body-text"><?php the_field('body_text');?></div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div style="width: 100%">
                    <iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=218%20Patton%20Ave%2CAsheville%2C%20NC%2028801+(Crystalign%20Chiropractic)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                        <a href="https://www.maps.ie/draw-radius-circle-map/">km radius map</a>
                    </iframe>
                </div><br />
            </div>
    </div>

    <img class="" alt="decoration" src="/wp-content/uploads/2020/04/homepage-desktop-master-Lines-copy.png" />                

    <div class="mission-text contact-row row">
            <div class="col-12">
                <p class="page-body-subtitle">Feedback Form</p>
                <form action="formtoemailpro.php" method="post">
                <p class="bold-subtext">
                <label>Name:<br />
                <input name="name" type="text" id="name" />
                </label></p>
                <p class="bold-subtext">
                <label>Email Address:<br />
                <input name="email" type="text" id="email" />
                </label></p>
                <p class="bold-subtext">
                <label>Telephone:<br />
                <input name="phone" type="text" id="phone" />
                </label></p>
                <p class="bold-subtext">
                <label>Comments:<br />
                <textarea name="comments" id="comments" cols="30" rows="5"></textarea>
                </label></p>
                <p>
                <div class="g-recaptcha" data-sitekey="6LfOwO0UAAAAAIAQowaH-asuABxX_pZNYp9jNFEt"></div></p>
                <p>
                <input type="submit" name="button" id="button" value="Submit" />
                <input type="reset" name="reset" id="reset" value="Reset" />
                </p>
                </form>
            </div>
    </div>
    <img class="" alt="decoration" src="/wp-content/uploads/2020/04/homepage-desktop-master-Lines-1.png" />
</div>



<?php get_footer();?>