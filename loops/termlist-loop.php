<?php
/*
 * Home Page News List Loop
 */
?>

         <div class="column col col-2 col-lg-4 col-md-6 col-sm-12 pati">
              <div class="post-item">
                <?php the_post_thumbnail( 'homepage-thumb', array( 'class' => 'img-responsive s-rounded' )); ?>
                <div>
                  <h6 class="card-title"><a class="btn-link stretched-link text-reset fw-bold" href="<?php the_permalink(); ?>"><?php the_title()?></a></h6>
                  <small class="small text-muted"><?php b5st_post_date(); ?></small>
                </div>
              </div>
        </div>
