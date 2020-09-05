<?php require_once('header.php')?>
<?php require_once('handle/database/db.php');
if(isset($_POST["submit"])){
     $name=$_POST["name"];
     $age=$_POST["age"];
     $phn_no=$_POST["phn_no"];

    $sql="INSERT INTO `contact`( `name`, `age`, `phn_no`)VALUES ('$name','$age','$phn_no')";

    if(mysqli_query($mysqli,$sql)){

        echo "<h2 class='text-center text-sucess'>Sucess</h2>";
    }
    else{
        echo "failed";  
    }


}

$sql="SELECT *FROM age";
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
                            <label class="col-lg-2 col-form-label" for="exampleFormControlSelect1">Age</label>
                                <div class="col-lg-10">
                                    <select class="form-control" name="age">
                                        <option value="">Select your age</option>
                                        <?php while ($data=mysqli_fetch_array($query)) { ?>
                                        <option value="<?php echo $data ["id"] ?>"><?php echo $data ["age"] ?></option> <?php } ?>
                                      
                                        
                                    </select>

                                </div>
                        </div>    
                           
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label" for="exampleFormControlInput1">phone number</label>
                            <div class="col-lg-10">
                                <input type="text" name="phn_no" class="form-control"
                                       placeholder="019******" required>
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