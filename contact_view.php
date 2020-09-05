<?php require_once('header.php')?>
<?php require_once('handle/database/db.php');



$sql="SELECT contact.*,age.age FROM contact LEFT JOIN  age ON age.id=contact.age";
$query=mysqli_query($mysqli,$sql);


//print_r($query);


 ?>

<div class="container-fluid">
  <h2 class="text-center">Contact List</h2>
         
  <table class="table  text-center">
  	<p> </p>
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>phn_no</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>
       <?php while($contact_data =mysqli_fetch_array($query)) { ?>  
      <tr>
        <td><?php echo $contact_data["id"]; ?></td>
        <td><?php echo $contact_data["name"]; ?></td>
        <td><?php echo $contact_data["age"]; ?></td>
        <td><?php echo $contact_data["phn_no"]; ?></td>
        <td>
          <a href="contact_edit.php?edit=<?php echo $contact_data["id"]; ?>" class=" btn btn-success"> <strong>edit</strong></a>
          <a href="delete2.php?id=<?php echo $contact_data["id"]; ?>" class="btn btn-danger"> <strong>delete</strong></a>

         
        </td>
      </tr>
    </tbody>
      <?php } ?>
  </table>

</div>








  <?php require_once('fotter.php') ?>