<html>
<head>
	<link rel="stylesheet" type="text/css" href="site.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="sport.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="pagi.css" media="screen" />
	<meta charset="utf8">
</head>
<body>
	<script type="text/javascript" src="jquery-1.11.2.js"></script>
	<div id="logo">
		<div id="shadow">
			<div id="ttl" style="margin: auto; padding-top: 150px;">
			<center><a id="title">Green Up</a></center>
			</div>
		</div>
	</div>
	<div id="menu" style="margin-top: -20px;">
		<ul style="margin-top: 0px;">
			<li><a href="index.php">Accueil</a></li>
			<li><a href="findsalle.php">Trouver une prise</a></li>
			<li><a href="findsport.php">Trouver une voiture</a></li>
			<li><a href="trouveruneborne.php">Trouver une Borne</a></li>

			<li><a>A propos</a></li>
		</ul>
	</div>
	<div id="content" class="center">
	<form method="post" action="">
	      <div id="sport" style="height: 315px; overflow: hidden; width: 100%;">
	      <h1 class="text">Rechercher une voiture</h1><hr/>
   <p>
       	  	<a class="text" style="font-size: 30px;">Département</a><br/><br/>
       <select name="Departement" id="Departement">
	  		<option selected="selected" value="75">Paris 75</option>
	  		<option value="77">Seine et Marne 77</option>
	  		<option value="78">Yvelines 78</option>
	  		<option value="91">Essonne 91</option>
	  		<option value="92">Hauts de Seine 92</option>
	  		<option value="93">Seine Saint Denis 93</option>
	  		<option value="94">Val de Marne 94</option>
	  		<option value="95">Val d'Oise 95</option>
	  	</select><br/><br/>
       <a class="text">Selectionner une ou plusieurs cases</a><br/><br/>
       <input type="checkbox" name="BMW - i3" id="BMW - i3" /> <label class="text" for="BMW - i3">BMW - i3</label>
       <input type="checkbox" name="Bolloré - Bluecar" id="Bolloré - Bluecar" /> <label class="text" for="Bolloré - Bluecar">Bolloré - Bluecar</label>
       <input type="checkbox" name="Mitsubishi - I-MiEV" id="Mitsubishi - I-MiEV" /> <label class="text" for="Mitsubishi - I-MiEV">Mitsubishi -IMiEV</label> 
   </p>
   </div>
   <br/><input type="submit" name="submit" id="search" value="Recherche" style="float: right; margin-right: 10%;"/><br/><br/>
</form>
<?php
  if (isset($_POST['submit'])) {
    include('connect_db.php');
  }?>
 	<div id="pagi" class="dark-theme simple-pagination" style="display: none;">
 	</div>
	</div>
	<div id="footer">
	</div>
	<script type="text/javascript" src="jquery.simplePagination.js"></script>
	<script type="text/javascript" src="show.js"></script>
</body>
</html>
