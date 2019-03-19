<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$k1 = $_POST['key_1'];
	$k2 = $_POST['key_2'];

	echo "<h5>$k1</h5><br>";
	echo "<h5>$k2</h5><br>";
}

?>