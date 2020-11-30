<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $conn = new mysqli("sql303.epizy.com", "epiz_26800800", "2uqemF7hOU4", "epiz_26800800_vplacement");
    if($conn->connect_error)
    {
        die("Connection failed:". $conn->connect_error);
    }

    $sql = "insert into `contacts`(`name`, `email`, `message`) values ('$name', '$email', '$message')";

    if (mysqli_query($conn, $sql)) {
        header('location: index.php');
        echo "Contact send";
    } 
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
        
    mysqli_close($conn);

?>