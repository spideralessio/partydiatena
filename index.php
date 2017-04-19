<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Party Di ATENA</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="grey darken-1" role="navigation">
	<div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Party Di ATENA</a>
	</div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
	<div class="container">
	  <br><br>
	  <h1 class="header center black-text">Party di ATENA</h1>
	  <div class="row center">
		<h5 class="header col s12 light">Cerca qui i tuoi Party preferiti.</h5>
	  </div>
	  <div class="row">
		<div class="col s12 lighten-2 z-depth-3">
		  <div class="input-field">
			<input placeholder="Cerca per Nome" id="place-input" type="search" required>
			<label class="label-icon" for="search"><i class="material-icons">search</i></label>
		  </div>
		</div>
		
	  </div>
	  
	  

	  <br><br>

	</div>
  </div>


  <div class="container">
	<div class="section">

	  <div class="row">
		<?php
	  $servername = "db678459989.db.1and1.com";
	  $username = "dbo678459989";
	  $password = "partydiatena";
	  $dbname = "db678459989";

	  // Create connection
	  
	  if ($_GET["lat"]){
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$lat = $_GET["lat"];
		$lng = $_GET["lng"];
		$sql_events = "SELECT Event.place, Event.desc, Event.contacts, Event.date, ACOS( SIN(".$lat.") * SIN(Event.lat) + COS(".$lat.") * COS(Event.lat) * COS(Event.lng – ".$lng.") ) * 6371 AS dist FROM Event WHERE dist <= 100 ORDER BY Event.date;";
		echo $sql_events;
		$events = $conn->query($sql_categorie);

		if ($events->num_rows > 0) {
		  $events_arr = [];
		  while($event = $categorie->fetch_assoc()){
			array_push($events_arr, $event);
		  }
		  foreach ($events_arr as $event){
			  echo "ciao";
		  }
		  
		} else {
			echo "Nessun Evento";
		}
		$conn->close();
	  }
	  
	  
	?>
		<div class="col s12 m6">
		  <div class="card">
			<div class="card-image">
			  <img src="https://scontent-mxp1-1.xx.fbcdn.net/v/t31.0-8/18056357_10211762225798839_457570341278212958_o.jpg?oh=7840fe680f742290742f9dd30759e808&oe=59896187">
			  
			  <a class="btn-floating halfway-fab waves-effect waves-light grey"><i class="material-icons">share</i></a>
			</div>
			
			<div class="card-tabs">
			  <ul class="tabs tabs-fixed-width">
				<li class="tab"><a class="active" href="#test4">Descrizione</a></li>
				<li class="tab"><a href="#test5">Luogo</a></li>
				<li class="tab"><a href="#test6">Contatti</a></li>
			  </ul>
			</div>
			<div class="card-content grey lighten-4 ">
			  <div id="test4">
				<p>Lunedì 24 Aprile 2017 
				  #AmericanCollegeParty #PartyDiAtena
				  #LoveAndFriends presentano: <br>• festa in stile americano <br>• fatta da universitari per universitari!<br>•
				  Presso il @PlanetRoma (via del commercio 36) <br>
				  5 euro donna con bracciale<br>
				  8 euro uomo con bracciale<br>
				</p>
			  </div>
			  <div id="test5">
				<iframe class="z-depth-3" 
				  width="100%"
				  height="100%"
				  frameborder="0" style="border:0"
				  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCz6unKw3w7D8cKUN5Fa_7EY0qIBg4Vx8M 
					&q=PlanetRoma" allowfullscreen>
				</iframe>
			  </div>
			  <div id="test6">
				<p>
				  Per aggiungersi alla lista #PARTYDIATENA basta scrivere il proprio nome più i partecipanti del gruppo (esempio Mario +2)
				  <br>#IlTuoFuoricorsoPreferito 
				  <br><br>Info e prenotazione tavoli:<br>
				  Voice Dom 340 1071906
				</p>
			  </div>
			</div>
		  </div>
		</div>
		
	  </div>


	</div>
	<br><br>

	<div class="section">

	</div>
  </div>

  <footer class="page-footer grey darken-1">
	<div class="container">
	  <div class="row">
		<div class="col l6 s12">
		  <h5 class="white-text">Chi Siamo</h5>
		  <p class="grey-text text-lighten-4">Gruppo di supporto per studenti universitari che cercano la serata giusta! Offriamo qualità alla portata di tutti! Verranno pubblicate solo serate universitarie o eventi che potrebbero interessare uno studente universitario! :) #IlTuoFuoricorsoPreferito</p>


		</div>
		<div class="right col l3 s12">
		  <h5 class="white-text">Connect</h5>
		  <ul>
			<li><a class="white-text" href="https://www.facebook.com/groups/821644677993129/?fref=ts">Facebook</a></li>
			
		  </ul>
		</div>
	  </div>
	</div>
	<div class="footer-copyright">
	  <div class="container">
	  Made by <a class="blue-text text-lighten-3" href="http://www.royaltarantula.it">Royal Tarantula</a>
	  </div>
	</div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCz6unKw3w7D8cKUN5Fa_7EY0qIBg4Vx8M&libraries=places&callback=initAutocomplete"
		 async defer></script>

  </body>
</html>


