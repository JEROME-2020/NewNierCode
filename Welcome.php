<?php 
    
    session_start();

    if(isset($_SESSION['Email'])){

        // If the session is not exit you can't access this page because the header location will dedirect you from index.php
    }
    else{
        header('location: http://localhost/NIercode/index.php');
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
    <h1>Welcome Mr: <span style="color: green;"><?php echo $_SESSION['Email']; ?></span></h1>

    <a href="http://localhost/NIercode/logout.php">Logout</a>
</body>
</html>