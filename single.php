<?php get_header();?>

<div class="container pt-3 pb-5 pr-1 pl-1">
    <section class="row">
        
        <div class="col-lg-9 col-md-8 order-last order-md-first order-lg-first pl-4 pr-2">    
            <h1><?php the_title();?></h1>

            <?php if(has_post_thumbnail()):?>
                <img src="<?php the_post_thumbnail_url('largest');?>" class="img-fluid">
            <?php endif;?>

            <?php if (have_posts()) : while(have_posts()) : the_post();?>
                <?php the_content();?>
            <?php endwhile; endif;?>
        </div>
        <div class="col-lg-3 col-md-4 order-first order-md-last order-lg-last pl-4 pr-2">
        
            <?php if(is_active_sidebar('page-sidebar') ):?>
                <?php get_sidebar('page');?>
            <?php endif;?>
        </div>
    </section>
    <section class="row">
        <?php comment_form();?>
    </section>
</div>

<?php get_footer();?>