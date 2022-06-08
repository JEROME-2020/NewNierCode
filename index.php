<?php 
    

    // If the session is Exist the you can access this code for login

	session_start();

	if(isset($_SESSION['Email'])){
        
		header('location: http://localhost/NIercode/Welcome.php');

	}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is Sample Login page</h1>
    <form action="Login.php" method="post">
        <label for="#">Enter your Email: </label><input type="email" name="Email" require><br><br>
        <label for="#">Enter your passwprd: </label><input type="password" name="password" require><br><br>
        <input type="Submit" value="Login Now" name="login">
    </form>
    <br>
    <br>
    <br>
    <p>=====================================================</p>
    <br>
    <br>
    <h2>Register the user</h2>
    <form action="register.php" method="post">
        <label for="#">Register the user name:</label>&nbsp;<input type="text" name="username" require><br><br>
        <label for="#">Register the user emailAddress:</label>&nbsp;<input type="email" name="Email" require><br><br>
        <label for="#">Register the user password:</label>&nbsp;<input type="password" name="password" require><br><br>
        <input type="Submit" value="Login Now" name="register">
    </form>

</body>
</html>
