<?php get_header(); //je vais chercher mon header.php?>

    <section>
        <div class="container">
            <?php if(have_posts()):  // boucle wordpress : je vérifie s'il y a des résultats,si j'ai des posts je crée le container
            while( have_posts()):  the_post(); // invoque l'iteration de l'article en cours
            
            ?>
            <div class="row">
 
                <div class="col-md-12 mb-2">
                    <h1>
                        <?php the_title(); ?>
                    </h1>
                    <p>Catégorie(s) : <?php the_category(', '); ?>
                    <br><?php the_tags(); ?>
                    <?php 
                    //echo ann_give_me_cat(
                     //   get_the_category_list(', '),
                     //   get_the_tag_list('', ', ')
                    //); ?>
                    </p>
                    <?php the_content(); ?>
                </div>
            </div>
            <!-- /row -->

            <?php endwhile ; ?>

            <div class="row">
                <div class="col-md-12">
                    <nav>
                        <ul class="superTheme-pager d-flex justify-content-between">
                            <li class="list-group-item list-group-item-light"><?php previous_post_link(); ?></li>
                            <li class="list-group-item list-group-item-light"><?php next_post_link();  ?></li>
                        </ul>
                    </nav>
                </div>
            </div> <!-- /row -->

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
    
