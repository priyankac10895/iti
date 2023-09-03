<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Payment Form</title>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color:;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        header {
            background-color: white;
            text-align: center;
            padding: 20px 0;
        }

        header img {
            width: 40%; /* Adjust the size as needed */
        }
    </style>
</head>

<header>
    <a href="index.php"><img src="images/logob.png" alt="Logo"></a> <!-- Replace with your logo image URL -->
        
    </header>
<body>
    <div class="container">
    <h2>Pay Online</h2>
        <form action="process_payment.php" method="post">
            <label for="card_number">Credit Card Number:</label>
            <input type="text" id="card_number" name="card_number" required>

            <label for="exp_date">Expiration Date:</label>
            <input type="text" id="exp_date" name="exp_date" placeholder="MM/YY" required>

            <label for="cvv">CVV:</label>
            <input type="number" id="cvv" name="cvv" required>

            <label for="billing_address">Billing Address:</label>
            <input type="text" id="billing_address" name="billing_address" required>

            <label for="amount">Amount:</label>
            <input type="number" id="amount" name="amount" required>

            <input type="submit" value="Pay Now">
        </form>
    </div>
</body>
</html>
