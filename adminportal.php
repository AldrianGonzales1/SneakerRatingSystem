<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background-image: url('mike4.jpg'); /* Background photo */
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
            color: orange; /* Text color */
            text-shadow: 2px 2px 4px black; /* Black stroke around the text */
        }
        h1 {
            font-size: 36px;
            margin-bottom: 30px;
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
        <h1>Hello Admin!</h1>
        <div class="button-container">
            <a href="adminpage.php" class="button">Admin Main Page</a>
            <a href="homepage.php" class="button">Main Page</a>
        </div>
    </div>
</body>
</html>
