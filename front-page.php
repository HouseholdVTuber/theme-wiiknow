<?php get_header();?>

<div class="container pt-3 pb-5 pr-1 pl-1">
    <section class="row">
        <div class="col-lg-9 col-md-8 order-last order-md-first order-lg-first pl-4 pr-2">
            <h2><?php the_title();?></h2>

            <?php if (have_posts()) : while(have_posts()) : the_post();?>
                <?php the_content();?>
            <?php endwhile; endif;?>

            <!--query for recent posts-->
            <?php 
                $the_query = new WP_Query( array(
                    'category_name' => 'blog',
                    'posts_per_page' => 15
                ));
            ?>
            <?php if ($the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post();?>
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
    </section>
</div>

<?php get_footer();?>