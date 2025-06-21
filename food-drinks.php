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
    
  $e_food=$_POST['e_food'];
  $e_drink=$_POST['e_drink'];
  $sql ="INSERT INTO events(e_food,e_drink)
  VALUES('$e_food','$e_drink')";
  
      if($conn->query($sql)===TRUE){
          
          echo "data inserted";
         
      }else
      {
      echo "error".$conn->connect_error;
      }
      
  }
  ?>
    <div class="login-container">
      <h1>food and drinks</h1>
        <form id="eventForm">
            
            
            

            <label for="eventServices">food:</label>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="e_food" value="<?php
                  if(isset($_POST['add'])){
                 echo $e_food;
                  }
                  ?>" required>shawrma
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="e_food" value="<?php
                  if(isset($_POST['add'])){
                 echo $e_food;
                  }
                  ?>" required>grills
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="e_food" value="<?php
                  if(isset($_POST['add'])){
                 echo $e_food;
                  }
                  ?>" required>yalangy
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="e_food" value="<?php
                  if(isset($_POST['add'])){
                 echo $e_food;
                  }
                  ?>" required>rice
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="e_food" value="<?php
                  if(isset($_POST['add'])){
                 echo $e_food;
                  }
                  ?>" required>burger
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="e_food" value="<?php
                  if(isset($_POST['add'])){
                 echo $e_food;
                  }
                  ?>" required>pizza
                </label>
            </div>
            <br>
            <label for="eventServices">drinks:</label>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="e_drink" value="<?php
                  if(isset($_POST['add'])){
                 echo $e_drink;
                  }
                  ?>" required>juices
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="e_drink" value="<?php
                  if(isset($_POST['add'])){
                 echo $e_drink;
                  }
                  ?>">coffees
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="e_drink" value="<?php
                  if(isset($_POST['add'])){
                 echo $e_drink;
                  }
                  ?>">sodas
                </label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="add">Submit Event</button>
        </form>
    </div>

    
</body>
</html>
