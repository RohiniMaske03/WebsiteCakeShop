<?php

    //server connection database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Registration";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $FName = $_POST["FName"] ;
    $LName = $_POST['LName'] ;
    $mobileno = $_POST['mobileno'];
    $Date = $_POST['Date'];
    $menu = $_POST['menu'];
    $Price = $_POST['Price'];
    $Address = $_POST['Address'];

    $sql = "insert into registration (`FName`, `LName`, `mobileno`, `Date`, `menu`,`Price`,`Address`) VALUES ('".$FName."', '".$LName."', '".$mobileno."', '".$Date."', '".$menu."', '".$Price."', '".$Address."');";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
     mysqli_close($conn);
?>

