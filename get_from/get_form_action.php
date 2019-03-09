<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="GET" action="">
		<input type="text" name="eg">
	</form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == "GET") {
	if (isset($_GET['eg'])) {
		$eg = $_GET['eg'];
		echo "<h5>$eg</h5><br>";
	}
}
?>