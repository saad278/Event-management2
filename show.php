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
    <div class="container">       
    <table class="table">
      <thead>
        <tr>
          <th>name</th>
          <th>desc</th>
          <th>type</th>
          <th>place</th>
          <th>size of place</th>
          <th>num of attended</th>
          <th>date</th>
          <th>time</th>
          <th>type of acc</th>
          <th>amount of acc</th>
          <th>kids room</th>
          <th>comp</th>
          <th>comp diff</th>
          <th>comp prize</th>
          <th>food and drinks</th>
          <th>food and drniks amount</th>
          <th>food and drinks type</th>
          <th>car garage</th>
          <th>ad</th>
          <th>ad com</th>
        </tr>
      </thead>
      <tbody>
        <tr>
 <td>'.$row['e_name'].'</td>
    <td>'.$row['e_desc'].'</td>
    <td>'.$row['e_type'].'</td>
    <td>'.$row['e_place'].'</td>
    <td>'.$row['e_size_of_place'].'</td>
    <td>'.$row['e_num_of_attended'].'</td>
    <td>'.$row['e_date'].'</td>
    <td>'.$row['e_time'].'</td>
    <td>'.$row['e_type_of_acc'].'</td>
    <td>'.$row['e_amount_of_acc'].'</td>
    <td>'.$row['e_kids_room'].'</td>
    <td>'.$row['e_comp'].'</td>
    <td>'.$row['e_comp_diff'].'</td>
    <td>'.$row['e_comp_prize'].'</td>
    <td>'.$row['e_food_drinks'].'</td>
    <td>'.$row['e_food_drinks_amount'].'</td>
    <td>'.$row['e_food_drinks_type'].'</td>
    <td>'.$row['e_car_garage'].'</td>
    <td>'.$row['e_ad'].'</td>
    <td>'.$row['e_ad_com'].'</td>
  
    </tbody>
    </table>
  </div>
</ul>
</nav>
    ';
  }
}
}
   ?>
   
</body>
</html>