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
       <input type="checkbox" name="Football" id="football" /> <label class="text" for="football">Football</label>
       <input type="checkbox" name="Rugby" id="rugby" /> <label class="text" for="rugby">Rugby</label>
       <input type="checkbox" name="Boxe anglaise" id="boxe_angl" /> <label class="text" for="boxe angl">Boxe Anglaise</label>
       <input type="checkbox" name="Boxe francaise" id="boxe_fr" /> <label class="text" for="boxe fr ">Boxe Francaise</label><br/>
       <input type="checkbox" name="Boxe thaïlandaise" id="boxe_thai" /> <label class="text" for="boxe thai">Boxe thailandaise</label>
       <input type="checkbox" name="Basket-ball" id="basketball" /> <label class="text" for="basketball">Basketball</label>
       <input type="checkbox" name="Handball" id="handball" /> <label class="text" for="handball">Handball</label>
       <input type="checkbox" name="Tennis" id="tennis" /> <label class="text" for="tennis">Tennis</label><br/>
       <input type="checkbox" name="Judo" id="judo" /> <label class="text" for="judo">Judo</label>
       <input type="checkbox" name="Natation" id="natation" /> <label class="text" for="natation">Natation</label>
       <input type="checkbox" name="Volley-ball" id="volley" /> <label class="text" for="volley">Volley-Ball</label>
       <input type="checkbox" name="Fitness" id="fitness" /> <label class="text" for="fitness">Fitness</label><br/>
       <a href="#void" id="affmore" class="text">Plus...</a>
	     <input type="checkbox" name="Badminton" id="badminton" /> <label class="text" for="badminton">Badminton</label>
       <input type="checkbox" name="Gymnastique" id="gymnastique" /> <label class="text" for="gymnastique">Gymnastique</label>
       <input type="checkbox" name="Tennis de table" id="Tennis_de_table" /> <label class="text" for="Tennis de table">Tennis de Table</label>
       <input type="checkbox" name="Squash" id="squash" /> <label class="text" for="squash">Squash</label><br/>
       <input type="checkbox" name="Musculation" id="musculation" /> <label class="text" for="musculation">Musculation</label>
       <input type="checkbox" name="Aquagym" id="aquagym" /> <label class="text" for="aquagym">Aquagym</label>
       <input type="checkbox" name="Karaté" id="karate" /> <label class="text" for="karate">Karate</label>
       <input type="checkbox" name="Hockey" id="hockey" /> <label class="text" for="hockey">Hockey</label><br/>
       <input type="checkbox" name="Full contact" id="full contact" /> <label class="text" for="full contact">Full Contact</label>
       <input type="checkbox" name="Escalade" id="escalade" /> <label class="text" for="escalade">Escalade</label>
       <input type="checkbox" name="Equitation" id="Equitation" /> <label class="text" for="Equitation">Equitation</label>
       <input type="checkbox" name="Light contact" id="Light_contact" /> <label class="text" for="Light contact">Light Contact</label><br/>
     	  <input type="checkbox" name="First full" id="First_full" /> <label class="text" for="First full">First Full</label>
       <input type="checkbox" name="Taekwondo" id="Taekwondo" /> <label class="text" for="Taekwondo">Taekwondo</label>
       <input type="checkbox" name="Karate jutsu" id="Karate_jutsu" /> <label class="text" for="Karate jutsu">Karate jutsu</label>
       <input type="checkbox" name="Goshin jutsu" id="Goshin_jutsu" /> <label class="text" for="Goshin jutsu">Goshin jutsu</label><br/>
       <input type="checkbox" name="Kobudo" id="Kobudo" /> <label class="text" for="text">Kobudo/Nihon Tai-jutsu</label>
       <input type="checkbox" name="Kobudo" id="Nambudo" /> <label class="text" for="text">Taijitsu/Nambudo</label>
       <input type="checkbox" name="Kobudo" id="Nunchaku" /> <label class="text" for="text">Ninjutsu/Nunchaku</label>
       <input type="checkbox" name="Water-polo" id="Water-polo" /> <label class="text" for="Water-polo">Water-polo</label><br/>
       <input type="checkbox" name="Golf" id="Golf" /> <label class="text" for="Golf">Golf</label>
       <input type="checkbox" name="Sumo" id="Sumo" /> <label class="text" for="Sumo">Sumo</label>
       <input type="checkbox" name="Kayak" id="Kayak" /> <label class="text" for="Kayak">Kayak</label>
       <input type="checkbox" name="Danse" id="Danse" /> <label class="text" for="Danse">Danse</label>
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
