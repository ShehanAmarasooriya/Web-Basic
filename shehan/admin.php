<?php require_once('./DB/db.php');?>

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
    <title>admin</title>
  </head>
  <body>
    <div class="contain">

    <div class="card">
  <div class="card-header">
    <h3>Read Products</h3>
  </div>
  <div class="card-body">
  
  <a href="create.php">
  <span class="btn btn-primary btn_cus glyphicon glyphicon-plus"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Create Product</span>
  </a>

  <!--create a table-->
  <table class="table table-bordered">
        <thead>
            <tr>
            <th>Name</th>
            <th>price</th>
            <th>category</th>
            <th >action</th>
            </tr>
        </thead>
        <tbody>
  <?php
    $sql = "SELECT * FROM shehan_list_products";
    $res = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_array($res)){  
        $id = $row["id"];    
        $name = $row["name"]; 
        $price = $row["price"];
        $category = $row["category"];
        $status = $row["status"];
        
    ?> 
        <tr>
            <th><?php echo($name);?></th>
            <td><?php echo($price);?></td>
            <td><?php echo($category);?></td>
            <td>
            <a href="#">
            <span class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;Read</span></a>
            &nbsp;&nbsp;
            <a href="edit.php?id=<?php echo $id;?>">
            <span class="btn btn-info"><i class="fa fa-pencil-square" aria-hidden="true"></i>&nbsp; Edit</span></a>
            &nbsp;&nbsp;
            <a href="delete.php?id=<?php echo $id;?>">
            <span class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Delete</span></a>
      </td>
            </tr>
    <?php }?>
    </tbody>
    </table>
  </div>
</div>
  
    </div>
  

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
  </body>
</html>