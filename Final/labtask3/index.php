<!DOCTYPE html>
<html>
<title>Final Lab 3</title>
<body>

<h1>User's Information</h1>
<table border="1"  cellpadding="15">
  <tr>
    
    <th>Username</th>
    <th>pass</th>
    <th>email</th>
    <th>DOB</th>
    <th>Action</th>
  </tr>
  <?php
	include('config.php');
	$sql = "SELECT id,username,pass,email,dob FROM users";
	$result = $conn -> query($sql);
		while($row = $result -> fetch_assoc()){
			?>
			<tr>
			<td><?php echo $row['id'];?></td>
			<td><?php echo $row['username'];?></td>
			<td><?php echo $row['pass'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['dob'];?></td>
			<td><a href="update.php?id=<?php echo $row['id'];?>">Update</a> | 
			<a href="delete.php?id=<?php echo $row['id'];?>" >Delete</a></td>
			</tr>
			<?php
		}
?>

</table>

</body>
</html> 