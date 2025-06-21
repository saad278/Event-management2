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
      <h1>bazar</h1>
        <form id="eventForm">
            
            
            

            <label for="eventServices">products:</label>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="">food
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="">accessoreis and tools
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="">makeup and beauty
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="">figures and stickers
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="">clothes
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="">drawings and frames
                </label>
            </div>
            <br>
            <label for="eventServices">number of shops:</label>
            <select id="eventServices" name="eventServices" required>
                <option value="catering">10</option>
                <option value="decorations">20</option>
                <option value="entertainment">40</option>
                <option value="transportation">70</option>
            </select>
            <br>
            <br>
            <button type="submit" class="btn btn-primary">Submit Event</button>
        </form>
    </div>

    
</body>
</html>
