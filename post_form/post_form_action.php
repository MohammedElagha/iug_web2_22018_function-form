<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="">
		<input type="text" name="eg">
	</form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	if (isset($_POST['eg'])) {
		$eg = $_POST['eg'];
		echo "<h5>$eg</h5><br>";
	}
}
?>