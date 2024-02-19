<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
        <?php

        // SQLite adatbázis fájl elérési útja
        $db_file = 'mydb.sqlite';

        // PDO objektum létrehozása
        $pdo = new PDO('sqlite:' . $db_file);

        // Tábla létrehozása SQL parancs
        $sql = "CREATE TABLE IF NOT EXISTS users (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            username VARCHAR(255) NOT NULL UNIQUE,
            name VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            password VARCHAR(255) NOT NULL
        )";
        $pdo->exec($sql);

        //INSERT Data
        $table_name='users';
        // Oszlopok listája
        $columns = array('username', 'name', 'email', 'password');
        // Beillesztendő értékek
        $pwhash=password_hash('jdoe', PASSWORD_BCRYPT);
        //echo $pwhash;
        $values = array('jdoe2', 'John Doe', 'johndoe@example.com', $pwhash); 
        // Előkészített INSERT parancs
        $sql = "INSERT INTO $table_name (" . implode(', ', $columns) . ") VALUES (:username, :name, :email, :password)";
        // Paraméterek bind-olása
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':username', $values[0]);
        $stmt->bindParam(':name', $values[1]);
        $stmt->bindParam(':email', $values[2]);
        $stmt->bindParam(':password', $values[3]);

        // Parancs végrehajtása
        $stmt->execute();
        //$x=$stmt;
        //echo $values[3];

        // Tábla létrehozása SQL parancs végrehajtása
        //$pdo->exec($sql);

        // Kapcsolat bezárása
        $pdo = null;

        echo "Adat beírva az adatbázisba!";

        ?>
</body>
</html>
