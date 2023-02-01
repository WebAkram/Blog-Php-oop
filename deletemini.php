<?php
   require_once 'config.php';
     $id = $_GET['id'];
     $delete = $database->deleteslider($id);
     if($delete) {
        header("location:blogsection.php");
    }
   else {
          echo "Delete__failed..."; 
         }
