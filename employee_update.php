<?php

 if(isset($_POST['update'])){
    require_once 'handle/database/db.php';
     $id=$_GET['id'];
     $name = $_POST['name'];

     $age = $_POST['age'];
     $email = $_POST['email'];
      
           


    $sql="UPDATE employee SET name='$name',age='$age',email='$email' WHERE id='$id'";
    // print_r($sql);   

    $query=mysqli_query($mysqli,$sql);

    if($query)

    {

        header("Location:employee_view.php");
    }
    else{
        die('problem'.mysqli_error($mysqli));
    }
}