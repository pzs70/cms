<!DOCTYPE HTML>
<html lang="en">
<head>
    <?php session_start(); ?>
    <?php require "./include/dbo.php" ?>
    
</head>
<body>
    <?php
    if ($_SESSION["name"]=="x"){
    echo "Logged in: ".$_SESSION["name"];
    ?>
    <a href="logout.php"> Logout</a>
    <?php
    //($_SESSION["name"]=null;
    }
    if ($_POST["uName"]){
        $users="x";
        $pw="x";
        if (($_POST["uName"]==$users) && ($_POST["pw"]==$pw)){
            $_SESSION["name"]="x";
            //echo "Login succesful... ";
            echo "Logged in: ".$_SESSION["name"];
            ?>
            <a href="logout.php"> Logout</a>
            <?php  
        }
        else{
            ?>
            <form action="login.php" method="post">
                <label for="uName">Username</label>
                <input type="text" placeholder="Enter Username" name="uName" required>
                <label for="pw">Password</label>
                <input type="password" placeholder="Enter password" name="pw" required>
                <button type="submit">Login</button>
            </form>
            <?php
            echo "Hibás felhasználónév vagy jelszó";
        }
    }
    else{
        ?>
        <form action="login.php" method="post">
            <label for="uName">Username</label>
            <input type="text" placeholder="Enter Username" name="uName" required>
            <label for="pw">Password</label>
            <input type="password" placeholder="Enter password" name="pw" required>
            <button type="submit">Login</button>
        </form>
        <?php
        //echo "nincs session vagy post";
    }
    /*
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
    */
    foreach ($rows as $row){
        foreach ($row as $key => $value) {
            echo "<li>$key: $value</li>";
        }
    }

    ?>

</body>
</html>