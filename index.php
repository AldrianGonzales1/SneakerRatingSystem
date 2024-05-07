<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoleScore: The Ultimate Sneaker Grading Hub</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background-image: url('jordan2.jpg'); /* Assuming jordan1.jpg is the filename of the Jordan 1 image */
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        h1 {
            margin-bottom: 20px;
            font-size: 48px; /* Adjust font size as needed */
            color: #ff9100; /* Set text color */
            text-shadow: 
              -1px -1px 0 #000,  
               1px -1px 0 #000,
              -1px  1px 0 #000,
               1px  1px 0 #000; /* Create black border effect */
        }
        .button-container {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>SoleScore: The Ultimate Sneaker Grading Hub</h1>
    <div class="button-container">
        <a href="login.php" class="button">Log In</a>
        <a href="admin_login.php" class="button">Admin Log In</a>
    </div>
</body>
</html>
