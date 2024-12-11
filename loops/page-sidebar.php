<?php
/*
 * The Page Content Loop
 */
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

<div class="container grid-xl">
  <div class="columns padme p-0">

<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <div class="column col-8 col-lg-8 col-md-6 col-sm-12">
  <article role="article" id="post_<?php the_ID()?>" <?php post_class("mb-5")?>>
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

      <div class="column col-4 col-md-6 col-sm-12 sidebar">
          <div class="widget-container make-side-sticky">
            <div class="widget-item">
          	  <h2 class="widget-title">Search the Site</h2>
                <?php b5st_navbar_search();?>
             </div>
             <div class="divider"></div>
            <?php dynamic_sidebar('orus-taxonomy-widget-area'); ?>
         </div>
     </div>
 </div>


    </div>
 </div>
