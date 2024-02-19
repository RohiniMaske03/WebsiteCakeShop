<?php

    //server connection database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Login";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $email = $_POST["email"] ;
    $password = $_POST['password'] ;
    
    $sql = "insert into Login (`email`, `password`) VALUES ('".$email."', '".$password."');";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
     mysqli_close($conn);
?>

