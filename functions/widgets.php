<?php
/**
 * Widgets
 */

function b5st_widgets_init() {

  /**
   * Versatile widget areas using Bootstrap grid columns
   * ===================================================
   *
   * Flexbox `col-sm` gives the correct the column width:
   *
   * — If only 1 widget, then this will have full width ...
   * — If 2 widgets, then these will each have half width ...
   * — If 3 widgets, then these will each have third width ...
   * — If 4 widgets, then these will each have quarter width ...
   *
   * ... above the Bootstrap `sm` breakpoint.
   */

  /**
   * Main
   */

   register_sidebar( array(
    'name'            => __( 'Mainbody Widget Area 1', 'b5st' ),
    'id'              => 'mainbody-widget-area-1',
    'description'     => __( 'Use 1, 2, 3 or 4 widgets.', 'b5st' ),
    'before_widget'   => '<div class="%1$s %2$s column col">',
    'after_widget'    => '</div>',
    'before_title'    => '<h2 class="h4">',
    'after_title'     => '</h2>',
  ) );

  /**
   * Açev Search Side
   */

   register_sidebar( array(
    'name'            => __( 'Orus Search Side Widget 1', 'b5st' ),
    'id'              => 'orus-search-widget-area-1',
    'description'     => __( 'Use 1, 2, 3 or 4 widgets.', 'b5st' ),
    'before_widget'   => '<div class="%1$s %2$s widget-item">',
    'after_widget'    => '</div>',
    'before_title'    => '<h2 class="h4 widget-title">',
    'after_title'     => '</h2>',
   ) );

  /**
   * Açev Loop Side
   */

   register_sidebar( array(
    'name'            => __( 'Orus Taxonomy Loop Sidebar Widget', 'b5st' ),
    'id'              => 'orus-taxonomy-widget-area',
    'description'     => __( 'Use 1, 2, 3 or 4 widgets.', 'b5st' ),
    'before_widget'   => '<div class="%1$s %2$s widget-item my-2">',
    'after_widget'    => '</div>',
    'before_title'    => '<h2 class="h4 widget-title">',
    'after_title'     => '</h2>',
   ) );

  /**
   * Footer
   */

  register_sidebar( array(
    'name'            => __( 'Footer Widget Area', 'b5st' ),
    'id'              => 'footer-widget-area',
    'description'     => __( 'Use 1, 2, 3 or 4 widgets.', 'b5st' ),
    'before_widget'   => '<div class="%1$s %2$s column col col-md-6 col-sm-12">',
    'after_widget'    => '</div>',
    'before_title'    => '<h2 class="h4">',
    'after_title'     => '</h2>',
  ) );

}
add_action( 'widgets_init', 'b5st_widgets_init' );
