<?php
		$db_file = 'mydb.sqlite';
		$pdo = new PDO('sqlite:' . $db_file);
		$table_name = 'users';
		$userName="*";
		$sql = "SELECT * ";
        $sql.= " FROM $table_name";
        //$sql.= " WHERE username = :userName";
		$stmt = $pdo->prepare($sql);
		//$stmt->bindParam(':userName', $userName);
		$stmt->execute();
		$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //$rows=array();
		//while ($row = $stmt->fetch()) {
            //$rows+=$row;
        //}
        //read_r ($row)
        /*
        foreach ($row as $key => $value) {
			echo "<li>$key: $value</li>";
		}
        */
		$pdo = null;

	?>