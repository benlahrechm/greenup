<?php

function findsport() {
	$tab = $_POST;
	$ret = [];
	foreach ($tab as $key => $val){
		if ($val == "on")
    		$ret[] = $key;
	}
	return ($ret);
}

function make_query($salle, $arr) {
	$arr[0] = str_replace("_", " ", $arr[0]);
	$query = "SELECT * FROM `$salle` WHERE LOCATE('".$arr[0]."', `ACTIVITE`)";
	if (count($arr) == 1)
		return ($query);
	for ($i = 1; $i < count($arr); $i++){
		$arr[$i] = str_replace("_", " ", $arr[$i]);
		$query .= " OR LOCATE('".$arr[$i]."', `ACTIVITE`)";
	} 
	return ($query);
}

function generate_html ($arr) {
	if (!file_exists("Fiches/".$arr['NOM'].".html")) {
		$part1 = file_get_contents("part1.html");
		$part2 = file_get_contents("part2.html");

		$part1 .= "<h1 class='text'>".$arr['NOM']."</h1><hr/><br/>";
		$part1 .= "<div id='info1'>";
		$part1 .= "<a class='text'>Ville : ".$arr['VILLE']."</a><br/><br/>";
                $part1 .= "<a class='text'>Adresse : ".$arr['ADRESSE']."</a><br/><br/>";
                $part1 .= "<a class='text'>Activité : ".$arr['ACTIVITE']."</a></div>";
		$part1 .= "<div id='info2'>";
		$part1 .= "<a class='text'>Code Postal : ".$arr['CODE POSTAL']."</a><br/><br/>";
		$part1 .= "<a class='text'>Equipement : ".$arr['EQUIPEMENT']."</a><br/><br/>";
		$part1 .= "<a class='text'>Sol : ".$arr['SOL']."</a></div>";
		$part1 .= generate_map($arr);
		$part1 .= "<script type='text/javascript' src='../map.js'></script>";

		file_put_contents("Fiches/".$arr['NOM'].".html", $part1.$part2);
	}
	return ("Fiches/".$arr['NOM'].".html");
}
 
function generate_map ($arr) {
	$loc = explode(",", $arr['LOCALISATION']);
	$balise = "<script type='text/javascript'>";
	$var = "var mapOptions = {zoom: 18, center: { lat: ".floatval($loc[0]).", lng : ".floatval($loc[1])."} };";
	$ferme = "</script>";
	$complete = $balise.$var.$ferme;
	return ($complete."<div id='map-canvas'></div>");
}

?>