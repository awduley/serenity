<?php
/**
 * Functions for the Serenity theme
 */

 // Enqueue scripts and styles

 if ( ! isset( $content_width ) ) {
   $content_width = 60;
 }

 function serenity_scripts() {

  // Main styles
  wp_enqueue_style( 'main-css', get_template_directory_URI() . '/css/main.css', [], '1.0.0', 'all' );

  // Font Awesome
  wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/a38893edb6.js', [], true );
 }
 add_action( 'wp_enqueue_scripts', 'serenity_scripts' );

 // Register widgets area
 function serenity_widgets_init() {

  register_sidebar(
    [
      'name'            => esc_html__( 'Sidebar Primary', 'serenity' ),
      'id'              => __( 'sidebar-primary', 'serenity' ),
      'disciption'      => esc_html__( 'Drop widgets here.', 'serenity' ),
      'before_widget'   => '<div class="widget">',
      'after_widget'    => '</div>'
    ]
  );
 }
 add_action( 'widgets_init', 'serenity_widgets_init' );