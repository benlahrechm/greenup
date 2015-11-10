<html>
<head>
	<link rel="stylesheet" type="text/css" href="site.css" media="screen" />
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
	<h1 class="text">Rechercher une prise</h1><hr/><br/>
	<a class="text" style="font-size: 30px;">Département</a>
	<a class="text" style=" margin-left: 30%; font-size: 30px;">Code postale</a><br/><br/>
	  	<form method="post" action="">
	  	<select name="Departement" id="departement">
	  		<option selected="selected" value="75">Paris 75</option>
	  		<option value="77">Seine et Marne 77</option>
	  		<option value="78">Yvelines 78</option>
	  		<option value="91">Essonne 91</option>
	  		<option value="92">Hauts de Seine 92</option>
	  		<option value="93">Seine Saint Denis 93</option>
	  		<option value="94">Val de Marne 94</option>
	  		<option value="95">Val d'Oise 95</option>
	  	</select>
	  	<input type="text" name="cpost" placeholder="ex : 75010" pattern="[0-9]{5}" id="cpost"/><br/><br/><br/>
	 	<input type="submit" name="search" id="search" value="Rechercher"/>
	  	</form>
		<?php
		   if (isset($_POST['search'])) {
		   include('connect_db1.php');
		   }?>
        <div id="pagi" class="dark-theme simple-pagination" style="display: none;">
        </div>
	</div>
	<div id="footer"></div>
       <script type="text/javascript" src="jquery.simplePagination.js"></script>
        <script type="text/javascript" src="show.js"></script>

</body>
</html>
