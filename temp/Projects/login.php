<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
	<form action="auth.php" method="post">
            <label for="userName">
                  Username:
              </label>
            <input type="text"
                   id="userName"
                   name="userName"
                   placeholder="Enter your Username" required>
 
            <label for="password">
                  Password:
              </label>
            <input type="password"
                   id="password"
                   name="password"
                   placeholder="Enter your Password" required>
 
            <div class="wrap">
                <button type="submit"
                        onclick="solve()">
                    Submit
                </button>
            </div>
        
	</form>
	<!-- <?php
		$db_file = 'database/mydb.sqlite';
		if (file_exists($db_file)){
			echo "Content";
		} else{
			echo "<button onclick='window.location.href=\"./install/createDB.php\"'>Telepítés!</button>";
		}

	?>
-->
<script src="start.js"></script>
<!--<button onclick="window.location.href='./install/createDB.php'">Telepítés!</button>-->
</body>
</html>
