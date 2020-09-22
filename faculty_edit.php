<?php require_once('header.php')?>
<?php require_once('handle/database/db.php');

$edit_id=$_GET['edit'];
$sql="SELECT faculty.*,course.course_name FROM faculty LEFT JOIN  course ON course.id=faculty.course_name  WHERE faculty.id='$edit_id'" ;
$query=mysqli_query($mysqli,$sql);
$result=mysqli_fetch_assoc($query);

 
$sql="SELECT * FROM course";
$query1=mysqli_query($mysqli,$sql);
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-md-1" style="margin-top: 100px;">
                <div class="card card-body bg-light">
                    <form action="faculty_update.php?id=<?php echo $result ["id"]; ?>" method="post">
                         <div class="form-group row">
                            <label class="col-lg-2 col-form-label" for="exampleFormControlTextarea1">Name</label>
                            <div class="col-lg-10">
                                <input type="text"  name="name"  class="form-control"  value="<?php echo $result ["name"];?>" required></input>
                            </div>

                        </div>
                          <div class="form-group row">
                            <label class="col-lg-2 col-form-label" for="exampleFormControlInput1">Age</label>
                            <div class="col-lg-10">
                                <input type="text" name="age" class="form-control"
                                     value="<?php echo $result ["age"]; ?>" required>
                            </div>
                        </div>
                        
                      
                       
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label" for="exampleFormControlInput1">Email address</label>
                            <div class="col-lg-10">
                                <input type="email" name="email" class="form-control"
                                     value="<?php echo $result ["email"]; ?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label" for="exampleFormControlSelect1"> Course Name</label>
                            <div class="col-lg-10">
                                <select class="form-control" name="age">
                                    <?php while ($data=mysqli_fetch_array($query1)) { ?>
                                    <option value="<?php echo $data ["id"]; ?>"<?php echo $result["course_name"]==$data["course_name"] ? "selected" : ""; ?>><?php echo $data ["course_name"] ?></option> <?php } ?>
                                    
                                </select>
                        </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-lg-2 col-lg-10">
                                <input type="submit" name="update" value="Update" class="btn btn-success btn-block">
                            </div>
                        </div>

                    </form>


                </div>


            </div>

        </div>

    </div>

    <?php require_once('fotter.php') ?>