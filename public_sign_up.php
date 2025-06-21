<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
    <style>
       body {
            background-color: #f8f9fa;
        }
        .login-container {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 50px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .login-header {
            text-align: center;
            margin-bottom: 20px;
        }
        input[type=text] {
  width: 200%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=email] {
  width: 200%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=password] {
  width: 200%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
    </style>
</head>
<body>

<!-- start php register -->
 <?php
include "database.php";
 ?>
<?php
if(isset($_POST["register"]))
{
  
$p_name=$_POST['p_name'];
$p_email=$_POST['p_email'];
$u_password=$_POST['p_password'];
$p_age=$_POST['p_age'];


$sql ="INSERT INTO publics(p_name,p_email,p_password,p_age)VALUES('$p_name','$p_email','$p_password','$p_age')";

    
     
    if($conn->query($sql)===TRUE){
        
        echo "data inserted";
       
    }else
    {
    echo "error".$conn->connect_error;
    }
    
}



?>



<!-- end php register -->
<!-- start register form -->
<div class="login-container">
    <h1>sign up</h1>
    <div class="row">
        <div class="col-6 my-5">
            
            <form action="<?php echo ($_SERVER["PHP_SELF"]);?>" method="post">
                <div class="form-group">
                <label for="name">name:</label>
                    <input type="text" class="form-control" placeholder="Enter name" id="email" name="p_name">
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" placeholder="Enter email" id="email" name="p_email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="u_password">
                </div>
                <div class="form-group">
                <label for="name">age:</label>
                    <input type="text" class="form-control" placeholder="Enter address" id="email" name="u_age">
                </div>
                <button type="submit" class="btn btn-primary" name="register">Submit</button>
            </form>
        </div>
        
    </div>
</div>



<!-- end register form -->





</body>
</html>