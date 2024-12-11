<?php
/*
 * Home Page Term Loop
 */
?>
          <div class="col card shadow border-0 pati">
              <div class="columns">
                <div class="column hide-md col-4 col-lg-6 col-md-12 col-sm-12">
                  <div class="card-image"><?php the_post_thumbnail( 'sfa-page', array( 'class' => 'img-responsize s-rounded' )); ?></div>
                </div>
                <div class="column col-8 col-lg-6 col-md-12 col-sm-12">
                  <div class="card-body">
                    <span class="small text-muted"><?php b5st_post_date(); ?></span>
                    <h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h3>
                     <p class="card-text"><?php the_excerpt()?></p>
                  </div>
               </div>
              </div>
          </div><!-- End Card Item -->
