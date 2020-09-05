<?php require_once('header.php')?>
<?php require_once('handle/database/db.php');
$sql="SELECT * FROM `age`";
$query=mysqli_query($mysqli,$sql);
//print_r($query);


 ?>

<div class="container-fluid">
  <h2 class="text-center">Age List</h2>
         
  <table class="table  text-center">
  	<p> </p>
    <thead>
      <tr>
        <th>id</th>
        <th>age</th>
      </tr>
    </thead>
    <tbody>
       <?php while($data=mysqli_fetch_array($query)) { ?>  
      <tr>
        <td><?php echo $data["id"]; ?></td>
        <td><?php echo $data["age"]; ?></td>
        <td>
          <a href="delete3.php?id=<?php echo $data["id"]; ?>" class="btn btn-danger"><strong>delete</strong></a>
          <a href="age_edit.php?edit=<?php echo $data["id"];?>" class="btn btn-success"><strong>edit</strong></a>
        </td>
      </tr>
    </tbody>
      <?php } ?>
  </table>

</div>








  <?php require_once('fotter.php') ?>