<?php require_once('./DB/db.php');?>

<?php
    if(isset($_GET["id"])){
        $idFromUrl = $_GET["id"];
        //set the db connection here
        $query= "DELETE FROM shehan_list_products WHERE id = '$idFromUrl'";
        mysqli_query($conn,$query);
    }
    //redirect to page delete.php using header
    header("Location:admin.php");


?>