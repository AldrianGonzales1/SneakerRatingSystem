<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrative Dashboard</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background-image: url('mike4.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
        }
        h1 {
            font-size: 36px;
            margin-bottom: 30px;
            color: #ff9100; /* Changed color to #ff9100 */
            text-shadow: 2px 2px 0px #000000; /* Added text-shadow */
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
            background-color: #ff9100;
            color: #ffffff;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #ff7500;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Administrative Dashboard</h1>
        <div class="button-container">
            <a href="add_shoes.php" class="button">Add Sneaker</a>
            <a href="delete_shoes.php" class="button">Delete Sneaker</a>
            <a href="view_shoes.php" class="button">View Shoes</a>
           
        </div>
    </div>
</body>
</html>
