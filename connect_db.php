<?php

require_once('db.php');
require_once('functions.php');

$perp = 20;

$salle = "Salles".$_POST['Departement'];
$sql = make_query($salle, findsport());
$result = mysql_query($sql);
$arr = [];
for ($i = 0; $i < mysql_num_rows($result); $i++) {
   $arr[] = mysql_fetch_assoc($result);
}

$nbpage = ceil(count($arr) / $perp);
$j = 0;

if (!empty($arr)) {
for ($i = 1; $i < $nbpage + 1; $i++) {
	if ($i == 1)
		echo "<div class='selection' style='display: block;' id='page-".$i."'>";
	else
		echo "<div class='selection' style='display: none;' id='page-".$i."'>";
	for ($k = $j; $k < ($perp + $j) && isset($arr[$k]); $k++) {
		$url = generate_html($arr[$k]);
		echo "<center><a href='$url' class='resultat'>".$arr[$k]['NOM']."</a></center><br/>";
		echo "<center><a class='ville'>".$arr[$k]['VILLE']."</a></center><hr/>";
	}
	if (!isset($arr[$j +  4]))
		break;
	$j += 4;
	echo "</div>";
}
}
else
	echo "<h2 id='noresult'>No result</h2>";

?>