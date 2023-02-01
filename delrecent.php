<?php
   require_once 'config.php';
     $id = $_GET['id'];
     $del = $database->deleterecent($id);
     if($del) {
        header("location:popularblog.php");
    }
   else {
          echo "Delete__failed..."; 
         }
?>