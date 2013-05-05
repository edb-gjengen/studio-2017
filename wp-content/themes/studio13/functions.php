<?php
register_sidebar(array(
    'name' => __( 'Sidebar One' ),
    'id' => 'sidebar-one',
    'description' => __( 'Sidebar one' )));


register_nav_menu( 'primary', 'Hovedmeny' );
register_nav_menu( 'footer', 'Footermeny' );

add_theme_support( 'post-thumbnails' );

/* TODO: Add these js thingies:
    	<script src="javascripts/foundation/foundation.joyride.js"></script>
  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'javascripts/vendor/zepto' : 'javascripts/vendor/jquery') +
  '.js><\/script>')
  </script>
<script>
    $(document).foundation();
  </script>

   */

?>
