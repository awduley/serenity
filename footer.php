  <footer id="footer" class="footer">

    <section class="container-sidebar">
      <?php if( is_active_sidebar( 'sidebar-primary' ) ) : 
      get_sidebar( 'sidebar-primary' );
      endif;
      ?>
    </section><!-- .container-sidebar -->

    <section class="social-icons">
      <a href="<?php esc_url( 'https://www.linkedin.com/in/andrew-duley' ); ?>" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>

      <a href="<?php esc_url( 'https://www.github.com/awduley' ); ?>" target="_blank"><i class="fab fa-github fa-2x"></i></a>
    </section><!-- .social-icons -->

    <div class="credits">
      <small><?php _e( 'Website created by', 'serenity' ) ?> <a href="<?php esc_url( 'https://crookedfallstudios.com', 'serenity' ); ?>" target="_blank"><?php _e( 'Crooked Fall Studios' , 'serenity' ); ?></a></small>
    </div><!-- .credits -->

  </footer><!-- .footer -->

</div><!-- .container -->
  
</body>
</html>