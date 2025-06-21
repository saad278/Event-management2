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
    <div class="login-container">
        <h1>select sponser</h1>
    
    <div class="login-container">
        <form id="eventForm">
            
            <div class="form-group">
                <label for="eventServices">sponsers:</label>
                <select id="eventServices" name="eventServices" required>
                    <option value="sidy hesham">sidy hesham</option>
                    <option value="adidas">adidas</option>
                    <option value="hawa al sham">hawa al sham</option>
                    <option value="fly damascus">fly damascus</option>
                </select>
            </div>
            
            
           
            <button type="submit" class="btn btn-primary">Submit Event</button>
        </form>
    </div>

    
    
</body>
</html>
