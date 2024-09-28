<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FULL NAME ANALYZER</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 2px 2px 8px cyan;
            width: 400px;
            text-align: center;
        }
        input[type="text"] {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
      
        .output {
            margin-top: 15px;
            font-size: 1.2em;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Full Name Analyzer</h2>
        <form method="post">
            <input type="text" name="fullname" placeholder="Enter your full name" required>
            <button type="submit">Submit</button>
        </form>
        <div class="output">
            <?php
            $fullname = $_POST['fullname'] ?? '';
            $words = explode(" ", $fullname);
            $charCount = strlen(str_replace(" ", "", $fullname));

            echo "<p><strong> Split Words:</strong> " . implode(", ", $words) . "</p>";
            echo "<p><strong>Total Characters (excluding spaces):</strong> " . $charCount . "</p>";
            ?>
        </div>
    </div>
</body>
</html>
