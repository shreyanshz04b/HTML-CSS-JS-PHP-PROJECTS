

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Price Calculator</title>
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
            border-radius: 10px;
            box-shadow: 2px 2px 8px cyan;
            width: 300px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="number"] {
            width: calc(100% - 10px);
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
            text-align: center;
            margin-top: 15px;
        }
        .result {
            color: green;
            text-align: center;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Price Calculator</h2>
        <form action="" method="post">
            <label for="originalPrice">Original Price:</label>
            <input type="number" id="originalPrice" name="originalPrice" required>

            <label for="discountAmount">Discount Amount (%):</label>
            <input type="number" id="discountAmount" name="discountAmount" required>

            <label for="taxRate">Tax Rate (%):</label>
            <input type="number" id="taxRate" name="taxRate" required>

            <input type="submit" name="submit" value="Calculate Final Price">
        </form>
        <?php

function calculateFinalPrice($originalPrice, $discountAmount, $taxRate) {

    $discount = ($originalPrice / 100) * $discountAmount;
    
  
    $priceAfterDiscount = $originalPrice - $discount;
    

    $tax = ($priceAfterDiscount / 100) * $taxRate;
    
 
    $finalPrice = $priceAfterDiscount + $tax;
    
    return $finalPrice;
}

if (isset($_POST['submit'])) {
    $originalPrice = $_POST['originalPrice'];
    $discountAmount = $_POST['discountAmount'];
    $taxRate = $_POST['taxRate'];
    

    if ($originalPrice <= 0 || $discountAmount < 0 || $taxRate < 0) {
        echo "<div class='error'>Please enter valid numbers for the original price, discount amount, and tax rate.</div>";
    } else {
       
        $finalPrice = calculateFinalPrice($originalPrice, $discountAmount, $taxRate);
        
        echo "<div class='result'>The final price of the item is Rs" . number_format($finalPrice, 2) . "</div>";
    }
}
?>
    </div>
</body>
</html>
