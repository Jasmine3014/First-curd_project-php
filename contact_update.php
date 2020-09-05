<?php 
if(isset($_POST['update'])){
    require_once 'handle/database/db.php';
     $id=$_GET['id'];
     $name=$_POST['name'];
     $age=$_POST['age'];
     $phn_no=$_POST['phn_no'];

       $sql="UPDATE contact SET name='$name',age='$age',phn_no='$phn_no' WHERE id='$id'";
       $query=mysqli_query($mysqli,$sql);
    if($query){

        header("Location:contact_view.php");
    }
    else{
        die('problem'.mysqli_error($mysqli));
    }
}

