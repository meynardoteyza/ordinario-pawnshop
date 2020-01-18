<?php 
  require_once "../includes/sidebar-header.php"; 

    if(!empty($sub)){
      $file = file_exists(''.$sub.'.php');
      if(!empty($sub) && $file){
        include(''.$sub.'.php');
      } else {
        echo '<h1 align="center">Page Not Found</h1>';
      }
    } else {
        include('main.php');
  }	

  require_once "../includes/sidebar-footer.php";
?>