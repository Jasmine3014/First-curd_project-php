<?php require_once('header.php')?>
<?php require_once('handle/database/db.php');
 if(isset($_POST['submit'])){
     $age = $_POST['age'];
    
      
           


    $sql="INSERT INTO `age`(`age`) VALUES ('$age')";
   

    if(mysqli_query($mysqli,$sql)){

        echo "<h2 class='text-center text-sucess'>Sucess</h2>";
    }
    else{
        echo "failed";
    }


}



?>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-md-1" style="margin-top: 100px;">
                <div class="card card-body bg-light">
                    <form action="" method="post" enctype="multipart/form-data">
                         <div class="form-group row">
                              <label class="col-lg-2 col-form-label" for="exampleFormControlTextarea1">Age</label>
                                <div class="col-lg-10">
                                    <select class="form-control" name="age">
                                        <option >15</option>
                                        <option >80</option>
                                        <option >78</option>
                                        <option >92</option>
                                        
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