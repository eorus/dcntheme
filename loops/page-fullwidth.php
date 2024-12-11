<?php
/**
 * Template Name: Page Full Width Template
 * Template Post Type: post, page
 *
 * Description: A custom template for displaying a fullwidth layout with no sidebar.
 *
 * @package ORUS_BootStrap_Theme
 */
?>
<?php
  get_header();
  b5st_mainbody_before();
?>
<section class="stitle p-0 text-info mb-2">
<div class="container">
<div class="columns bg-secondary card padme m-0">
        <div class="column col-12 col-sm-12 card-header text-center m-2 p-2">

          <div class="card-title h1">
              <h1 class=entry-title><?php the_title()?></h1>
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

<main id="site-main">
    <section class="py-2">
      <div class="container">
        <div class="columns gy-5">
<div class="column col-12">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article role="article" id="post_<?php the_ID()?>" <?php post_class("col-10 col-mx-auto mb-5")?>>
    <section class="pb-5 entry-content">
      <?php the_content()?>
      <?php wp_link_pages(); ?>
    </section>
  </article>
<?php
  endwhile;
  else :
    get_template_part('loops/404');
  endif;
?>

        </div>
        </div>
      </div>
    </section>

</main>

<?php
  b5st_mainbody_after();
  get_footer();
?>
