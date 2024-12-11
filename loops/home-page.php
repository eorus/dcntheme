<?php
/**
 * Template Name: Front Page
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
<main id="site-main">

<!-- Blog preview section-->
 <section class="container my-2">
      <!-- Section Title -->
      <div class="container section-title">
        <div class="section-title-container columns align-items-center justify-content-between pax">
          <h2 class="column col col-6 col-lg-6 col-md-12 col-sm-12 col-mr-auto">Official Announcements</h2>
          <div class="column col col-2 col-lg-6 col-md-12 col-sm-12 col-ml-auto my-2 py-2"><a href="https://www.dailycameranews.com/tag/announcement/">See All Announcements</a></div>
        </div>
      </div><!-- End Section Title -->
                    <div class="columns gx-5">
                  						<?php
									            // WP_Query arguments
                              $args = array(
                              'post__not_in' => get_option( 'sticky_posts' ),
   										        'post_type'              => array( 'post' ),
                              'posts_per_page'         => '4',
                              'orderby'                => 'DESC',
								              );

              								// The Query
							              	$the_query = new WP_Query( $args );
                              while ($the_query->have_posts()) : $the_query->the_post(); ?>

                            <?php get_template_part('loops/recent-loop', get_post_format()); ?>

                            <?php endwhile; wp_reset_postdata(); ?>
                    </div>

  </section>




 <section class="p-0 m-0">
     <div class="container">

        <div class="columns padme">
          <div class="column col-9 col-md-12 col-sm-12">

      <!-- Section Title -->
      <div class="container section-title">
        <div class="section-title-container columns col-gapless align-items-center justify-content-between">
          <h2 class="column col col-mr-auto fw-bold">Featured News</h2>
        </div>
      </div><!-- End Section Title -->

         <div class="columns pati">

<?php
  // WP_Query arguments
  $args  = array(
    'posts_per_page'      => 2,
    'post__in'            => get_option( 'sticky_posts' ),
    'ignore_sticky_posts' => 1,
  );
  $query = new WP_Query( $args );
  while ($query->have_posts()) : $query->the_post(); ?>


                                <section class="column col-6 col-md-12 col-sm-12 card shadow pax">
                                    <div class="pati">
                                        <small class="small text-muted mb-2"><?php b5st_post_date(); ?></small>
                                        <h2 class="h2 fw-bold"><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>
                                        <p><?php the_excerpt()?></p>

                                    </div>
                                </section>

                                	<?php	endwhile;	wp_reset_postdata(); ?>

                    </div>

            <div class="columns padme">
              <div class="column col-6 col-md-12 col-sm-12">
<a href="https://on1.sjv.io/c/1130509/2222918/12322" target="_top" id="2222918"><img src="https://on1-wp.s3.amazonaws.com/wp-content/uploads/2024/11/15092245/1124-aff-blackfridayx.jpg" border="0" alt="" width="600" height="400"/></a>
              </div>
              <div class="column col-6 col-md-12 col-sm-12">
<div id="ez_banner_container_279_10" class="HYPE_document" style="margin:auto;position:relative;overflow:hidden;"><script src="https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script><script src="https://affportal.bhphoto.com/public/js/moment.min.js"></script><script src="https://affportal.bhphoto.com/public/js/moment-timezone-with-data.min.js"></script><script type="text/javascript" charset="utf-8" src="https://affportal.bhphoto.com/ezbanner/?b=279&d=1000&dd=1ad2ca7e7a1779a18b5e81050df342c5&v=1.0&aff_num=14249&sid=dealzoneEZBANNER"></script></div>
</div>
              </div>
          </div>

          <div class="column col-3 col-md-12 col-sm-12 pati mt-0">
                                  <!-- Section Title -->
      <div class="container section-title">
        <div class="section-title-container columns col-gapless align-items-center justify-content-between">
          <h2 class="column col col-mr-auto fw-bold">Latest News</h2>
        </div>
      </div><!-- End Section Title -->
                  						<?php
									            // WP_Query arguments
                              $args = array(
                              'post__not_in' => get_option( 'sticky_posts' ),
   										        'post_type'              => array( 'post' ),
                              'posts_per_page'         => '10',
                              'orderby'                => 'DESC',
                              'category__not_in'       => '1',
								              );

              								// The Query
							              	$the_query = new WP_Query( $args );
                              while ($the_query->have_posts()) : $the_query->the_post(); ?>

                            <?php get_template_part('loops/newslist-loop', get_post_format()); ?>

                        	  <?php endwhile; wp_reset_postdata(); ?>

                            <div class="text-end mb-5 mb-xl-0">
                                <a class="text-decoration-none" href="/wordpress/haber">
                                    Get More News
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                  </div>
        </div>

      </div>

    </section><!-- End Section -->

<section class="container bg-secondary mt-2">
      <!-- Section Title -->
      <div class="container section-title">
        <div class="section-title-container columns align-items-center justify-content-between pax">
          <h2 class="column col col-6 col-lg-6 col-md-12 col-sm-12 col-mr-auto">Official Announcements</h2>
        <div class="column col col-2 col-lg-6 col-md-12 col-sm-12 col-ml-auto my-2 py-2"><a href="https://www.dailycameranews.com/tag/announcement/">See All Announcements</a></div>
        </div>
      </div>

       <div class="columns pati">

                  						<?php
									            // WP_Query arguments
                              $args = array(
                              'post__not_in' => get_option( 'sticky_posts' ),
   										        'post_type'              => array( 'post' ),
                              'posts_per_page'         => '5',
                              'orderby'                => 'DESC',
                              'category__in'           => '1'
								              );

              								// The Query
							              	$the_query = new WP_Query( $args );
                              while ($the_query->have_posts()) : $the_query->the_post(); ?>

                            <?php get_template_part('loops/termlist-loop', get_post_format()); ?>

                            <?php endwhile; wp_reset_postdata(); ?>
         </div>
        </section>


            <section class="py-5 bg-gray">
                <div class="container">
                    <div class="columns padme m-0">
                        <div class="column col col-2 col-lg-4 col-md-6 col-sm-12 px-2">
                            <h2 class="fw-bolder fs-5 mb-4">Latest News</h2>
                  						<?php
									            // WP_Query arguments
                              $args = array(
                              'post__not_in' => get_option( 'sticky_posts' ),
   										        'post_type'              => array( 'post' ),
                              'posts_per_page'         => '5',
    									        'orderby'                => 'DESC',
								              );

              								// The Query
							              	$the_query = new WP_Query( $args );
                              while ($the_query->have_posts()) : $the_query->the_post(); ?>

                            <?php get_template_part('loops/newslist-loop', get_post_format()); ?>

                        	  <?php endwhile; wp_reset_postdata(); ?>

                            <div class="text-end mb-5 mb-xl-0">
                                <a class="text-decoration-none" href="/wordpress/haber">
                                    Get More News
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>

                        </div>
                        <div class="column col col-2 col-lg-4 col-md-6 col-sm-12 px-2">
                            <div class="card border-0 h-100">

<a href="https://skylum.evyy.net/c/1130509/2206354/3255" target="_top" id="2206354"><img src="//a.impactradius-go.com/display-ad/3255-2206354" border="0" alt="" width="300" height="600"/></a><img height="0" width="0" src="https://skylum.evyy.net/i/1130509/2206354/3255" style="position:absolute;visibility:hidden;" border="0" />
                            </div>
                        </div>
                        <div class="column col col-2 col-lg-4 col-md-6 col-sm-12 px-2">
                            <h2 class="fw-bolder fs-5 mb-4">Latest News</h2>
                  						<?php
									            // WP_Query arguments
                              $args = array(
                              'post__not_in' => get_option( 'sticky_posts' ),
   										        'post_type'              => array( 'post' ),
                              'posts_per_page'         => '5',
    									        'orderby'                => 'DESC',
								              );

              								// The Query
							              	$the_query = new WP_Query( $args );
                              while ($the_query->have_posts()) : $the_query->the_post(); ?>

                            <?php get_template_part('loops/newslist-loop', get_post_format()); ?>

                        	  <?php endwhile; wp_reset_postdata(); ?>

                            <div class="text-end mb-5 mb-xl-0">
                                <a class="text-decoration-none" href="/wordpress/haber">
                                    Get More News
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>

                        </div>
                        <div class="column col col-2 col-lg-4 col-md-6 col-sm-12 px-2">
                            <h2 class="fw-bolder fs-5 mb-4">Latest News</h2>
                  						<?php
									            // WP_Query arguments
                              $args = array(
                              'post__not_in' => get_option( 'sticky_posts' ),
   										        'post_type'              => array( 'post' ),
                              'posts_per_page'         => '5',
    									        'orderby'                => 'DESC',
								              );

              								// The Query
							              	$the_query = new WP_Query( $args );
                              while ($the_query->have_posts()) : $the_query->the_post(); ?>

                            <?php get_template_part('loops/newslist-loop', get_post_format()); ?>

                        	  <?php endwhile; wp_reset_postdata(); ?>

                            <div class="text-end mb-5 mb-xl-0">
                                <a class="text-decoration-none" href="/wordpress/haber">
                                    Get More News
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>

                        </div>
                        <div class="column col col-2 col-lg-4 col-md-6 col-sm-12 px-2">
                            <h2 class="fw-bolder fs-5 mb-4">Latest News</h2>
                  						<?php
									            // WP_Query arguments
                              $args = array(
                              'post__not_in' => get_option( 'sticky_posts' ),
   										        'post_type'              => array( 'post' ),
                              'posts_per_page'         => '5',
    									        'orderby'                => 'DESC',
								              );

              								// The Query
							              	$the_query = new WP_Query( $args );
                              while ($the_query->have_posts()) : $the_query->the_post(); ?>

                            <?php get_template_part('loops/newslist-loop', get_post_format()); ?>

                        	  <?php endwhile; wp_reset_postdata(); ?>

                            <div class="text-end mb-5 mb-xl-0">
                                <a class="text-decoration-none" href="/wordpress/haber">
                                    Get More News
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>

                        </div>
                         <div class="column col col-2 col-lg-4 col-md-6 col-sm-12 px-2">
                            <h2 class="fw-bolder fs-5 mb-4">Latest News</h2>
                  						<?php
									            // WP_Query arguments
                              $args = array(
                              'post__not_in' => get_option( 'sticky_posts' ),
   										        'post_type'              => array( 'post' ),
                              'posts_per_page'         => '5',
    									        'orderby'                => 'DESC',
								              );

              								// The Query
							              	$the_query = new WP_Query( $args );
                              while ($the_query->have_posts()) : $the_query->the_post(); ?>

                            <?php get_template_part('loops/newslist-loop', get_post_format()); ?>

                        	  <?php endwhile; wp_reset_postdata(); ?>

                            <div class="text-end mb-5 mb-xl-0">
                                <a class="text-decoration-none" href="/wordpress/haber">
                                    Get More News
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>

                        </div>
                   </div>
                </div>
            </section>

<section class="container bg-gray my-2">
      <!-- Section Title -->
      <div class="container section-title">
        <div class="section-title-container columns col-gapless align-items-center justify-content-between">
          <h2 class="column col col-6 col-lg-6 col-md-12 col-sm-12 col-mr-auto">Latest Fimware Updates</h2>
        <div class="column col col-2 col-lg-6 col-md-12 col-sm-12 col-ml-auto my-2 py-2"><a href="https://www.dailycameranews.com/tag/announcement/">See All Announcements</a></div>
        </div>
      </div><!-- End Section Title -->
            <div class="columns pax">
          <?php
									// WP_Query arguments
										$args = array(
   										'post_type'              => array( 'post' ),
                      'posts_per_page'         => '4',
    									'orderby'                => 'DESC',
								);

								// The Query
								$the_query = new WP_Query( $args );
                while ($the_query->have_posts()) : $the_query->the_post(); ?>

                <?php get_template_part('loops/termlist-loop', get_post_format()); ?>

      	<?php
	      endwhile;
	      wp_reset_postdata();
?>

            </div>

</section>




 </main><!-- /main end -->
<?php
  b5st_mainbody_after();
  get_footer();
?>
