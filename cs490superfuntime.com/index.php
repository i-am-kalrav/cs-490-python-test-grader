<?php
session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
	if($_SESSION["role"] === "Admin")
		{
			header("Location: admin.php");
		}
		else
		{
			header("Location: user.php");
		}
		die;
    
    exit;
}

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="container">
        <br>
        <h1>CS 100 Grading System</h1>
        <h3>Login System</h3>
        <form action="connect.php" method="post">
             <label for="uname">Username:</label><br>
             <input type="text" id="uname" name="uname" value=""><br>
             <label for="pass">Password:</label><br>
             <input type="password" id="pass" name="pass" value=""><br><br>
             <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
