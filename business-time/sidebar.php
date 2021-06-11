<div class="col-md-4">
  <aside id="sidebar">

    

    <?php 
      if( is_active_sidebar('sidebar-widget') ) {
        dynamic_sidebar( 'sidebar-widget' );
      }
    ?>

    
  </aside>
</div>