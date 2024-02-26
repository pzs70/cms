<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<?php
		$db_file = 'database/mydb.sqlite';
		$pdo = new PDO('sqlite:' . $db_file);
		$table_name = 'users';
		$userName="admin";
		$sql = "SELECT * FROM $table_name WHERE username = :userName";
		$stmt = $pdo->prepare($sql);
		$stmt->bindParam(':userName', $userName);
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		foreach ($row as $key => $value) {
			echo "<li>$key: $value</li>";
		}
		$pdo = null;

	?>
<script src="start.js"></script>
<!--<button onclick="window.location.href='./install/createDB.php'">Telepítés!</button>-->
</body>
</html>
