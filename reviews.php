<?php
// Update the details below with your MySQL details
$servername = 'localhost';
$username = 'mgs_user';
$password = 'pa55word';
$databasename = 'php123';
try {
    $pdo = new PDO('mysql:host=' . $servername . ';dbname=' . $databasename . ';charset=utf8', $username, $password);
} catch (PDOException $exception) {
    // 
    exit('Failed to connect to database!');
}
if (isset($_GET['ShoeID'])) {

    if (isset($_POST['title'], $_POST['review_description'], $_POST['rating'])) {
        // Insert a new review (user submitted form)
        $stmt = $pdo->prepare('INSERT INTO Reviews (ShoeID, title, review_description, rating) VALUES (?,?,?,?,NOW())');
        $stmt->execute([$_GET['ShoeID'], $_POST['tit'], $_POST['descrip'], $_POST['ratings']]);
        exit('Your review has been submitted!');
    }
  
    $stmt = $pdo->prepare('SELECT * FROM Reviews WHERE ShoeID = ?');
    $stmt->execute([$_GET['ShoeID']]);
    $Reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Get the overall rating and total amount of reviews
    $stmt = $pdo->prepare('SELECT AVG(rating) AS overall_rating, COUNT(*) AS total_reviews FROM Reviews WHERE ShoeID = ?');
    $stmt->execute([$_GET['ShoeID']]);
    $reviews_info = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
    exit('Please provide the shoe ID.');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,minimum-scale=1">
        <title>Reviews System</title>
        
        
        <style>
.reviews .overall_rating .num {
    font-size: 30px;
    font-weight: bold;
    color: #F5A624;
}
.reviews .overall_rating .stars {
    letter-spacing: 5px;
    font-size: 32px;
    color: #FFFF00;
    padding: 0 5px 0 10px;
}
.reviews .overall_rating .total {
    color: ##FFFF00;
    font-size: 15px;
}


.reviews .review {
    padding: 20px 0;
    border-bottom: 1px solid #eee;
}
.reviews .review .name {
    padding: 0 0 3px 0;
    margin: 0;
    font-size: 18px;
    color: #555555;
}
.reviews .review .rating {
    letter-spacing: 3px;
    font-size: 22px;
    color: #FFFF00;
}

.reviews .review .content {
    padding: 20px 0;
}
.reviews .review:last-child {
    border-bottom: 0;
}
</style>
    
        
  
<div class="overall_rating">
    <span class="num"><?=number_format($reviews_info['overall_rating'], 1)?></span>
    <span class="stars"><?=str_repeat('&#9733;', round($reviews_info['overall_rating']))?></span>
    <span class="total"><?=$reviews_info['total_reviews']?> total reviews</span>

<?php foreach ($Reviews as $review): ?>
<div class="review">
    <h3 class="name"><?=htmlspecialchars($review['title'], ENT_QUOTES)?></h3>
    <div>
        <span class="rating"><?=str_repeat('&#9733;', $review['rating'])?></span>

    </div>
    <p class="content"><?=htmlspecialchars($review['review_description'], ENT_QUOTES)?></p>
</div>
<?php endforeach ?>
  </body>
</html>

