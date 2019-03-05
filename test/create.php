<?php require_once('./DB/db.php');?>

<?php
    if(isset($_POST["btn-submit"])){
        $name = $_POST["name"];
        $price = $_POST["price"];
        $category = $_POST["category"];
        $status = $_POST["status"];
       
        if(empty($name) || empty($price) || empty($category) || empty($status)){
           
            echo '<script language="javascript">';
            echo 'alert("some feilds are empty")';
            echo '</script>';
            unset($_POST["btn-submit"]);
            
        }else{
            $sql = "INSERT INTO rasika_list_products(name,price,category,status) 
            VALUES('$name','$price','$category','$status')";

            if(mysqli_query($conn,$sql)){
                echo '<script language="javascript">';
                echo 'alert("Inserted successfully")';
                echo '</script>';
                unset($_POST["btn-submit"]);
                header("Location:admin.php");
            }
        }
    }

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css" type="text/css">
    <title>create product</title>
  </head>
  <body class="container">

  <div class="card">
  <div class="card-header">
    <h3>Enter New Product</h3>
  </div>
  <div class="card-body">
  <form action="create.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name"  name="name" placeholder="Enter product Name">
  </div>
 
  <div class="form-group">
    <label for="price">Price</label>
    <input type="text" class="form-control" id="price" name="price" placeholder="Enter product price">
  </div>

  <div class="form-group">
    <label for="category">Category</label>
    <input type="text" class="form-control" id="category" name="category" placeholder="Enter product category">
  </div>
  <div class="form-group">
    <label for="status">Status</label>
    <input type="text" class="form-control" id="status" name="status" placeholder="Enter product status">
  </div>
  
  <input class="btn btn-success btn-block" type="submit" id="btn-submit" name="btn-submit" value="Add New Product">
</form>
  </div>
</div>
    
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
  </body>
</html>