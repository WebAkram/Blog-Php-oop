<?php
   require_once 'config.php';
     $ids = $_GET['id'];
     $remove = $database-> deletepblog($ids);
     if($remove) {
        header("location:popularblog.php");
    }
   else {
          echo "Delete__failed..."; 
         }
?>