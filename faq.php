<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>

    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
  
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      
      background-color: #9dd0e1;
      height: 100%;
    }
    
  
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
  
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
 
  }
 body {
      background-image: url('rise-of-digital-twins%20final%20image.webp');
      background-size: cover;
      background-color: rgba(0, 0, 0, 0.7); /* change the opacity value as desired */
    
      color:white;		
    }

 .header {
      text-align: left;
      padding: 20px;
      color: white;
      font-weight: bold;
      font-size: 100px;
    }

  .question-row:hover {
      font-size: 24px;
    }
table {
        border-collapse: separate;
        border-spacing: 0 30px;
}

  </style>
</head>
<body>



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
  <li><a href="kyre.php">Kyre Irving</a></li>
  <li><a href="giannis.php">Giannis Antetokounmpo</a></li>
  <li><a href="faq.php">FAQ</a></li>
   <li><a href="logout.php">Log Out</a></li>


      </ul>
      </ul>
    </div>
  </div>
</nav>
<br>
 </body>
</div>
<body>
<main>
<center>


<header>
<h1>Shoe Rating System</h1>

</header>
</center>
    

    <aside>

       
       
 <table class="table">
  <thead>  

 	 <tr>
	    <h2>FREQUENTLY ASKED QUESTIONS</h2>
    	  
          </tr>
</thead>
<tbody>
	<tr class="question-row">
      	<td>Question: How do I rate my shoes?</td>
    </tr>
    <tr class="answer-row" style="display:none">
      <td>Answer: To rate shoes go to manage my shoes and then click on the review button. Leave a comment and rate your shoe.</td>
    </tr>


  
 
 
  </tr>
</tbody>
</table>
</aside>
<script>
  // Get all the question rows
  const questionRows = document.querySelectorAll('.question-row');

  // Loop through each question row and add a click event listener
  questionRows.forEach(row => {
    row.addEventListener('click', () => {
      // Toggle the visibility of the next answer row
      const answerRow = row.nextElementSibling;
      answerRow.style.display = answerRow.style.display === 'none' ? 'table-row' : 'none';
    });
  });
</script>

































