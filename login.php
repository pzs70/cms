<!DOCTYPE HTML>
<html lang="en">
<head>
    <?php session_start(); ?>
</head>
<body>
    <?php
    if (isset($_SESSION["name"])){
        echo "Van session...</br>";
        echo "Logged in: ".$_SESSION["name"];
        $_SESSION["name"]=null;
    }
    else{
        echo "nincs session...</br>";
        if (($_POST["uName"]=="X")){
            $_SESSION["name"]="X";
        }
        else{
            echo "Hibás felhasználónév";
        }
    ?>
        <form action="login.php" method="post">
        <label for="uName">Username</label>
        <input type="text" placeholder="Enter Username" name="uName" required>
        <label for="pw">Password</label>
        <input type="password" placeholder="Enter password" name="pw" required>
        <button type="submit">Login</button>
    </form>
    <?php
    }
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
    ?>

</body>
</html>