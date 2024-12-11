<?php
/*
 * Üçlü Blok Loop
 */
?>

               <!-- Loop -->
                        <article class="column col col-md-6 col-sm-12">
                                <div class="card-image">
                                  <?php the_post_thumbnail( 'sfa-middle', array( 'class' => 'img-responsive' )); ?>
                                </div>
                                    <div class="card-header p-0 my-2">
                                     <a class="text-decoration-none link-dark stretched-link" href="<?php the_permalink(); ?>"><h3 class="card-title h5 mb-2"><?php the_title()?></h5></a>
                                    </div>
                                     <div class="card-footer mb-2">
                                          <small class="text-muted"><?php b5st_post_date(); ?></small>
                                    </div>
                        </article>
              <!-- /loopend -->
