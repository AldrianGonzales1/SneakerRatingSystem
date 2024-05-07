

<?php

require_once('database.php');

if(!isset($rev)) {
    $rev = filter_input(INPUT_GET, 'rev',
                            FILTER_VALIDATE_INT);
if ($rev == NULL || $rev == FALSE) {
    $rev = 1;
    
        }

    }

// Get name for selected rev
$queryReview = 'SELECT * FROM Reviews
                  WHERE review_id = :rev';
$statement1 = $db->prepare($queryReview);
$statement1->bindValue(':rev', $rev);
$statement1->execute();
$Review = $statement1->fetch();
$title= $Review['title'];
$statement1->closeCursor();

// Get all rev
$queryAllRev = 'SELECT * FROM Reviews
                       ORDER BY review_id';
$statement2 = $db->prepare($queryAllRev);
$statement2->execute();
$Reviews = $statement2->fetchAll();
$statement2->closeCursor();



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
       <li><a href="products.php">Product List</a></li>
      <li><a href="adminportal.php">Admin</a></li>    
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
<h1>Reviews</h1>

</header>
</center>

  
        
    
         <table>
            <thead>
            <tr>
            <th colspan="4"> 
            </th>
            </tr>
          </thead>      
         <tbody><tr> 
                
                <th>Review ID</th>
                <th>Shoe ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Rating</th>
                 
           
                
            </tr>
            
            <?php  foreach ($Reviews as $Rev) : ?>
            <tr>
                
                <td><?php echo $Rev['review_id']; ?></td>
                <td><?php echo $Rev['ShoeID']; ?></td>
                <td><?php echo $Rev['title']; ?></td>
                 <td><?php echo $Rev['review_description']; ?></td>
                <td><?php echo $Rev['rating']; ?></td>
               
        
              
            <input type="hidden" name="rev"
            value="<?php echo $Reviews['review_id']; ?>">
                   
   

   
      </form>  
                </td>
            </tr>
                </form>
                </td>
            </tr>
            <?php endforeach; ?>
          
        
        </table>
    </section>

</main>    

</center>


</body>
</html>