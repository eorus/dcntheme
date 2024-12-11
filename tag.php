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
              <h1 class=entry-title><?php echo single_tag_title(); ?></h1>
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

 <!-- Blog Section-->
<section id="blog" class="orusblog">
<div class="container">
    <div class="columns">
          <div class="column col-8 col-lg-8 col-md-6 col-sm-12 entries">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

  <?php get_template_part('loops/term-loop', get_post_format()); ?>

  <?php endwhile; ?>

  <?php
  else :
    get_template_part('loops/404');
  endif;
?>

           <?php bootstrap_pagination(); ?>

      </div>

      <div class="column col-4 col-lg-4 col-md-6 col-sm-12 sidebar">
          <div class="widget-container make-side-sticky">
             <div class="widget-item">
	            <h2 class="widget-title">
	              Search the Site
	            </h2>
                <?php b5st_navbar_search();?>
              </div>

              <?php dynamic_sidebar('orus-taxonomy-widget-area'); ?>
          </div>
      </div>

    </div><!-- row-->
 </div><!-- container-->
</section>

<section class="padme">
   <div class="container pati">
      <div class="orustagbulut">
        <h3>All Tags On The Site</h3>
        <?php wp_tag_cloud('smallest=10&largest=20'); ?>
      </div>
   </div>
</section>

</main>

<?php
  b5st_mainbody_after();
  get_footer();
?>
