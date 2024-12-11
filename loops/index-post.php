<?php
/*
 * The Index Post (or excerpt)
 * ===========================
 * Used by index.php, category.php and author.php
 */
?>

      <div class="column col-3 col-lg-3 col-md-6 col-sm-12 pati">
             <article role="article" id="post_<?php the_ID()?>" <?php post_class("card h-100 border-0 shadow entry"); ?>>
                 <?php the_post_thumbnail( 'sfa-middle', array( 'class' => 'img-responsive' )); ?>

                <div class="card-body">
                   <header>
                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>
                   </header>
                  <p>
                  <?php the_excerpt(); ?>
                  </p>
               </div>
              </article>
      </div>
