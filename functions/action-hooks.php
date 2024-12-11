<?php
/*
 * b5st Action Hooks
 * =================
 * Designed to be used by a child theme, but they can also be used directly
 * in your development of b5st. Example usage:
 *    -- See “Dimox Breadcrumbs Insertion” below.
 *    -- See “Mainbody Widgets 1 Insertion” below.
 */

// Navbar (in `header.php`)

function b5st_navbar_before() {
  do_action('navbar_before');
}

function b5st_navbar_after() {
  do_action('navbar_after');
}
function b5st_navbar_brand() {
  if ( ! has_action('navbar_brand') ) {
?>

<a class="navbar-brand py-2 d-flex align-items-center" href="<?php echo esc_url( home_url('/') ); ?>">                       <picture>
                            <source srcset="<?php bloginfo('template_url'); ?>/theme/img/logo.webp" type="image/webp">
                            <source srcset="<?php bloginfo('template_url'); ?>/theme/img/logo.png" type="image/png">
                            <img width="271" height="59" class="img-fluid" src="<?php bloginfo('template_url'); ?>/theme/img/logo.webp" alt="Site Logo">
                          </picture>
</a>

    <!--<i class="fas fa-university fa-2x"></i><a class="navbar-brand py-3 d-flex align-items-center" href="<?php echo esc_url( home_url('/') ); ?>"><span class="text-uppercase text-small fw-bold text-dark ms-2 mb-0"><?php bloginfo('name'); ?></span></a>-->

    <?php
  } else {
		do_action('navbar_brand');
	}
}

function b5st_navbar_search() {
  if ( ! has_action('navbar_search') ) {
    ?>
    <form class="ms-1 md-flex" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
      <div class="input-group input-inline">
        <input class="form-input border-0 shadow bg-gray-200" type="text" value="<?php echo get_search_query(); ?>" placeholder="Search input..." name="s" id="s">
        <button type="submit" id="searchsubmit" value="<?php esc_attr_x('Search', 'b5st') ?>" class="btn btn-primary input-group-btn">
          <i class="bi bi-search"></i>
        </button>
      </div>
    </form>
    <?php
  } else {
		do_action('navbar_search');
	}
}

// Mainbody

function b5st_mainbody_before() {
  do_action('mainbody_before');
}
function b5st_mainbody_after() {
  do_action('mainbody_after');
}

function b5st_mainbody_start() {
  do_action('mainbody_start');
}
function b5st_mainbody_end() {
  do_action('mainbody_end');
}

/*
 * Dimox Breadcrumbs Insertion
 * ===========================
 * An example for how to insert something via an action hook --
 * but inserting it only on single posts, using `is_single()`.

function b5st_dimox_single_post() {
  if ( is_single() ) { ?>
    <?php if (function_exists('dimox_breadcrumbs')) { ?>
      <?php dimox_breadcrumbs(); ?>
    <?php } ?>
  <?php }
};

add_action( 'mainbody_before', 'b5st_dimox_single_post' );
 */

/*
 * Mainbody Widgets 1 Insertion
 * ============================
 * An example for how to insert something via an action hook --
 * this will appear on every page (if you have widgets in this area).
 */

function b5st_mainbody_widgets_1() {
  if(is_single() && is_active_sidebar('mainbody-widget-area-1')): ?>
    <section class="acevc">
      <div class="container">
      <div class="row">
        <?php dynamic_sidebar('mainbody-widget-area-1'); ?>
      </div>
      </div>
    </section>
  <?php endif;
};
add_action( 'mainbody_end', 'b5st_mainbody_widgets_1' );

// Footer (in `footer.php`)

function b5st_footer_before() {
  do_action('footer_before');
}
function b5st_footer_after() {
  do_action('footer_after');
}
function b5st_bottomline() {
	if ( ! has_action('bottomline') ) {
?>

  <!-- Copyright & Links - Bootstrap Brain Component -->
  <section class="container bg-dark p-2">
      <div class="columns copyright pati align-items-lg-center">
        <div class="column col-6 col-md-12 col-sm-12 align-items-start">
          <div class="mb-2">
            &copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>.
          </div>
          <div class="credit-wrapper d-block col-mx-auto text-white">
            Daily Camera News is a participant in the Amazon Services LLC Associates Program, an affiliate advertising program designed to provide a means for sites to earn advertising fees by advertising and linking to Amazon.com.
          </div>
        </div>
        <div class="column col-6 col-md-12 col-sm-12 justify-items-end" style="justify-items: end;">
            <ul class="m-0 list-unstyled d-flex">
              <li>
                <a href="https://www.dailycameranews.com/about/" class="px-2">
                  About
                </a>
              </li>
              <li>
                <a href="https://www.dailycameranews.com/affiliate-disclosure/" class="px-2">
                  Affiliate Disclosure
                </a>
              </li>
              <li>
                <a href="https://www.dailycameranews.com/contact-us/" class="px-2">
                  Contact Us
                </a>
              </li>
              <li>
                <a href="https://www.dailycameranews.com/privacy-policy/" class="px-2">
                  Privacy Policy
                </a>
              </li>
              <li>
                <a href="https://www.dailycameranews.com/sitemap_index.xml" class="px-2">
                  Sitemap
                </a>
              </li>
            </ul>
        </div>
      </div>
  </section>


		<?php
	} else {
		do_action('bottomline');
	}
}
