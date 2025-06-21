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
    
  $e_accessoreis=$_POST['e_accessoreis'];
  $e_stuff=$_POST['e_stuff'];
  $sql ="INSERT INTO events(e_accessoreis,e_stuff)
  VALUES('$e_accessoreis','$e_stuff')";
  
      if($conn->query($sql)===TRUE){
          
          echo "data inserted";
         
      }else
      {
      echo "error".$conn->connect_error;
      }
      
  }
  ?>
    <div class="login-container">
      <h1>accessoreis and stuff</h1>
        <form id="eventForm">
            
            
            

            <label for="eventServices">accessoreis type:</label>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_accessoreis" value="<?php
                  if(isset($_POST['add'])){
                 echo $e_accessoreis;
                  }
                  ?>">traditional
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_accessoreis" value="<?php
                  if(isset($_POST['add'])){
                 echo $e_accessoreis;
                  }
                  ?>">modern
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_accessoreis" value="<?php
                  if(isset($_POST['add'])){
                 echo $e_accessoreis;
                  }
                  ?>">simple
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_accessoreis" value="<?php
                  if(isset($_POST['add'])){
                 echo $e_accessoreis;
                  }
                  ?>">luxor
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_accessoreis" value="<?php
                  if(isset($_POST['add'])){
                 echo $e_accessoreis;
                  }
                  ?>">old style
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_accessoreis" value="<?php
                  if(isset($_POST['add'])){
                 echo $e_accessoreis;
                  }
                  ?>">royal
                </label>
            </div>
            <br>
            <label for="eventServices">stuff:</label>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_stuff" value="<?php
                  if(isset($_POST['add'])){
                 echo $e_stuff;
                  }
                  ?>">ballons
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_stuff" value="<?php
                  if(isset($_POST['add'])){
                 echo $e_stuff;
                  }
                  ?>">paints
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_stuff" value="<?php
                  if(isset($_POST['add'])){
                 echo $e_stuff;
                  }
                  ?>">figures
                </label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="add">Submit Event</button>
        </form>
    </div>

    
</body>
</html>
