<?php
  $name = $_POST['name'];
  $age = $_POST['age'];
  $gender = $_POST['sex'];
  $address = $_POST['address'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Name Card</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f2f5;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .card {
            background: white;
            width: 350px;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            border-left: 8px solid #007BFF;
        }
        .name {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
            border-bottom: 2px solid #eee;
            padding-bottom: 5px;
        }
        .info-row {
            margin: 8px 0;
            color: #555;
            display: flex;
        }
        .label {
            font-weight: bold;
            width: 80px;
            color: #007BFF;
        }
        .value {
            flex: 1;
        }
    </style>
</head>
<body>
    <div style="position: absolute; top: 5px; left: 10px;">
      <a href="namecard-input.php">Back</a>
    </div>
    <div class="card">
        <div class="name"><?= $name ?></div>
        
        <div class="info-row">
            <span class="label">Age:</span>
            <span class="value"><?= $age ?></span>
        </div>
        
        <div class="info-row">
            <span class="label">Gender:</span>
            <span class="value"><?= $gender ?></span>
        </div>
        
        <div class="info-row">
            <span class="label">Address:</span>
            <span class="value"><?= $address ?></span>
        </div>
    </div>

</body>
</html>
