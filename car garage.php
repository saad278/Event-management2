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
      <h1>car garage</h1>
        <form id="eventForm">
            
            
            

            <label for="eventServices">garage type:</label>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="garage" value="toys">indoor garage
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="garage" value="video games">outdoor garage
                </label>
            </div>
            <br>
            <label for="eventServices">garage services:</label>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="garage service" value="toys">washing
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="garage service" value="video games">indoor cleaning
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="garage service" value="video games">washing and indoor cleaning
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="garage service" value="video games">none
                </label>
            </div>
            <br>
            <label for="eventServices">garage fee per hour:</label>
            <select id="eventServices" name="e_place" value="">
                <option value="free">free</option>
                <option value="500">500</option>
                <option value="1000">1000</option>
                <option value="2000">2000</option>
                <option value="5000">4000</option>
            </select>
            <br>
            <br>
            <button type="submit" class="btn btn-primary">Submit Event</button>
        </form>
    </div>

    
</body>
</html>
