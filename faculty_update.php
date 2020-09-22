<?php

 if(isset($_POST['update'])){
    require_once 'handle/database/db.php';
     $id=$_GET['id'];
     $name = $_POST['name'];
     $age = $_POST['age'];
     $email = $_POST['email'];
     $course_name = $_POST['course_name'];

      
           


    $sql="UPDATE faculty SET name='$name',age='$age',email='$email',course_name= '$course_name' WHERE id='$id'";
      

    $query=mysqli_query($mysqli,$sql);

    if($query)

    {

        header("Location:faculty_view.php");
    }
    else{
        die('problem'.mysqli_error($mysqli));
    }
}