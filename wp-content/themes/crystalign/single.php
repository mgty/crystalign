<?php get_header();?>

<?php /* The loop */ ?>


<div class="header-img-container container-fluid">
	<img 
	class="header-img" 
	role="banner" 
	src="<?php echo get_field('header_image')['url'];?>"	
	>
</div>


<div class="blog-container container">
    <div class="row">
        <div class="col">
            <?php while ( have_posts() ) : the_post(); ?>
		        <div class="main-post-div">
		        	<div class="single-page-post-heading">
		        		<p class="blog-title"><?php the_title();?></p>
		        	</div>

		        	<div class="content-here">
		        		<p class="blog-author"><?php the_date(); ?></p>
		        		<p class="blog-title"><?php the_content(); ?></p>
		        		<p class="blog-author">by <?php the_author(); ?></p>
		        	</div>
		        </div>
		    <?php endwhile; ?>
        </div>
    </div>
</div>





<?php get_footer();?>