<aside id="sidebar-primary" class="sidebar-primary">
  <?php 
    if( ! is_dynamic_sidebar( 'sidebar-primary' ) ) {
      return;
    }
    dynamic_sidebar( 'sidebar-primary' );
  ?>
</aside><!-- sidebar-primary -->