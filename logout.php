<!DOCTYPE HTML>
<html lang="en">
<head>
    <?php session_start(); ?>
</head>
<body>
    <?php
    if (isset($_SESSION["name"])){
        echo "Logged in: ".$_SESSION["name"]."</br>";
        $_SESSION["name"]=null;
    }
    else{
        echo "No user was logged in...</br>";
    }
    ?>
    <a href="login.php">login</a>

</body>
</html>