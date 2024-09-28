<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Analyzer</title>
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
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
        <h2>String ANALYZER</h2>
        <form method="post">
            <input type="text" name="string1" placeholder="Enter first string" required>
            <input type="text" name="string2" placeholder="Enter second string" required>
            <button type="submit">Compare Strings</button>
        </form>
        <div class="output">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $string1 = $_POST['string1'];
                $string2 = $_POST['string2'];

    
                $isPresent = strpos($string2, $string1) !== false;

                $areIdentical = strcmp($string1, $string2) === 0;

             
                if ($isPresent) {
                    echo "<p><strong>Result:</strong> '$string1' is present in '$string2'.</p>";
                } else {
                    echo "<p><strong>Result:</strong> '$string1' is NOT present in '$string2'.</p>";
                }

                if ($areIdentical) {
                    echo "<p><strong>Comparison:</strong> The strings are identical.</p>";
                } else {
                    echo "<p><strong>Comparison:</strong> The strings are NOT identical.</p>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
