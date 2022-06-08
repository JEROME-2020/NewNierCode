<?php

    session_start();

    include('connection.php');

    if(isset($_POST['login'])){

        $Email = $_POST['Email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user_records WHERE email = '$Email' and  password = '$password'";

        $result = mysqli_query($connect_db, $sql);


        $row = mysqli_num_rows($result);

        if($row == 1){  
            $_SESSION['Email'] = $Email;
            header('location: http://localhost/NIercode/Welcome.php');
        
        }
        else{
            echo "<span style='color: red;'>Your input is Invalid</span>";
        }
    }


?>