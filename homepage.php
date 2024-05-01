<!DOCTYPE html>
<html lang="en">

  <title>Athlete Signature Lines</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>

        body {
            margin: 0;
            padding: 0;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
        .container {
            text-align: center;
            padding-top: 100px;
        }
        h1 {
            font-size: 48px;
            color: #ff9100;
            margin-bottom: 30px;
        }
        .dropdown {
            display: inline-block;
            position: relative;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 200px;
            z-index: 1;
            border-radius: 5px;
            padding: 10px;
            text-align: left;
        }
        .dropdown-content a {
            display: block;
            padding: 10px;
            color: #ff9100;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .dropdown-content a:hover {
            background-color: #ff7500;
            color: #ffffff;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
   
    .row.content {height: 450px}
    
   
    .sidenav {
      
      background-color: #9dd0e1;
      height: 100%;
    }
    
   
    
  
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
 
  }
 



  </style>

<head>

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     
    </div>
    <div class="collapse navbar-collapse" id="HOME">
      <ul class="nav navbar-nav">
      <li class="active"><a href="homepage.php">Home</a></li>
      <li><a href="view_shoes.php">View Shoes</a></li>
      <li><a href="products.php">Product List</a></li>
      <li><a href="adminportal.php">Admin</a></li>     
      <li><a href="lebron.php">LeBron James</a></li>
      <li><a href="jordan.php">Michael Jordan</a></li>
  <li><a href="durant.php">Kevin Durant</a></li>
  <li><a href="kyrie.php">Kyre Irving</a></li>
  <li><a href="giannis.php">Giannis Antetokounmpo</a></li>
    <li><a href="faq.php">FAQ</a></li>
  <li><a href="logout.php">Log Out</a></li>
     
      </ul>
    </div>
  </div>
</head>
</nav>
<div class="header">
  <body>
    <div class="container">
        <h1>Athletes Signature Lines</h1>
        <div class="dropdown">
            <span>Select Athletes Signature Sneaker Line:</span>
            <div class="dropdown-content">
                <a href="#" onmouseover="changeBackground('mike4.jpg')">Micheal Jordan</a>
                <a href="#" onmouseover="changeBackground('kobe.jpg')">Kobe Bryant</a>
                <a href="#" onmouseover="changeBackground('lebron.jpg')">Lebron James</a>
                <a href="#" onmouseover="changeBackground('kd.jpg')">Kevin Durant</a>
                <a href="#" onmouseover="changeBackground('kyrie.jpg')">Kyrie Irving</a>
                <a href="#" onmouseover="changeBackground('giannis.jpg')">Giannis Antetokounmpo</a>
            </div>
        </div>
    </div>

    <script>
        function changeBackground(image) {
            document.body.style.backgroundImage = `url('${image}')`;
        }
    </script>

<body>


  

 <form action="login.php" = method="post">
  </div>
</form>


<main>
</main>


 



</body>
</html>