<!DOCTYPE html>
<html lang="en">
<title>Football Database</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="tablestyle.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}

.box_textshadow {
     text-shadow: 1px 1px 2px black, 0 0 1em white, 0 0 0.2em black;
     font-size: 20px;
}
</style>
<body style="background-color:black;">
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right"><i class="fa fa-bars"></i></a>
    <a href = "index.php" class="w3-bar-item w3-button w3-padding-large w3-text-blue">Home</a>
    <a href = "/password/owner_password.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Owner</a>
    <a href = "/password/director_password.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Director</a>
    <a href = "/password/coach_password.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Coach</a>
    <a href = "/password/analytics_password.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Analytics Department</a>
    <a href = "/password/player_password.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small>Player">Player</a>
    <a href="/search/playersearch.php" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<img src="/images/image1.jpg" class="w3-image w3-greyscale-min" style="width:100%">
<div class="w3-display-middle w3-container w3-text-white w3-padding-32 w3-hide-small box_textshadow">
    <center>
      <h1>Football Database</h1>
      <p><b>Select a user on the hover bar to view data</b></p>   
    </center>
</div>
</body>
</html>