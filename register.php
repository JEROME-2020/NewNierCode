<?php

    include('connection.php');


    if(isset($_POST['register'])){


     $username = $_POST['username'];
     $Email = $_POST['Email'];
     $Password = $_POST['password'];


     $sql = "SELECT * FROM user_records where email = '$Email'";
     $select = mysqli_query($connect_db, $sql);
 
     $row = mysqli_num_rows($select);

     if($row > 0){
        echo "Error the user is Exist";
    }
    else{
        $sql = "INSERT INTO user_records(
            username,  
            email,   
            password)
VALUES(
    '$username',
    '$Email ', 
    '$Password'
    )
";


    $inserted = mysqli_query($connect_db, $sql);

    if($inserted){
        echo "The user is Register";
    }
    else{
        echo "The user is Not Register";
    }

    }
}
?>