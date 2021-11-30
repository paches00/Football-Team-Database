<!DOCTYPE html>
<html>
<head>
   <title>Football Team Database</title>
   <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color:whitesmoke;">
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right"><i class="fa fa-bars"></i></a>
    <a href = "../index.php" class="w3-bar-item w3-button w3-padding-large w3-text-blue">Home</a>
    <a href="../search/playersearch.php" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>
<div style="position:relative; right:30px; top:375px;">
<center>
Enter password: <input id='password' type='text' placeholder="Coach"/>
<button id="button">
<a href="/views/coach.php" onclick="javascript:return validatePass()">Continue</a>
</button>
</center>
</div>
<script>
function validatePass(){
    if(document.getElementById('password').value == 'coach'){
        return true;
    }else{
        alert('wrong password!!');
        return false;
    }
}
</script>
</body>
</html>