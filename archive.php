<?php
  get_header();
  b5st_mainbody_before();
?>

<main id="site-main">
  <?php b5st_mainbody_start(); ?>

<section class="stitle p-0 text-info mb-2">
<div class="container">
<div class="columns bg-secondary card padme m-0">
        <div class="column col-12 col-sm-12 card-header text-center m-2 p-2">

          <div class="card-title h1">
              <h1 class=entry-title><?php echo the_archive_title(); ?></h1>
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

<?php get_template_part('loops/index-loop'); ?>

  <?php b5st_mainbody_end(); ?>

<section class="bg-light pb-5">
   <div class="container pb-5">
      <div class="acevtagbulut">
        <h3>All Tags</h3>
        <?php wp_tag_cloud('smallest=10&largest=20'); ?>
      </div>
   </div>
</section>

 </main>

<?php
  b5st_mainbody_after();
  get_footer();
?>
