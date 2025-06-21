<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Event Management</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 100px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .login-header {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<?php

include "database.php";
?>
<?php 



if(isset($_GET['id'])){
$id=$_GET['id'];}
$query = "select * from events where 'e_id' = '$id'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
?>
<?php 
if(isset($_POST["add"]))
{
  
$e_garage_type=$_POST['e_garage_type'];
$e_garage_service=$_POST['e_garage_service'];
$e_garage_fee=$_POST['e_garage_fee'];
$sql ="UPDATE events 
set e_garage_type='$e_garage_type',e_garage_service='$e_garage_service',e_garage_fee='$e_garage_fee'
where e_id='$id'";
    if($conn->query($sql)===TRUE){
        
        echo "data inserted";
       
    }else
    {
    echo "error".$conn->connect_error;
    }
    
}
?>   
    <div class="login-container">
      <h1>car garage</h1>
      <form action="car_garage?id=<?php echo $id; ?>" method="post">
            
            
            

            <label for="eventServices">garage type:</label>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_garage_type" value="indoor garage">indoor garage
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_garage_type" value="outdoor garage">outdoor garage
                </label>
            </div>
            <br>
            <label for="eventServices">garage services:</label>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_garage_service" value="washing">washing
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_garage_service" value="indoor cleaning">indoor cleaning
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_garage_service" value="washing and indoor cleaning">washing and indoor cleaning
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_garage_service" value="none">none
                </label>
            </div>
            <br>
            <label for="eventServices">garage fee per hour:</label>
            <select id="eventServices" name="e_garage_fee">
                <option value="free">free</option>
                <option value="500">500</option>
                <option value="1000">1000</option>
                <option value="2000">2000</option>
                <option value="5000">4000</option>
            </select>
            <br>
            <br>
            <button type="submit" class="btn btn-primary" name="add">Submit Event</button>
        </form>
    </div>

    
</body>
</html>
