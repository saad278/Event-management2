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
      <h1>security</h1>
        <form id="eventForm">
            
            
            

            <label for="eventServices">security method:</label>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="">cameras
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="">security guards
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="">police
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="">dogs
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="">drones
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="">alert devices
                </label>
            </div>
            <br>
            <label for="eventServices">security level:</label>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="security level" value="">low
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="security level" value="">medium
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="security level" value="">high
                </label>
            </div>
            <br>
            <label for="eventServices">security team:</label>
            <select id="eventServices" name="e_place" value="">
                <option value="general security-0993642111">general security-0993642111</option>
                <option value="al jabal-0993744033">al jabal-0993744033</option>
                <option value="black ops-0996903261">black ops-0996903261</option>
                <option value="white hemlets-0998835031">white helmets-0998835031</option>
            </select>
            <br>
            <br>
            <button type="submit" class="btn btn-primary">Submit Event</button>
            </form>
        </div>
</body>
</html>
