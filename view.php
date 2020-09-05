<?php require_once('header.php')?>
<?php require_once('handle/database/db.php');
$sql="SELECT * FROM `employee`";
$query=mysqli_query($mysqli,$sql);
//print_r($query);


 ?>

<div class="container-fluid">
  <h2 class="text-center">Employee List</h2>
         
  <table class="table  text-center">
  	<p> </p>
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>email</th>
      </tr>
    </thead>
    <tbody>
       <?php while($data=mysqli_fetch_array($query)) { ?>  
      <tr>
        <td><?php echo $data["id"]; ?></td>
        <td><?php echo $data["name"]; ?></td>
        <td><?php echo $data["age"]; ?></td>
        <td><?php echo $data["email"]; ?></td>
      </tr>
    </tbody>
      <?php } ?>
  </table>

</div>








  <?php require_once('fotter.php') ?>