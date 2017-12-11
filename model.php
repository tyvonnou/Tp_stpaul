<?php
function connection () {
	$bdd = new PDO('mysql:host=localhost;dbname=bdstpaul;charset=utf8', 'root');
	return $bdd;
	}
function getsejours () {
	$bdd = connection();
	$sejours = $bdd->query('select * from sejour order by sejno');
	return $sejours;
}
?>
			