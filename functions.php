<?php
//include (get_template_directory() . '/admin/BMSolutions_panel/index.php');
//include (get_template_directory() . '/inc/theme-options.php');
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
?>