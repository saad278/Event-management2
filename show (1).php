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
          <th>place url</th>
          <th>num of attended</th>
          <th>date</th>
          <th>time</th>
          <th>accessoreis</th>
          <th>stuff</th>
          <th>kids room</th>
          <th>comp type</th>
          <th>comp diff</th>
          <th>comp prize</th>
          <th>food</th>
          <th>drink</th>
          <th>car garage type</th>
          <th>car garage service</th>
          <th>car garage fee</th>
          <th>ad</th>
          <th>blogger</th>
          <th>product</th>
          <th>shops</th>
          <th>wifi fee</th
          <th>wifi speed</th>
          <th>timeline</th>
          <th>sponser</th>
          <th>security method</th>
          <th>security level</th>
          <th>security team</th>
          <th>guide duration</th>
          <th>guide method</th>
          <th>guide age</th>

        </tr>
      </thead>
      <tbody>
        <tr>
 <td>'.$row['e_name'].'</td>
    <td>'.$row['e_desc'].'</td>
    <td>'.$row['e_type'].'</td>
    <td>'.$row['e_place'].'</td>
    <td>'.$row['e_place_url'].'</td>
    <td>'.$row['e_attend_num'].'</td>
    <td>'.$row['e_date'].'</td>
    <td>'.$row['e_time'].'</td>
    <td>'.$row['e_accessoreis'].'</td>
    <td>'.$row['e_stuff'].'</td>
    <td>'.$row['e_kids_room'].'</td>
    <td>'.$row['e_comp_type'].'</td>
    <td>'.$row['e_comp_diff'].'</td>
    <td>'.$row['e_comp_prize'].'</td>
    <td>'.$row['e_food'].'</td>
    <td>'.$row['e_drink'].'</td>
    <td>'.$row['e_garage_type'].'</td>
    <td>'.$row['e_garage_service'].'</td>
    <td>'.$row['e_garage_fee'].'</td>
    <td>'.$row['e_ad'].'</td>
    <td>'.$row['e_blogger'].'</td>
  <td>'.$row['e_product'].'</td>
  <td>'.$row['e_num_shops'].'</td>
  <td>'.$row['e_wifi_fee'].'</td>
  <td>'.$row['e_wifi_speed'].'</td>
  <td>'.$row['e_timeline'].'</td>
  <td>'.$row['e_sponser'].'</td>
  <td>'.$row['e_security_method'].'</td>
  <td>'.$row['e_security_level'].'</td>
  <td>'.$row['e_security_team'].'</td>
  <td>'.$row['e_guide_duration'].'</td>
  <td>'.$row['e_guide_age'].'</td>
  <td>'.$row['e_guide_method'].'</td>
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