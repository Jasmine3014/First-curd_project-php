<?php 
if(isset($_POST['update'])){
    require_once 'handle/database/db.php';
     $id=$_GET['id'];
     $course_name=$_POST['course_name'];
 

       $sql="UPDATE course SET course_name='$course_name' WHERE id='$id'";
       $query=mysqli_query($mysqli,$sql);
    if($query){

        header("Location:course_view.php");
    }
    else{
        die('problem'.mysqli_error($mysqli));
    }
}

