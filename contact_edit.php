<?php require_once('header.php')?>
<?php require_once('handle/database/db.php');

$edit_id=$_GET['edit'];
//print_r($edit_id);
$sql="SELECT contact.*,age.age FROM contact LEFT JOIN  age ON age.id=contact.age   WHERE contact.id=$edit_id";
$query=mysqli_query($mysqli,$sql);
$result=mysqli_fetch_assoc($query);


$sql="SELECT * FROM age";
$query1=mysqli_query($mysqli,$sql);




?>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-md-1" style="margin-top: 100px;">
                <div class="card card-body bg-light">
                    <form action="contact_update.php?id=<?php echo $result ["id"]; ?>" method="post">
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label" for="exampleFormControlTextarea1">Name</label>
                            <div class="col-lg-10">
                                <input type="text"  name="name"  class="form-control" value="<?php echo $result ["name"];?>" required></input>
                            </div>

                        </div>
                      <div class="form-group row">
                            <label class="col-lg-2 col-form-label" for="exampleFormControlSelect1">Age</label>
                            <div class="col-lg-10">
                                <select class="form-control" name="age">
                                    <option selected disabled>Select your age</option>
                                    <?php while ($data=mysqli_fetch_array($query1)) { ?>
                                    <option value="<?php echo $data ["id"]; ?>"<?php echo $result["age"]==$data["age"] ? "selected" : ""; ?>><?php echo $data ["age"] ?></option> <?php } ?>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label" for="exampleFormControlInput1">phone number</label>
                            <div class="col-lg-10">
                                <input type="text" name="phn_no" class="form-control"
                                        value="<?php echo $result["phn_no"];?>" required>
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