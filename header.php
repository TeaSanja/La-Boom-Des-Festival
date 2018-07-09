<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>



<div class="topnav" id="myTopnav">
  <a href="index.php" class="active" id="title">La Boom Des Festivals</a>
  <a href="gallery.php">Gallery</a>
  <a href="calendar.php">Event Calendar</a>
  <a href="about.php">About</a>
  <a href="index.php">Home</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  </div>



<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>



<!-- Shrink navbar -->
<script>
$(document).ready(function() {
	$(window).scroll(function() {
  	if($(document).scrollTop() > 10) {
    	$('#myTopnav').addClass('shrink');
    }
    else {
    $('#myTopnav').removeClass('shrink');
    }
  });
});
	</script>


<!-- Banner image -->

<div class="banner">
<div class="gradient inners">
	</div>
	<img class="inners" src="img/1234.jpeg">
</div>



<div class="element">
	<img src="img/logo1.jpg">
</div>

<div class="heart pulse2">&#9675;</div>

</body>
</html>
