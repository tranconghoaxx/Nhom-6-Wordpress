<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <div class="container">
        <header class="site-header">
            <div class="top-header">


            <div class="left">
                <?php
       if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
       }
            ?>
            </div>

            <div class="right">
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                <h4><?php bloginfo( 'description' ); ?></h4>
                <div class="header-search">
                    <?php get_search_form(); ?>
                </div>

            </div>
            </div>
            <div class="clear"></div>
            <nav class="navigation-menu">
                <?php $args = [ 'theme_location' => 'primary' ]; ?>
                <?php wp_nav_menu( $args ) ?>
            </nav>
        </header>
        <?php if(is_page( 'about-us' )) : ?>
        <h3>Thanks for visiting our page!</h3>
        <?php endif ?>