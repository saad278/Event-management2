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
input[type=datetime-local] {
 width: 100%;
 padding: 12px 20px;
 margin: 8px 0;
 box-sizing: border-box;
}
    </style>
</head>
<body>
    <div class="login-container">
        <h1>time and attendance</h1>
    </div>
    
    <div class="login-container">
        <form id="eventForm">
            
            
            <div class="form-group">
                <label for="eventTime">Event Time:</label>
                <input type="datetime-local" id="eventTime" name="eventTime" required>
            </div>
            <div class="form-group">
                <label for="name">time:</label>
                <select id="eventServices" name="e_time"
                value="<?php
                if(isset($_POST['add'])){
               echo $e_time;
                }
                ?>">
                <option value="1:00-3:00 pm">1:00-3:00 pm</option>
                <option value="3:00-5:00 pm">3:00-5:00 pm</option>
                <option value="5:00-7:00 pm">5:00-7:00 pm</option>
                <option value="7:00-9:00 pm">7:00-9:00 pm</option>
            </select>
            </div>
            <label for="eventServices">attendance:</label>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="">1-50
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="">51-100
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="">101-200
                </label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit Event</button>
        </form>
    </div>

    <div class="footer">
        <p>Event Management System &copy; 2024</p>
    </div>

    <script>
        document.getElementById('eventForm').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Event submitted successfully!');
        });
    </script>
    
</body>
</html>
