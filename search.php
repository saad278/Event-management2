<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <script src="js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/d4dda18e1f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <title>Document</title>
    <title>Document</title>
</head>
<body>
<?php
    include "database.php";
   ?>
   <form action="search.php" method="GET">
   <div class="input-group">
    <input type="text" class="form-control" name="e_name">
    <div class="input-group-append">
    <input type="submit" class="btn btn-success" name="search" value="search">
     </div>
  </div>
   </form>
   <br>
   <?php
   if(isset($_GET["search"])){
    $e_name=$_GET['e_name'];
  $sql ="SELECT e_name FROM events where e_name like '$e_name%' ";
  $result=mysqli_query($conn,$sql);
  if($result->num_rows > 0)
  {
    while($row=$result->fetch_assoc()){
    echo ' 
    <nav class="navbar navbar-expand-sm bg-light navbar-light my-1">
        <ul class="navbar-nav">
          <div class="container">       
    <table class="table">
      <thead>
        <tr>
          <th>name</th>
          
        </tr>
      </thead>
      <tbody>
        <tr>
          
          <td>'.$row['e_name'].'</td>
          
      </tbody>
    </table>
  </div>
  </nav> 
    ';
   }
  }
   }
?>

</body>
</html>