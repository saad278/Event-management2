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
   if(isset($_POST["delete"])){
    $id=$_POST["id"];
    $sql="delete from events where e_id=$id";
    if($conn->query($sql)===TRUE){
        
      echo "event deleted";
     
  }else
  {
  echo "error".$conn->connect_error;
  }
      }
   ?>
   <?php
  $sql="select e_id,e_name,e_type,e_place,e_date,e_time from events";
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
          <th>type</th>
          <th>place</th>
          <th>date</th>
          <th>time</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>'.$row['e_name'].'</td>
          <td>'.$row['e_type'].'</td>
          <td>'.$row['e_place'].'</td>
          <td>'.$row['e_date'].'</td>
          <td>'.$row['e_time'].'</td>
      </tbody>
    </table>
  </div>
           <form action="'.$_SERVER["PHP_SELF"].'" method="post">
           <div class="form-group">
          <input type="hidden" id="id" name="id" value="'.$row["e_id"].'">
          </form>
          <input class="btn btn-danger" type="submit" name="delete" value="delete">
          </div>
          </ul>
      </nav> 
      
    ';
  }
}



   ?>
   
</body>
</html>