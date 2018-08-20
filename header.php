<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="site en ligne" />
    <!--<title>Mon site en ligne</title>-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <!--je dis à wp où injecter ma feuille de style -->
    <?php wp_head(); ?>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-2">
            <a class="navbar-brand" href="#"><img src="screenshot.png" width="30" height="30" class="d-inline-block align-top" alt="">Chez Pupuce</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php
            // je fais mon menu avec bootstrap :
            wp_nav_menu(array(
                'menu'              => 'top-menu',
                'theme_location'    => 'primary',
                'depth'             =>  2,
                'container'         => 'div', 
                'container_class'   => 'navbar-collapse collapse justify-content-end',
                'container_id'      => 'navbar',
                'menu_class'        => 'navbar-nav nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker()
            )
            );
            ?>

                </div>
        </nav>
    </header>

    <div class="container">
<!--        <div class="jumbotron">
            <h1 class="text-center">Bienvenue sur ma boutique en ligne !</h1>
        </div>
        <div class="row"> -->
        </div>        <!-- /row -->
    </div>            <!-- /container -->