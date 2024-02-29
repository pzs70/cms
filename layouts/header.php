<?php 
	if (!isset($layout_context)) {
		$layout_context = "public";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
  <?php
    if ($_POST["submit"]){
        $users="x";
        $pw="x";
        
        if (($_POST["uName"]==$users) && ($_POST["pw"]==$pw)) { 
            $_SESSION["name"]="x";
            #echo "Login successful!";
        }
        else{
            echo '<p style="color:red;">Wrong username or password</p>';
        }
    }
    if ($_SESSION["name"]){
      //echo "Login succesful... ";
      echo "Logged in: ".$_SESSION["name"];
      ?>
      <a href="logout.php"> Logout</a>
      <?php  
  }

    else{
    ?>  
		  <form action="index.php" method="post">
            <label for="uName">Username</label>
            <input type="text" placeholder="Enter Username" name="uName" required>
            <label for="pw">Password</label>
            <input type="password" placeholder="Enter password" name="pw" required>
            <button type="submit" name="submit" value="Submit">Login</button>
        </form>
        <?php } ?>
		<title>Widget Corp <?php if ($layout_context == "admin") { echo "Admin"; } ?></title>
    <link href="stylesheets/public.css" media="all" rel="stylesheet" type="text/css" />
	</head>
	<body>
    <div id="header">
      <h1>Widget Corp <?php if ($layout_context == "admin") { echo "Admin"; } ?></h1>
    </div>

