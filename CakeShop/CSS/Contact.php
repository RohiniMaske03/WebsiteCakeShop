<?php

    //server connection database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Contact";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $FName = $_POST["FName"] ;
    $LName = $_POST['LName'] ;
    $Addr = $_POST['Addr'];
    $Msg = $_POST['Msg'];

    $sql = "insert into Contact (`FName`, `LName`, `Addr`, `Msg`) VALUES ('".$FName."', '".$LName."', '".$Addr."', '".$Msg."');";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
     mysqli_close($conn);
?>

