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
    <h1>select service:</h1>
    <nav class="navbar navbar-expand-sm bg-light navbar-light my-1">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="food-drinks.php?id='.$row['e_id'].'">food and drinks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="select city.php?id='.$row['e_id'].'">choose city</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="time.php?id='.$row['e_id'].'">time</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="wifi.php?id='.$row['e_id'].'">wifi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="timeline.php?id='.$row['e_id'].'">timeline</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sponser.php?id='.$row['e_id'].'">sponser</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="security.php?id='.$row['e_id'].'">security</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="event_guide.php?id='.$row['e_id'].'">guide</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="compitions_and_prizes.php?id='.$row['e_id'].'">compitions and prizes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="children_rooms.php?id='.$row['e_id'].'">kids rooms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="car_garage.php?id='.$row['e_id'].'">garage</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="bazar.php?id='.$row['e_id'].'">bazar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="attendence.php?id='.$row['e_id'].'">attendence</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="accessoreis.php?id='.$row['e_id'].'">accessoreis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rate.php?id='.$row['e_id'].'">rate</a>
          </li>
        </ul>
      </nav> ';
    }
  }
}
      ?>
</body>
</html>