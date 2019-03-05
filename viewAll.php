<html>
<head>
<style>
table {
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid black;
}

th, td {
	width:110px;
}

input[type=submit], input[type=reset] { 
  background-color: black;
  border: none;
  color: white;
  padding: 14px 25px;
  text-decoration: none;
  margin: 4px 0px;
  cursor: pointer;
}
</style>
<?php include_once('db.php');?>
</head>
<body>

<?php

	$fetchSql = "SELECT * from studentdata ";
	$fetched_result2 = mysqli_query($conn,$fetchSql);

	?>
	<h2>All Student Records</h2>
<table border="1">
<tr>
	
		<th>First Name</th>
		<th>Last Name</th>
		<th>Age</th>
		<th>Major Subject</th>
		<th>GPA</th>
	</tr>

 <?php 
while ($detail = mysqli_fetch_assoc($fetched_result2)) { ?>

	<tr>
		
		<td><?php echo $detail["firstName"]; ?></td>
		<td><?php echo $detail["lastName"]; ?></td>
		<td><?php echo $detail["Age"]; ?></td>
		<td><?php echo $detail["majorSubject"]; ?></td>
		<td><?php echo $detail["gpa"]; ?></td>
	</tr>

<?php	 }
	 ?>

</table>
<br><br>
<a href="form.php"><input type="submit" value="Add Details"></a>
<a href="index.php"><input type="submit" value="Menu"></a>

</body>
</html>