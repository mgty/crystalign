<?php get_header();?>
<div class="container">
    <h1 class="title"><?php the_title();?></h1>
    <div class="row">
            <div class="col">
                <?php if (have_posts()) : while(have_posts()) : the_post();?>

                <?php the_content();?>

                <?php endwhile; endif;?>
            </div>
    </div>
</div>
<?php get_footer();?>