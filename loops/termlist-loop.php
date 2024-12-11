<?php
/*
 * Home Page News List Loop
 */
?>



        <div class="columns p-2 m-2">
            <div class="column hide-md col col-md-6 col-sm-12">
               <div class="card-bg-img"><?php the_post_thumbnail( 'homepage-thumb', array( 'class' => 'img-responsive s-rounded' )); ?></div>
            </div>
            <div class="column col-5 col-md-6 col-sm-12">
              <div class="card-body">
                <small class="small text-muted"><?php b5st_post_date(); ?></small>
                <h6 class="card-title"><a class="btn-link stretched-link text-reset fw-bold" href="<?php the_permalink(); ?>"><?php the_title()?></a></h6>
              </div>
            </div>
        </div>
