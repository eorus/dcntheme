<?php
/*
 * Üçlü Blok Loop
 */
?>

               <!-- Loop -->
                        <article class="column col col-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="post-img">
                                  <?php the_post_thumbnail( 'sfa-middle', array( 'class' => 'img-responsive' )); ?>
                                </div>
                                <div class="card-body pati">
                                     <div class="card-header">
                                        <h3 class="title"><a class="stretched-link fw-bold" href="<?php the_permalink(); ?>"><?php the_title()?></a></h3>
                                     </div>
                                     <div class="card-subtitle">
                                          <small class="post-date"><?php b5st_post_date(); ?></small>
                                     </div>
                                </div>
                        </article>
