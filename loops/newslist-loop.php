<?php
/*
 * Home Page News List Loop
 */
?>

          <!-- News item-->
                <div class="my-2">
                  <div class="small text-muted"><?php b5st_post_date(); ?></div>
                   <a class="link-dark" href="<?php the_permalink(); ?>"><h3><?php the_title()?></h3></a>
                </div>
