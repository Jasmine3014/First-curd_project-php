<?php require_once('header.php')?>
<?php require_once('handle/database/db.php');
$sql="SELECT * FROM `course`";
$query=mysqli_query($mysqli,$sql);
//print_r($query);


 ?>

<div class="container-fluid">
  <h2 class="text-center">Course List</h2>
         
  <table class="table  text-center">
  	<p> </p>
    <thead>
      <tr>
        <th>id</th>
        <th>course name</th>
      </tr>
    </thead>
    <tbody>
       <?php while($data=mysqli_fetch_array($query)) { ?>  
      <tr>
        <td><?php echo $data["id"]; ?></td>
        <td><?php echo $data["course_name"]; ?></td>
        <td>
          <a href="delete_course.php?id=<?php echo $data["id"]; ?>" class="btn btn-danger"><strong>Delete</strong></a>
          <a href="course_edit.php?edit=<?php echo $data["id"];?>" class="btn btn-success"><strong>Edit</strong></a>
        </td>
      </tr>
    </tbody>
      <?php } ?>
  </table>

</div>








  <?php require_once('fotter.php') ?>