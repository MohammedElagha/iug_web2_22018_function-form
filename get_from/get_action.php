<?php

if ($_SERVER['REQUEST_METHOD'] == "GET") {
	$k1 = $_GET['key_1'];
	$k2 = $_GET['key_2'];

	echo "<h5>$k1</h5><br>";
	echo "<h5>$k2</h5><br>";
}

?>