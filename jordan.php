
<!DOCTYPE html>
<html>
<head>

  <title>Shoe Review</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>


 footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
         body {
     background-color : #00008B;
      background-size: cover;
      opacity:1.11; 
      color:white;      
    }

        body {
            font-family: Arial, sans-serif;
            color:white;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            margin: 20px 0;
        }
        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 70%;
            height: 200px;
            overflow: scroll;
        
        }
        th {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: left;
            font-weight: normal;
        }
        td {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        .time {
            font-weight: bold;
        }
        .event {
            font-weight: bold;
            color: white;
        }
        .description {
            color: white;
        }
         @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
</style>
</head>
</body>
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
        <li class="active"><a href="homepage_admin.php">Home</a></li>
      <li><a href="view_shoes.php">View Shoes</a></li>
       <li><a href="adminportal.php">Admin</a></li>       
      <li><a href="lebron.php">LeBron James</a></li>
      <li><a href="jordan.php">Michael Jordan</a></li>
      <li><a href="kobe.php">Kobe Bryant</a></li>
  <li><a href="durant.php">Kevin Durant</a></li>
  <li><a href="kyrie.php">Kyre Irving</a></li>
  <li><a href="giannis.php">Giannis Antetokounmpo</a></li>
   <li><a href="logout.php">Log Out</a></li>
      </ul>
      </ul>
    </div>
  </div>
</nav>
<br>
 <header>

<h1>Jordan Shoes</h1>

</header>

</header>
</center>


<table>
    <?php
$servername = "localhost"; 
  $username = "mgs_user"; 
  $password = "pa55word"; 
  $databasename = "php123"; 
  
  // create connection
  $conn = mysqli_connect($servername,  
    $username, $password, $databasename); 
  
   
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare the statement
$stmt = mysqli_prepare($conn, "SELECT * FROM Shoe WHERE ShoeBrand = ?");
$ShoeBrand = "Jordan"; // The brand you want to search for
mysqli_stmt_bind_param($stmt, "s", $ShoeBrand);

// Execute the query
mysqli_stmt_execute($stmt);

// Get the result
$result = mysqli_stmt_get_result($stmt);

// Display results in an HTML table
if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>
            <tr>
                
                <th>Shoe ID</th>
                <th>Shoe Name</th>
                <th>Description</th>
            </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['ShoeID']}</td>
                <td>{$row['ShoeName']}</td>
                <td>{$row['Description']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No results found.";
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
           
     




</body>
</html>