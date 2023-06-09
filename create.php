<?php 
    include "config.php";

    if(isset($_POST['submit'])) {
        $first_name = $_POST['firstname']; 
        $last_name = $_POST['lastname']; 
        $email = $_POST['email']; 
        $password = $_POST['password'];
    }

    $sql = "INSERT INTO 'users' ('firstname', 'lastname', 'email', 'password') VALUES ('$first_name', '$last_name', '$email', '$password')";

    $result = $conn->query();

    if($result == TRUE){
        echo "New user created";
    }
    else{
        echo "Error:" .$sql . "<br>". $conn->error;
    }

    $conn->close();


?>