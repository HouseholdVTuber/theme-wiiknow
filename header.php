<!DOCTYPE html>
<html>
    <head>
        <?php wp_head();?>
    </head>
<body <?php body_class();?>>

<header>
    <nav class="navbar fixed-top navbar-expand-md navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php wp_nav_menu(
            array(
                'theme_location' => 'top-menu',
                'depth' => 2, //1 = no dropdowns, 2 = with dropdowns
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'navbarNavAltMarkup',
                'menu_class' => 'navbar-nav mr-auto',
                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new WP_Bootstrap_Navwalker(),
            )
        );?> 
    </nav>
</header>