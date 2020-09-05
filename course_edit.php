<?php require_once('header.php')?>
<?php require_once('handle/database/db.php');

$edit_id=$_GET['edit'];
//print_r($edit_id);


$sql="SELECT * FROM `course`";
$query=mysqli_query($mysqli,$sql);
$result=mysqli_fetch_assoc($query);





?>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-md-1" style="margin-top: 100px;">
                <div class="card card-body bg-light">
                    <form action="course_update.php?id=<?php echo $result ["id"]; ?>" method="post">
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label" for="exampleFormControlTextarea1">Course Name</label>
                            <div class="col-lg-10">
                                <input type="text"  name="course_name"  class="form-control" value="<?php echo $result ["course_name"];?>" required></input>
                            </div>

                        </div>
                  
                    
                        <div class="form-group row">
                            <div class="offset-lg-2 col-lg-10">
                                <input type="submit" name="update" value="update"  class="btn btn-success btn-block">
                            </div>
                        </div>

                    </form>


                </div>


            </div>

        </div>

    </div>

    <?php require_once('fotter.php') ?>