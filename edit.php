<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        .header, .footer {
            
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
        .form-group {
            margin: 15px 0;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="datetime-local"], select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            background: #333;
            color: #fff;
            border: none;
            margin-top: 10px;
            cursor: pointer;
        }
        button:hover {
            background: #555;
        }
    </style>
<body>
<?php

include "database.php";
?>

<?php 

if(isset($_POST["edit"])){ 
$id=$_GET["id"];

 
$e_name=$_POST['e_name'];
$e_desc=$_POST['e_desc'];
$e_type=$_POST['e_type'];
$e_num_of_attended=$_POST['e_num_of_attended'];
$e_size_of_place=$_POST['e_size_of_place'];
$e_place=$_POST['e_place'];
$e_date=$_POST['e_date'];
$e_time=$_POST['e_time'];
$e_type_of_acc=$_POST['e_type_of_acc'];
$e_amount_of_acc=$_POST['e_amount_of_acc'];
$e_kids_room=$_POST['e_kids_room'];
$e_comp=$_POST['e_comp'];
$e_comp_diff=$_POST['e_comp_diff'];
$e_comp_prize=$_POST['e_comp_prize'];
$e_food_drinks=$_POST['e_food_drinks'];
$e_food_drinks_amount=$_POST['e_food_drinks_amount'];
$e_food_drinks_type=$_POST['e_food_drinks_type'];
$e_car_garage=$_POST['e_car_garage'];
$e_ad=$_POST['e_ad'];
$e_ad_com=$_POST['e_ad_com'];

$sql=" update events
set e_name='$e_name',
e_desc='$e_desc',
e_type='$e_type',
e_num_of_attended='$e_num_of_attended',
e_size_of_place='$e_size_of_place',
e_place='$e_place',
e_date='$e_date',
e_time='$e_time',
e_type_of_acc='$e_type_of_acc',
e_amount_of_acc='$e_amount_of_acc',
e_kids_room='$e_kids_room',
e_comp='$e_comp',
e_comp_diff='$e_comp_diff',
e_comp_prize='$e_comp_prize',
e_food_drinks='$e_food_drinks',
e_food_drinks_amount='$e_food_drinks_amount',
e_food_drinks_type='$e_food_drinks_type',
e_car_garage='$e_car_garage',
e_ad='$e_ad',
e_ad_com='$e_ad_com'
where e_id=$id";

    
     
    if($conn->query($sql)===TRUE){
        
        echo "data updated";
       
    }else
    {
    echo "error".$conn->connect_error;
    }
  }
  ?>

