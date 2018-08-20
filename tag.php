<?php get_header(); //je vais chercher mon header.php?>

    <section>
        <div class="container">

        <div class="row">
            <div class="col-md-12">
                <p class="lead">Liste des articles avec l'étiquette : <?php single_tag_title(''); ?></p>
            </div>
        </div>



            <?php if(have_posts()):  // boucle wordpress : je vérifie s'il y a des résultats,si j'ai des posts je crée le container
            while( have_posts()):  the_post(); // invoque l'iteration de l'article en cours
           
            get_template_part('content');

             endwhile ; ?>

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

