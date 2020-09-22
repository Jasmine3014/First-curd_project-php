<?php require_once('header.php')?>
<?php require_once('handle/database/db.php');
 if(isset($_POST['submit'])){
     $name = $_POST['name'];

     $age = $_POST['age'];
     $email = $_POST['email'];
     $course_name = $_POST['course_name'];
      
           


    $sql="INSERT INTO `faculty`(`name`, `age`, `email`,`course_name`) VALUES ('$name','$age', '$email','$course_name')";
    // print_r($sql);   

    if(mysqli_query($mysqli,$sql)){

        echo "<h2 class='text-center text-sucess'>Sucess</h2>";
    }
    else{
        echo "failed";
    }


}

$sql="SELECT *FROM course";
$query=mysqli_query($mysqli,$sql);

?>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-md-1" style="margin-top: 100px;">
                <div class="card card-body bg-light">
                    <form action="" method="post" enctype="multipart/form-data">
                         <div class="form-group row">
                            <label class="col-lg-2 col-form-label" for="exampleFormControlTextarea1">Name</label>
                            <div class="col-lg-10">
                                <input type="text"  name="name"  class="form-control" placeholder="name" required></input>
                            </div>

                        </div>
                           <div class="form-group row">
                            <label class="col-lg-2 col-form-label" for="exampleFormControlInput1">Age</label>
                            <div class="col-lg-10">
                                <input type="text" name="age" class="form-control"
                                       placeholder="xxx" required>
                            </div>
                        </div>
                        
                      
                       
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label" for="exampleFormControlInput1">Email address</label>
                            <div class="col-lg-10">
                                <input type="email" name="email" class="form-control"
                                       placeholder="name@example.com" required>
                            </div>
                        </div>
                        
                     <div class="form-group row">
                            <label class="col-lg-2 col-form-label" for="exampleFormControlSelect1">Course Name</label>
                            <div class="col-lg-10">
                                <select class="form-control" name="course_name">
                                   
                                 <?php while ($data=mysqli_fetch_array($query)) { ?>
                                    <option value="<?php echo $data ["id"] ?>"><?php echo $data ["course_name"] ?></option> <?php } ?>
                                    
                                </select>
                            </div>
                        </div>
                       
                     
                         
                        <div class="form-group row">
                            <div class="offset-lg-2 col-lg-10">
                                <input type="submit" name="submit" class="btn btn-success btn-block">
                            </div>
                        </div>

                    </form>


                </div>


            </div>

        </div>

    </div>

    <?php require_once('fotter.php') ?>