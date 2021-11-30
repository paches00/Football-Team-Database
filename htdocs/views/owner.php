<!DOCTYPE html>
<html>
<head>
   <title>Football Team Database</title>
   <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.box_textshadow {
	text-shadow: 1px 1px 2px black, 0 0 1em white, 0 0 0.2em black;
}
</style>
</head>
<body style="background-color:black;">
<img src="/images/image5.jpg" class="w3-image w3-greyscale-min" style="width:100%">
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right"><i class="fa fa-bars"></i></a>
    <a href = "../index.php" class="w3-bar-item w3-button w3-padding-large w3-text-blue">Home</a>
    <a href = "/password/owner_password.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Owner</a>
    <a href = "/password/director_password.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Director</a>
    <a href = "/password/coach_password.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Coach</a>
    <a href = "/password/analytics_password.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Analytics Department</a>
    <a href = "/password/player_password.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small>Player">Player</a>
    <a href="../search/playersearch.php" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>
<div class="w3-white" id="owner">
<div class="w3-display-middle w3-container w3-content w3-text-white w3-padding-64" style = "max-width:800px">
      <h2 class="w3-wide w3-center box_textshadow">Owner</h2>
      <ul class="w3-ul w3-border w3-black w3-text-white">
        <li class="w3-padding"><a href = "../tables/playertable.php">Player Table</a></span></li>
		<li class="w3-padding"><a href = "../tables/performancetable.php">Performance Table</a></span></li>
        <li class="w3-padding"><a href = "../tables/positiontable.php">Position Table</a></span></li>
        <li class="w3-padding"><a href = "../tables/amateurtable.php">Amateur Table</a></li>
        <li class="w3-padding"><a href = "../tables/contracttable.php">Events Table</a></li>
        <li class="w3-padding"><a href = "../tables/teamtable.php">Team Table</a></li>
        <li class="w3-padding"><a href = "../tables/seasontable.php">Season Table</a></li>
        <li class="w3-padding"><a href = "../tables/matchtable.php">Match Table</a></li>
      </ul>
    </div>
  </div>
</body>
</html>

