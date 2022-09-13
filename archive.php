<?php get_header();?>

<div class="container pt-4 pb-5">
    <section class="row">

        <div class="col-lg-9 col-md-8 order-last order-md-first order-lg-first pr-4">
            <h1><?php single_cat_title();?></h1>

            <?php if (have_posts()) : while(have_posts()) : the_post();?>
                <div class="card mb-4">
                    <div class="card-body">
                        <?php if(has_post_thumbnail()):?>
                            <img src="<?php the_post_thumbnail_url('smallest');?>" class="img-fluid">
                        <?php endif;?>
                        <h3><?php the_title();?></h3>
                        <?php the_excerpt();?>
                        <a href="<?php the_permalink();?>" class="btn btn-success">Read More</a>
                    </div>
                </div>
            <?php endwhile; endif;?>
        </div>
        <div class="col-lg-3 col-md-4 order-first order-md-last order-lg-last pl-4 pr-2">
            <?php if(is_active_sidebar('page-sidebar') ):?>
                <?php get_sidebar('page');?>
            <?php endif;?>
        </div>
    <section class="row">
</div>

<?php get_footer();?>