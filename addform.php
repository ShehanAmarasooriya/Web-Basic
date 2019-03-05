<?php 

include_once('db.php');

if(isset($_POST['submit']))
{
	$fname = $_POST['fname'];     
	$lname = $_POST['lname'];
	$age = $_POST['age'];
	$major = $_POST['major'];
	$gpa = $_POST['gpa'];
    

    $addSql = "DELETE FROM Customers WHERE CustomerName='Alfreds Futterkiste';";
        
    if (mysqli_query($conn, $addSql)) {
        echo "<br>New record created successfully";
    } else {
        echo "<br>Error: " . $addSql . "<br>" . mysqli_error($conn);
    }
} 
mysqli_close($conn);
?>