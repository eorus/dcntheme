<?php
/*
 * Home Page News List Loop
 */
?>

          <!-- News item-->
                <div class="my-2">
                  <small class="small text-muted"><?php b5st_post_date(); ?></small>
                   <a class="link-dark" href="<?php the_permalink(); ?>"><h5><?php the_title()?></h5></a>
                </div>
