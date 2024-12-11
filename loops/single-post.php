<?php
/*
 * The Single Post
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

<section id="blog" class="p-0 my-2">

<div class="container grid-xl">
  <div class="columns padme p-0">
    <div class="column col-8 col-lg-8 col-md-6 col-sm-12">

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article role="article" id="post_<?php the_ID()?>" <?php post_class("entry-content")?>>

    <section class="container text-center p-0 hide-md">
     <?php the_post_thumbnail( 'sfa-page', array( 'class' => 'img-fluid card-img-top' )); ?>
    </section>

    <?php wp_link_pages(); ?>

 <section class="long-read p-2 my-2">
   <?php the_content(); ?>
</section>

    <?php wp_link_pages(); ?>
  </article>
<div class="text-small my-5">

    <i class="fa fa-calendar px-1"></i>
    <time datetime=2020-11-05><?php b5st_post_date(); ?></time> <span class="px-2">•</span>
		<i class="fas fa-file"></i>
		Topics : <?php the_category( ', ' ); ?> <span class="px-2">•</span>
		<i class="fas fa-tag"></i>
		<?php if (has_tag()) { ?>
		<?php the_tags('Tags: ', ', '); ?>
    <?php  }; ?>

</div>

</div><!-- col-lg-8-->

<div class="column col-4 col-lg-4 col-md-6 col-sm-12 sidebar">
   <div class="widget-container make-side-sticky">

        <div class="widget-item">
      	  <h2 class="widget-title">Search the Site</h2>
          <?php b5st_navbar_search();?>
        </div>
        <div class="divider"></div>

        <div class="widget-item">
          <h2 class="widget-title">
          "<?php $categories = get_the_category();
    if ( ! empty( $categories ) ) {
      echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';} ;?>" Topic
          </h2>
<p class="small">If this section interests you, take a look at other prominent articles on the subject.</p>

<ul id="catnav">
<?php
        global $post;
      $category = get_the_category($post->ID);
      $category = $category[0]->cat_ID;
      $myposts = get_posts(array('numberposts' => 5, 'offset' => 0, 'category__in' => array($category), 'post_status'=>'publish', 'order'=>'ASC' ));
      foreach($myposts as $post) :
        setup_postdata($post);
?>
<li>
<a href="<?php the_permalink(); ?>">
<?php the_title(); ?></a>
</li>
<?php endforeach; ?>
<?php wp_reset_query(); ?>

</ul>

      </div>
      <div class="divider"></div>

          <?php dynamic_sidebar('orus-taxonomy-widget-area'); ?>
  </div>
</div>

    </div><!-- row-->
 </div><!-- container-->


    </section>


  <section class="container my-2 grid-xl">

<ul class="pagination">
 <?php if (strlen(get_previous_post()->post_title) > 0) { ?>
  <li class="page-item page-prev">
    <div class="page-item-subtitle">Previous</div>
    <div class="page-item-title h5"><i class="fas fa-chevron-circle-left fa-lg mx-2"></i><?php previous_post_link( '%link', '%title' ) ?></div>
  </li>
     <?php } ?>

     <?php if (strlen(get_next_post()->post_title) > 0) { ?>
  <li class="page-item page-next">
     <div class="page-item-subtitle">Next</div>
     <div class="page-item-title h5"><?php next_post_link( '%link', '%title' ) ?><i class="fas fa-chevron-circle-right fa-lg mx-2"></i></div>
  </li>
</ul>
 <?php } ?>

  </section>
</div>


  <?php
  endwhile; else :
    get_template_part('loops/404');
  endif;
?>
