<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Username Extractor</title>
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
            width: 300px;
            text-align: center;
        }
        input[type="text"] {
            width: 80%;
            padding: 10px;
            margin-bottom: 10px;
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
        }
        .output {
            margin-top: 15px;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Email Username Extractor</h2>
        <form method="post">
            <input type="text" name="email" placeholder="Enter your email" required>
            <button type="submit">Extract Username</button>
        </form>
        <div class="output">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $email = $_POST['email'];
                $username = strstr($email, '@', true); // Extracts the username
                if ($username) {
                    echo "Username: " . htmlspecialchars($username);
                } else {
                    echo "Invalid email format.";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
