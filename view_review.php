

<?php


    
 
    $ShoeID = $_GET['ShoeID'];


?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,minimum-scale=1">
        <title>Reviews System</title>
           <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./css/style.css" rel="stylesheet">
        
        
        <style>
.* {
  box-sizing: border-box;
   font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}
body {
  background-color: #f9f6f6;
  margin: 0;

.content {
  max-width: 1000px;
  width: 100%;
  margin: 0 auto;
  padding: 0 10px;
}
.content h2 {
  margin: 0;
  padding: 25px 0;
  font-size: 22px;
  border-bottom: 1px solid #ebebeb;
  color: #666666;
}


        </style>
    </head>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
 
   <a class="navbar-brand" href="products.php">Product List</a>

</nav>
        <div class="content home">
          
            



<div class="reviews"></div>
<script>
<?php echo "var reviews_ShoeID = '$ShoeID';"; ?>
    console.log(reviews_ShoeID);

//reviews_ShoeID = "<?php echo"$ShoeID"?>";


fetch("reviews.php?ShoeID=" + reviews_ShoeID).then(response => response.text()).then(data => {
    document.querySelector(".reviews").innerHTML = data;
    document.querySelector(".reviews .write_review_btn").onclick = event => {
        event.preventDefault();
        document.querySelector(".reviews .write_review").style.display = 'block';
        document.querySelector(".reviews .write_review input[name='name']").focus();
    };
    document.querySelector(".reviews .write_review form").onsubmit = event => {
        event.preventDefault();
        fetch("reviews.php?ShoeID=" + reviews_ShoeID, {
            method: 'POST',
            body: new FormData(document.querySelector(".reviews .write_review form"))
        }).then(response => response.text()).then(data => {
            document.querySelector(".reviews .write_review").innerHTML = data;
        });
    };
});
</script>

    
        
    </body>
</html>