<?php
if(isset($_GET["id"])){
   
   require_once('handle/database/db.php');
   $delete_id=$_GET["id"];
   $sql="DELETE  FROM age WHERE id='$delete_id'";
   if(mysqli_query($mysqli,$sql)){
   	header('Location:age_view.php');
   }

	   	else{
			die('delete failed'.mysqli_error($mysqli));
		


   }
}