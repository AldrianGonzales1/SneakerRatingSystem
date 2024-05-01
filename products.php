

<?php

require_once('database.php');

if(!isset($Shoe_id)) {
    $shoe_id = filter_input(INPUT_GET, 'shoe_id',
                            FILTER_VALIDATE_INT);
if ($shoe_id == NULL || $shoe_id == FALSE) {
    $shoe_id = 1;
    
        }

    }

// Get name for selected shoe
$queryShoe = 'SELECT * FROM Shoe
                  WHERE ShoeID = :shoe_id';
$statement1 = $db->prepare($queryShoe);
$statement1->bindValue(':shoe_id', $shoe_id);
$statement1->execute();
$Shoe = $statement1->fetch();
$ShoeName= $Shoe['ShoeName'];
$statement1->closeCursor();

// Get all shoes
$queryAllShoe = 'SELECT * FROM Shoe
                       ORDER BY ShoeID';
$statement2 = $db->prepare($queryAllShoe);
$statement2->execute();
$Shoe = $statement2->fetchAll();
$statement2->closeCursor();



?>



<!DOCTYPE html>
<html>
<head>

  <title>Shoe Review</title>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./css/style.css" rel="stylesheet">
  
</head>
  <style>


 
       *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
        background-color: #f9f6f2;
}
.card-img-top{
    border-radius: 50px;
    padding: 20px;
}
.card{
    border-radius: 30px;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
}
.card-body{
    padding: 25px;
    margin-top: -15px;
}
.btn-primary{
    border-radius: 50px;
    width: 120px;
}
.btn-primary:hover{
    background-color: black;
    border: none;
}
h3,h5{
    color: rgb(0, 91, 228);
}
h3,h5{
    color: rgb(0, 91, 228);
}

</style>
</head>

    
     
   
        <h1 class="active"><a href="homepage.php">Home</a></h1>
      </head>
      
      
<body>
    <div class="container py-5">
        <h1 class="text-center">Shoe List</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
     <?php  foreach ($Shoe as $Shoes) : ?>
            <div class="col">
           
                <div class="card">
                    <img src="./img/dish1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class = "card-title"><?php echo $Shoes['ShoeBrand']; ?></h2>
                        <h3><?php echo $Shoes['ShoeName']; ?></h3>
                        <p class="card=text"><?php echo $Shoes['Description']; ?></p>

                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        
                        <button class="btn btn-primary">Review Now</button>
                    </div>
                </div>
            </div>

        
             <input type="hidden" name="shoe_id"
            value="<?php echo $Shoe['ShoeID']; ?>">
                
                 <?php endforeach; ?>

           


        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>