<?php echo '
<div class="container">
    <div class="row">
        <div class="col-6 my-5">
            
        <form action="'.$_SERVER["PHP_SELF"].'" method="post">
                <div class="form-group">
                <label for="name">name:</label>
                    <input type="text" class="form-control" placeholder="Enter name" id="email" name="e_name" >
                </div>
                <div class="form-group">
                    <label for="text">description:</label>
                    <input type="text" class="form-control" placeholder="Enter desc" id="email" name="e_desc"
                    >
                </div>
                <div class="form-group">
                    <label for="name">type:</label>
                    <select id="eventServices" name="e_type"
                    >
                    
                    
                    <option value="social">social</option>
                    <option value="sport">sport</option>
                    <option value="science">science</option>
                    <option value="other">other</option>
                </select>
                </div>
                <div class="form-group">
                <label for="name">size:</label>
                <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" value="small" name="e_size_of_place"
                   >small
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" value="medium" name="e_size_of_place"
                  >medium
                </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" value="big" name="e_size_of_place"
                  >big
                </label>
                <div class="form-group">
                    <label for="name">place:</label>
                    <select id="eventServices" name="e_place"
                    value="$e_place ">
                    <option value="dunes-mazzah">dunes-mazzah</option>
                    <option value="barada-mazraa">barada-mazraa</option>
                    <option value="uptown-mashroo3 dummar">uptown-mashroo3 dummar</option>
                    <option value="damaskino-kafarsoseh">damaskino-kafarsoseh</option>
                </select>
                </div>
                <div class="form-group">
                <label for="name">number of attended:</label>
                <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" value="1-50" name="e_num_of_attended"
                  >1-50
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" value="51-100" name="e_num_of_attended"
                  >51-100
                </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" value="101-250" name="e_num_of_attended"
                  >101-250
                </label>
                <div class="form-group">
                <label for="name">date:</label>
                    <input type="datetime-local" class="form-control" placeholder="Enter time" id="email" name="e_date"
                    >
                </div>
                <div class="form-group">
                    <label for="name">time:</label>
                    <select id="eventServices" name="e_time"
                     >
                    <option value="1:00-3:00 pm">1:00-3:00 pm</option>
                    <option value="3:00-5:00 pm">3:00-5:00 pm</option>
                    <option value="5:00-7:00 pm">5:00-7:00 pm</option>
                    <option value="7:00-9:00 pm">7:00-9:00 pm</option>
                </select>
                </div>
                <div class="form-group">
                <label for="name">garage:</label>
                <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" value="yes" name="e_car_garage"
                  >yes
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" value="no" name="e_car_garage"
                  >no
                </label>
                </div>
                <div class="form-group">
                <label for="name">acc:</label>
                <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" value="classic" name="e_type_of_acc"
                  >classic
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" value="modern" name="e_type_of_acc"
                  >modern
                </label>
                </div>
                <div class="form-group">
                <label for="name">acc amount:</label>
                <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" value="few" name="e_amount_of_acc"
                  >few
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" value="med" name="e_amount_of_acc"
                  >med
                </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" value="a lot" name="e_amount_of_acc"
                  >a lot
                </label>
                </div>
                <div class="form-group">
                <label for="name">kids room:</label>
                <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" value="yes" name="e_kids_room"
                  >yes
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" value="no" name="e_kids_room"
                  >no
                </label>
                </div>
                <div class="form-group">
                <label for="name">comp:</label>
                <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" value="yes" name="e_comp"
                  >yes
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" value="no" name="e_comp"
                  >no
                </label>
                </div>
                <div class="form-group">
                <label for="name">comp diff:</label>
                <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" value="easy" name="e_comp_diff"
                  >easy
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" value="med" name="e_comp_diff"
                  >med
                </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" value="hard" name="e_comp_diff"
                  >hard
                </label>
                </div>
                <div class="form-group">
                    <label for="name">comp prize:</label>
                    <select id="eventServices" name="e_comp_prize"
                    value=" $e_comp_prize ">
                    <option value="50000">50000</option>
                    <option value="100000">100000</option>
                    <option value="200000">200000</option>
                    <option value="400000">400000</option>
                </select>
                </div>
                <div class="form-group">
                <label for="name">food and drinks:</label>
                <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" value="yes" name="e_food_drinks"
                  >yes
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" value="no" name="e_food_drinks"
                  >no
                </label>
                </div>
                <div class="form-group">
                <label for="name">food and drinks amount:</label>
                <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" value="few" name="e_food_drinks_amount"
                  >few
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" value="med" name="e_food_drinks_amount"
                  >med
                </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" value="a lot" name="e_food_drinks_amount"
                  >a lot
                </label>
                </div>
                <div class="form-group">
                <label for="name">food and drinks type:</label>
                <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" value="grills-non alcohol" name="e_food_drinks_type"
                  >grills-non-alcohol
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" value="grills-alcohol" name="e_food_drinks_type"
                  >grills-alcohol
                </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" value="orient-non alcohol" name="e_food_drinks_type"
                  >orient-non alcohol
                </label>
                </div>
                <div class="form-group">
                    <label for="name">ad:</label>
                    <select id="eventServices" name="e_ad"
                    >
                    <option value="social media">social media</option>
                    <option value="posters">posters</option>
                </select>
                </div>
                <div class="form-group">
                    <label for="name">ad com:</label>
                    <select id="eventServices" name="e_ad_com"
                    >
                    <option value="saadon-0993652111">saadon-0993642111</option>
                    <option value="toteh-3448129">toteh-3448129</option>
                    <option value="zeko-3452770">zeko-3452770</option>
                    <option value="mero-0932801202">mero-0932801202</option>
                </select>
                </div>
                
                <button type="submit" class="btn btn-primary" name="edit">Submit</button>
         
          
            </form>
        </div>
        
    </div>
</div>
  ';
  ?>

</body>
</html>