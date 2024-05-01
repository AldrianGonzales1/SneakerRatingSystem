

<?php
$servername = "localhost"; 
  $username = "root"; 
  $password = ""; 
  $databasename = "php123"; 
  
  // create connection
  $conn = mysqli_connect($servername,  
    $username, $password, $databasename); 
  
   
  if (!$conn) { 
      die("Connection failed: " . mysqli_connect_error()); 
  } 
  
  // sql query to only choose 'Lebron' shoes
  $query = "SELECT ShoeID, ShoeBrand, ShoeName, Description FROM Shoe WHERE ShoeBrand = 'Kyrie'"; 
  
  try 
  { 
      $conn = new PDO( 
        "mysql:host=$servername;dbname=$databasename",  
        $username, $password); 
  
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
      $stmt = $conn->prepare($query); 
      // EXECUTING THE QUERY 
      $stmt->execute(); 
  
      $r = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
      // FETCHING DATA FROM DATABASE 
      $result = $stmt->fetchAll(); 
      // OUTPUT DATA OF EACH ROW 
      
  } catch(PDOException $e) { 
      echo "Error: " . $e->getMessage(); 
  } 
  

?>


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
      background-image: url('rise-of-digital-twins%20final%20image.webp');
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
        <li class="active"><a href="homepage.php">Home</a></li>
      <li><a href="view_shoes.php">View Shoes</a></li>   
      <li><a href="lebron.php">LeBron James</a></li>
      <li><a href="jordan.php">Michael Jordan</a></li>
  <li><a href="durant.php">Kevin Durant</a></li>
  <li><a href="kyrie.php">Kyre Irving</a></li>
  <li><a href="giannis.php">Giannis Antetokounmpo</a></li>
  <li><a href="faq.php">FAQ</a></li>
   <li><a href="logout.php">Log Out</a></li>
      </ul>
      </ul>
    </div>
  </div>
</nav>
<br>
 



<main>
<center>

   <header>
<h1>My Shoes</h1>

</header>
</center>

      <aside>
<h2><a href="add_shoes.php">Add A New Shoe</a></h2> 
  <h3>  <a href= "index.php"> Go back to Homepage</a></h3>
        
  <table>
            <thead>
            <tr>
            <th colspan="4"> 
            </th>
            </tr>
          </thead>      
         <tbody><tr> 
                
                <th>Shoe Brand</th>
                <th>Shoe ID</th>
                <th>Shoe Name</th>
                <th>Description</th>
                   
           
                
            </tr>
            
            <?php  foreach ($result as $row)    : ?>
            <tr>
                
                <td><?php echo $row['ShoeBrand']; ?></td>
                <td><?php echo $row['ShoeID']; ?></td>
                 <td><?php echo $row['ShoeName']; ?></td>
                <td><?php echo $row['Description']; ?></td>
               
        
              
            <input type="hidden" name="shoe_id"
            value="<?php echo $Shoe['ShoeID']; ?>">
                   
    

    
        </form> 
                </td>
            </tr>
                </form>
                </td>
            </tr>
            
            <?php $conn->close();  endforeach; ?>
          
        
        </table>      
    
        
</main>    

</center>


</body>
</html>