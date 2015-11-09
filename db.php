<?php
$user = 'root';
$password = 'root';
$db = 'greenup';
$socket = 'localhost:/Applications/MAMP/tmp/mysql/mysql.sock';

$link = mysql_connect($socket, $user, $password);
$db_selected = mysql_select_db($db, $link);

?>