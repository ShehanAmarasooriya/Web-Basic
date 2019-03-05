<html>
<head>
<style>
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
<head>
<body>

<h2>Enter Student Results</h2>
<table>
<form action="addform.php" method="post">
<tr>
  <td>First name:</td>
  <td><input type="text" name="fname"></td>
</tr>
<tr>
  <td>Last name:</td>
  <td><input type="text" name="lname"></td>
</tr>
<tr>
  <td>Age:</td>
  <td><input type="text" name="age"></td>
</tr>
<tr>
  <td>Major Subject:</td>
  <td><select name = "major">
  <option value="Mathematics">Mathematics</option>
  <option value="Computing">Computing</option>
  <option value="Statistics">Statistics</option>
</select></td>
</tr>
<tr>
  <td>GPA:</td>
  <td><input type="text" name="gpa"></td>
</tr>
<tr>
  <td></td>
  <td><input type="submit" value="Submit" name ="submit">&nbsp;&nbsp;
  <input type="reset" value="Reset" name = "reset">
  </td>
</tr>
</form>
</table> 

<a href="index.php"><input type="submit" value="Menu"></a>  
</body>
</html>
