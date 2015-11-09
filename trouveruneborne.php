<html>
<head>
	<link rel="stylesheet" type="text/css" href="site.css" media="screen" />
	<meta charset="utf8">
	<style type="text/css">
 
#outdiv { 
height: 205px; 
overflow: hidden; 
position: relative; 
width: 915px; 
} 

#iniframe { 
height: 1200px; 
left: -180px; 
position: absolute; 
top: -240px; 
width: 1280px; 
} 
</style> 
</head>
<body>
	<div id="logo">
		<div id="shadow">
			<div id="ttl" style="margin: auto; padding-top: 150px;">
			<center><a id="title">Green'Up</a></center>
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
	<div id="outdiv"><iframe src="https://fr.chargemap.com/" scrolling="no" width="1280px" height="1200px" id="iniframe"></iframe></div> 
	</div>
	<div id="footer"></div>
	<script type="text/javascript" src="jquery-1.11.2.js"></script>
</body>
</html>