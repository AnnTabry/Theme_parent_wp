<div class="row">

    <div class="col-md-2 mb-2">
        <!-- pour la vignette en mode responsive : je recupere son identifiant-->
        <?php if($thumbnail_html = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail')) : $thumbnail_src = $thumbnail_html['0']; ?>
        <img class="img-responsive img-thumbnail" src="<?php echo $thumbnail_src ?>" alt="">
        <?php endif; ?>
    </div>

    <div class="col-md-8 mb-2">
        <h1>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h1>

        <p>
        <?php 
        //echo ann_give_me_cat(
          //  get_the_category_list(', '),
           // get_the_tag_list('', ', ')
        //); ?>
        </p>

        <?php the_content(); ?>
    </div>

</div><!-- /row -->
