<?php require_once('header.php')?>
<?php require_once('handle/database/db.php');


$sql="SELECT employee.*,age.age FROM employee LEFT JOIN  age ON age.id=employee.age";
$query=mysqli_query($mysqli,$sql);
//print_r($query);


 ?>

<div class="container-fluid">
  <h2 class="text-center">Employee List</h2>
         
  <table class="table  text-center">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>email</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>
       <?php while($data=mysqli_fetch_array($query)) { ?>  
      <tr>
        <td><?php echo $data["id"]; ?></td>
        <td><?php echo $data["name"]; ?></td>
        <td><?php echo $data["age"]; ?></td>
        <td><?php echo $data["email"]; ?></td>
        <td><a href="delete2.php?id=<?php echo $data["id"]; ?>" class="btn btn-danger"> <strong>delete</strong></a>
          <a href="employee_edit.php?edit=<?php echo $data["id"]; ?>" class="btn btn-success"> <strong>edit</strong></a></td>
      </tr>
    </tbody>
      <?php } ?>
  </table>

</div>

  <?php require_once('fotter.php') ?>