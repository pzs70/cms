<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<?php
		$db_file = 'database/mydb.sqlite';
		if (file_exists($db_file)){
			echo "Content";
		} else{
			echo "<button onclick='window.location.href=\"./install/createDB.php\"'>Telepítés!</button>";
		}

	?>
<script src="start.js"></script>
<!--<button onclick="window.location.href='./install/createDB.php'">Telepítés!</button>-->
</body>
</html>
