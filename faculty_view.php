<?php require_once('header.php')?>
<?php require_once('handle/database/db.php');


$sql="SELECT faculty.*,course.course_name FROM faculty LEFT JOIN  course ON course.id=faculty.course_name";
$query=mysqli_query($mysqli,$sql);
//print_r($query);


 ?>

<div class="container-fluid">
  <h2 class="text-center">Faculty List</h2>
         
  <table class="table  text-center">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>email</th>
        <th>course_name</th>
      </tr>
    </thead>
    <tbody>
       <?php while($data=mysqli_fetch_array($query)) { ?>  
      <tr>
        <td><?php echo $data["id"]; ?></td>
        <td><?php echo $data["name"]; ?></td>
        <td><?php echo $data["age"]; ?></td>
        <td><?php echo $data["email"]; ?></td>
        <td><?php echo $data["course_name"]; ?></td>
        <td><a href="faculty_delete.php?id=<?php echo $data["id"]; ?>" class="btn btn-danger"> <strong>delete</strong></a>
          <a href="faculty_edit.php?edit=<?php echo $data["id"]; ?>" class="btn btn-success"> <strong>edit</strong></a></td>
      </tr>
    </tbody>
      <?php } ?>
  </table>

</div>

  <?php require_once('fotter.php') ?>