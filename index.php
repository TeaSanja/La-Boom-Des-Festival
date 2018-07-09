<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<title>La Boom Des Festivals</title>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lancelot" rel="stylesheet">
</head>

<body>
<?php include 'header.php';?>





<!-- COUNTDOWN -->
<div class="countdown">  
  <ul>
    <li><span id="days"></span>days</li>
    <li><span id="hours"></span>Hours</li>
    <li><span id="minutes"></span>Minutes</li>
    <li><span id="seconds"></span>Seconds</li>
  </ul>
</div>
		<script>
	const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;

let countDown = new Date('Sep 05, 2018 00:00:00').getTime(),
    x = setInterval(function() {

      let now = new Date().getTime(),
          distance = countDown - now;

      document.getElementById('days').innerText = Math.floor(distance / (day)),
        document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);

    }, second)
	</script>
			<!-- END OF COUNTDOWN -->
			
			
			<!-- NEWS -->
			<div class="caption">
		<h3>Latest News!<hr width="15%"></h3>	
		</div>
	
	
	<div class="news">
	<div class="row">
		
		<div class="col-lg-3"><img width="250px" src="img/TNMV.jpg" alt="TNMV"><p>16/11/2015</p><h4>MARCO V & THOMAS NEWSON HEAD TO TOKYO FOR THE GLOBALGATHERING JAPAN CLUB FESTIVAL.</h4><p>This Sunday, 22 November the GlobalGathering Japan Club Festival takes over Tokyo with a series of shows all across the... </p></div>
	<div class="col-lg-3"><img width="250px" src="img/Japan.jpg" alt="TNMV"><p>6/11/2015</p>
<h4>GGJAPAN CLUB FESTIVAL. LINE UPS ANNOUNCED</h4><p>
The mega GlobalGathering Japan Club Festival is taking shape, with more than 20 venues all across Japan taking part in...</p></div>
	<div class="col-lg-3"><img width="250px" src="img/Japan.jpg" alt="TNMV"><p>6/11/2015</p>
<h4>GGJAPAN CLUB FESTIVAL. LINE UPS ANNOUNCED</h4><p>
The mega GlobalGathering Japan Club Festival is taking shape, with more than 20 venues all across Japan taking part in...</p></div>
	<div class="col-lg-3"><img width="250px" src="img/Makj.jpg" alt="TNMV"><p>9/11/2015</p><h4>
GG JAPAN CLUB FESTIVAL. MAKJ @ T2 SHIBUYA, TOKYO. SUNDAY 22 NOVEMBER.</h4><p>
The GlobalGathering Japan Club Festival takes over Tokyo on Sunday 22 November, and one of the hottest shows is sure to...</p></div>	
		</div>
			</div>
			<!-- END OF NEWS -->
			
			
			<!-- Festival MAPS -->
			
			<div class="row">
				<div class="col-lg-4">
					<div class="maps">
						<div class="containers">
  <div class="card">
    <div class="card__header">
      <h1>Festival maps</h1>
      <span>Find your way around the festival with these maps.</span>
     <a href="map.php"> <button class="card__header-button">View Guide</button></a>
    </div>
  </div>
</div>
									
					
				</div>
				</div>
	<div class="col-lg-4">
	<div class="container">

<?php include 'calendar.html';?>
		</div></div>
				
				<div class="col-lg-4">
					<div class="main">
					<h3 align="left">Instagram feed</h3>
					<div class="row">
  <div class=" column">
      <img src="img/1.jpg" alt="festival" style="width:100%"> 
 
  
  
    <img src="img/2.jpg" alt="Lights" style="width:100%">
 
  
  
    <img src="img/3.jpg" alt="party" style="width:100%">
						</div>
						<div class="column">
  
  
    <img src="img/4.jpg" alt="balloon" style="width:90%">
 
			
	
    <img src="img/1.jpg" alt="festival" style="width:90%; height: 33%">
 
			
	
    <img src="img/2.jpg" alt="Lights" style="width:90%">
 
						</div>	</div>		</div>		
	</div>
		</div>
		
	<div class="sponsor">
		
			<img src="img/spon.jpg" alt="sponsors">
		
	</div>	
		
		
		<?php include 'footer.php';?>
	
</body>
</html>