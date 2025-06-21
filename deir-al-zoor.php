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
if(isset($_POST["add"]))
{
  
$e_place=$_POST['e_place'];
$sql ="INSERT INTO events(e_place)
VALUES('$e_place')";

    if($conn->query($sql)===TRUE){
        
        echo "data inserted";
       
    }else
    {
    echo "error".$conn->connect_error;
    }
    
}
?>
    <div class="login-container">
        <h1>choose place</h1>
    
    <div class="login-container">
        <form id="eventForm">
            
            <div class="form-group">
                <label for="eventServices" value="<?php
                if(isset($_POST['add'])){
               echo $e_place;
                }
                ?>" required>place:</label>
                <select id="eventServices" name="e_place">
                    <option value="catering">ta3lela-rushdeya</option>
                    <option value="decorations">ayam zaman-haweqa</option>
                    <option value="entertainment">alnakheel-korneesh</option>
                    <option value="transportation">cultural center-rushdeya</option>
                </select>
            </div>
            
            
           
            <button type="submit" class="btn btn-primary" name="add">Submit Event</button>
        </form>
    </div>

    
    
</body>
</html>
