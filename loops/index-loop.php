<?php
/*
 * The Default Loop (used by index.php, category.php, tag.php, archive.php and author.php)
 * =================================================================
 * If you require only post excerpts to be shown in index and category pages,
 * use the [---more---] block within blog posts.
 */
?>
 <!-- Blog Section-->

<section class="stitle p-0 text-info mb-2">
<div class="container">
<div class="columns bg-secondary card padme m-0">
        <div class="column col-12 col-sm-12 card-header text-center m-2 p-2">

          <div class="card-title h1">
              <h1 class=entry-title><?php single_post_title(); ?></h1>
          </div>

          <div class=card-subtitle>
             <div class="breadcrumb card-subtitle text-tiny">
                    <?php if (function_exists('dimox_breadcrumbs')) { ?>
                    <?php dimox_breadcrumbs(); ?>
                    <?php } ?>
             </div>
         </div>
    </div>
</div>
</section>

<section id="blog" class="sfablog">
<div class="container">
    <div class="columns pati">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

  <?php get_template_part('loops/index-post', get_post_format()); ?>

  <?php endwhile; ?>

  <?php
  else :
    get_template_part('loops/404');
  endif;
?>
    </div><!-- row-->

  <?php bootstrap_pagination(); ?>

 </div><!-- container-->
</section>
