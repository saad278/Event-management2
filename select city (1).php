<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <script src="js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/d4dda18e1f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <title>Document</title>
</head>
<body>
<?php 
include "database.php";
  ?>
  <?php
  if(isset($_REQUEST["id"])){
    $id=$_REQUEST["id"];
$sql="select * from events where e_id='$id'";
  $result=$conn->query($sql);
  if($result->num_rows > 0)
  {
    while($row=$result->fetch_assoc()){
   echo '
    <nav class="navbar navbar-expand-sm bg-light navbar-light my-1">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="damascus.php?id='.$row['e_id'].'">damscus</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="deir-al-zoor.php?id='.$row['e_id'].'">deir al zorr</a>
          </li>
        </ul>
      </nav> ';
    }
  }
}
  ?>
</body>
</html>