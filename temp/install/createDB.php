<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<?php

	// SQLite adatbázis fájl elérési útja
	$db_file = '../database/mydb.sqlite';
	$pdo = new PDO('sqlite:' . $db_file);
	echo $db_file;
	// users,groups,folders tábla létrehozása
	$sql = "CREATE TABLE IF NOT EXISTS users (
	    id INTEGER PRIMARY KEY AUTOINCREMENT,
	    username VARCHAR(255) NOT NULL UNIQUE,
	    name VARCHAR(255),
	    email VARCHAR(255),
	    password VARCHAR(255) NOT NULL
	)";
	$pdo->exec($sql);
	$sql = "CREATE TABLE IF NOT EXISTS groups (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            groupname VARCHAR(255) NOT NULL UNIQUE
	)";
	$pdo->exec($sql);
	$sql = "CREATE TABLE IF NOT EXISTS folders (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            foldername VARCHAR(255) NOT NULL UNIQUE
	)";
	$pdo->exec($sql);

	//INSERT default user into users
	$table_name='users';
	$columns = array('username', 'name', 'email', 'password');
	$pwhash=password_hash('admin', PASSWORD_BCRYPT);
	$values = array('admin', 'Admin', '', $pwhash); 	
	$sql = "INSERT INTO $table_name (" . implode(', ', $columns) . ") VALUES (:username, :name, :email, :password)";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':username', $values[0]);
	$stmt->bindParam(':name', $values[1]);
	$stmt->bindParam(':email', $values[2]);
	$stmt->bindParam(':password', $values[3]);
	$stmt->execute();

	// Kapcsolat bezárása
	$pdo = null;

	echo "done";

	?>
</body>

