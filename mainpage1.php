<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SoleScore - Sneaker Ratings</title>
  <link rel="stylesheet" href="styles.css"> <!-- You can link your CSS file here -->
  <style>
    body {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh; /* Ensures the content is centered vertically */
      overflow: hidden; /* Prevents scrolling */
      margin: 0; /* Removes default margin */
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; /* Matching font-family */
      background-image: url('jordan2.jpg'); /* Background image */
      background-size: cover; /* Cover the entire background */
      background-position: center; /* Center the background */
    }

    h1 {
      text-align: center;
      color: #ff9100; /* Text color changed to ff9100 */
      text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000; /* Black stroke */
    }

    .athlete-carousel {
      width: 70%;
      overflow: hidden;
      display: flex;
      justify-content: center;
    }

    .athlete-carousel img {
      border: 2px solid #000; /* Black border */
      border-radius: 5px; /* Rounded corners */
      width: auto;
      height: 300px; /* Fixed height for all images */
    }

    .athlete-buttons {
      display: flex;
      justify-content: center;
    }

    .athlete-buttons button {
      margin: 5px; /* Add some spacing between buttons */
      padding: 10px;
      border: none;
      border-radius: 5px;
      background-color: #ff9100; /* Orange background */
      color: #ffffff; /* White text */
      text-decoration: none;
      cursor: pointer;
      transition: background-color 0.3s ease;
      text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000; /* Black stroke */
    }

    .athlete-buttons button:hover {
      background-color: #ff7500; /* Darker orange on hover */
    }
  </style>
</head>
<body>

<h1>Choose Signature Athlete</h1>

<div class="athlete-carousel">
  <!-- Images of the athletes in a carousel -->
  <img src="lebron.jpg" alt="LeBron James">
  <img src="mike2.jpg" alt="Michael Jordan">
  <img src="kobe.jpg" alt="Kobe Bryant">
  <img src="kd.jpg" alt="Kevin Durant">
  <img src="kyrie.jpg" alt="Kyrie Irving">
  <img src="giannis.jpg" alt="Giannis Antentokounmpo">
</div>

<div class="athlete-buttons">
  <!-- Buttons for selecting athlete's sneaker lines -->
  <button onclick="selectAthlete('Michael Jordan')">Michael Jordan</button>
  <button onclick="selectAthlete('Kobe Bryant')">Kobe Bryant</button>
  <button onclick="selectAthlete('LeBron James')">LeBron James</button>
  <button onclick="selectAthlete('Kevin Durant')">Kevin Durant</button>
  <button onclick="selectAthlete('Kyrie Irving')">Kyrie Irving</button>
  <button onclick="selectAthlete('Giannis Antentokounmpo')">Giannis Antentokounmpo</button>
</div>

<script>
  const images = document.querySelectorAll('.athlete-carousel img');
  let currentIndex = 0;

  function showImage(index) {
    // Hide all images
    images.forEach(image => image.style.display = 'none');
    // Show the image at the given index
    images[index].style.display = 'block';
  }

  function nextImage() {
    currentIndex = (currentIndex + 1) % images.length;
    showImage(currentIndex);
  }

  // Show the first image initially
  showImage(currentIndex);

  // Rotate images every three seconds
  setInterval(nextImage, 3000);

  function selectAthlete(athlete) {
    // Redirect to the page where users can rate the selected athlete's sneakers
    window.location.href = "rating_page.html?athlete=" + athlete;
  }
</script>

</body>
</html>
