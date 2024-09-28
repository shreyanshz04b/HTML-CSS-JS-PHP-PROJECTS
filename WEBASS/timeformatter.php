<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $compactTimestamp = $_POST['compactTimestamp'];
  $hour = substr($compactTimestamp, 0, 2);
  $minute = substr($compactTimestamp, 2, 2);
  $second = substr($compactTimestamp, 4, 2);
  $readableTimestamp = sprintf("%s:%s:%s", $hour, $minute, $second);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TIME FORMATTER</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
    }
    .container {
      max-width: 500px;
      margin: 40px auto;
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .header {
      text-align: center;
      margin-bottom: 20px;
    }
    .header h1 {
      font-size: 24px;
      font-weight: bold;
      color: #333;
    }
    .form-group {
      margin-bottom: 20px;
    }
    .form-group label {
      font-weight: bold;
      margin-bottom: 10px;
    }
    .form-group input[type="text"] {
      width: 100%;
      height: 40px;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .form-group button[type="submit"] {
      width: 100%;
      height: 40px;
      padding: 10px;
      font-size: 16px;
      background-color:skyblue;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
   
    .output {
      margin-top: 20px;
      padding: 20px;
      background-color: #f9f9f9;
      border: 1px solid #ddd;
      border-radius: 10px;
    }
    .output label {
      font-weight: bold;
      margin-bottom: 10px;
    }
    .output p {
      font-size: 18px;
      color: #666;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>TIME FORMATTER</h1>
    </div>
    <form method="post">
      <div class="form-group">
        <label>Enter a 6 digit time(eg:-062111):</label>
        <input type="text" name="compactTimestamp" required>
      </div>
      <div class="form-group">
        <button type="submit">Time Format</button>
      </div>
    </form>
    <?php if (isset($readableTimestamp)) { ?>
      <div class="output">
        <label>FORMATTED TIME:</label>
        <p><?php echo $readableTimestamp; ?></p>
      </div>
    <?php } ?>
  </div>
</body>
</html>