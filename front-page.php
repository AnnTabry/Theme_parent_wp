<?php get_header(); //je vais chercher mon header.php?>

    <section>
        <div class="container">
            <?php if(have_posts()):  // boucle wordpress : je vérifie s'il y a des résultats,si j'ai des posts je crée le container
            while( have_posts()):  the_post(); // invoque l'iteration de l'article en cours?>
            <div class="row">
                <div class="offset-md-1 col-md-10 text-center">
                    <?php the_content(); ?>
                </div>
            </div>

            <?php endwhile ; ?>

            <?php else: ?>

            <div class="row">
                <div class="col-md-12">
                    <p>Aucun résultat :/ </p>
                </div>
            </div>


            <?php endif;  ?>
        </div>
        <!-- /container -->
    </section>

<?php get_footer(); ?>

