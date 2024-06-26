<?php

require_once "db_functions.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User View - Library Seat Viewer</title>
  <link rel="stylesheet" href="tnc-user.css">
  <script src="navact.js"></script>
</head>
<body>
  <header class="header">
    <a href="#" class="header-logo">PLVIL</a>
    <nav class="navbar">
      <a href="home.html" id="homeLink">Home</a>
      <a href="browse.html" id="browseLink">Browse</a>
      <a href="scan.html" id="scanLink">Scan</a>
      <a href="tnc-user.html" id="chairsLink" class="active">Chairs</a>
      <a href="about.html" id="aboutLink">About</a>
    </nav>
  </header>
  
  <div class="container">
    <img src="Image1.png" alt="Image" class="seat-image" style="--index: 1;">
    <img src="Image1.png" alt="Image" class="seat-image" style="--index: 2;">
    <img src="Image1.png" alt="Image" class="seat-image" style="--index: 3;">
    <img src="Image1.png" alt="Image" class="seat-image" style="--index: 4;">
    <img src="Image1.png" alt="Image" class="seat-image" style="--index: 5;">
    <img src="Image1.png" alt="Image" class="seat-image" style="--index: 6;">
    <img src="Image1.png" alt="Image" class="seat-image" style="--index: 7;">
    <img src="Image1.png" alt="Image" class="seat-image" style="--index: 8;">
    <img src="Image1.png" alt="Image" class="seat-image" style="--index: 9;">
    <img src="Image1.png" alt="Image" class="seat-image" style="--index: 10;">
    <h1>Library Seat Viewer</h1>
    <div class="legend">
      <div class="legend-item">
        <div class="available"></div>
        <span>Available</span>
      </div>
      <div class="legend-item">
        <div class="occupied-legend"></div>
        <span>Occupied</span>
      </div>
    </div>
    <div id="user-seats" class="layout"></div>
    <div class="available-seats">Available Seats: <span id="available-seat-count">25</span> Seats</div>
  </div>
  <script src="tnc-user.js"></script>
</body>
</html>
