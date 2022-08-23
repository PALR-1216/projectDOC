<?php

if(!isset($_SESSION['AdminId'])){
	header('location:login.php');
}



include("conn.php");
$sqlQuery = "SELECT * FROM pacientes;";
$resultSet = mysqli_query($db, $sqlQuery) or die("database error:". mysqli_error($db));
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#SSN</th>
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
    </tr>
  </thead>

 

	<tbody>
		<?php while( $row = mysqli_fetch_assoc($resultSet) ) { ?>
		   <td id="<?php echo $row ['lastSS']; ?>"> <?php echo $row['lastSS']; ?> </td> 
		   <td><?php echo $row ['firstName']?></td>
		   <td><?php echo $row['lastName'];?></td>
           <td><?php echo $row['userEmails'];?></td>
           <td><?php echo $row['phoneNumber'];?></td>
		<td>
			
			
		   </tr>
		<?php } ?>
	</tbody>

</table>