<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Checker</title>
    <style>
        /* Global Styles */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('background.jpg'); /* Replace with your background image URL */
            background-size: cover;
            background-position: center;
            color: #fff;
        }

        /* Header Styles */
        header {
            background-color: white;
            text-align: center;
            padding: 20px 0;
        }

        header img {
            width: 40%; /* Adjust the size as needed */
        }

        /* Form Container Styles */
        .form-container {
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        /* Form Styles */
        form {
            text-align: center;
        }

        h2 {
            color: #333;
        }

        h1 {
            color: #333;
        }

        /* Input Styles */
        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 80%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Button Styles */
        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Add more CSS for your result display as needed */

    </style>
</head>
<body>
    <header>
    <a href="index.php"><img src="images/logob.png" alt="Logo"></a> <!-- Replace with your logo image URL -->
       
    </header>

    <div class="form-container">
        <form>
            <h2>Check Your Result</h2>
            <label for="rollNumber">Roll Number:</label>
            <input type="text" id="rollNumber" name="rollNumber" placeholder="Enter your roll number">

            <input type="submit" value="Check Result">
        </form>
    </div>
</body>
</html>
