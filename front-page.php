<?php get_header();?>

<div class="container pt-5 pb-5">
    <section class="row">
        <div class="col-lg-9">
            <h1><?php the_title();?></h1>

            <?php if (have_posts()) : while(have_posts()) : the_post();?>
                <?php the_content();?>
            <?php endwhile; endif;?>
        </div>
        <div class="col-lg-3">
                <?php if(is_active_sidebar('page-sidebar') ):?>
                    <?php get_sidebar('page');?>
                <?php endif;?>
        </div>
    </section>
</div>

<?php get_footer();?>