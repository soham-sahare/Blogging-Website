<?php

    session_start();
    $uname = $_SESSION['uname'];
    
    $conn = new mysqli("sql303.epizy.com", "epiz_26800800", "2uqemF7hOU4", "epiz_26800800_vplacement");
    if($conn->connect_error)
    {
        die("Connection failed:". $conn->connect_error);
    }

    $query = "SELECT `user_id` FROM `users` WHERE `username`='$uname';";
    $result = $conn->query($query);
    
    $row = mysqli_fetch_assoc($result);
    $user_id = $row['user_id'];
    
    $name = $_POST['name'];
    $message = $_POST['message'];
    $link = $_POST['link'];

    $sql = "insert into `blogs`(`blogname`, `blogtext`, `blogimg`, `user_id`) values ('$name', '$message', '$link', '$user_id')";

    if (mysqli_query($conn, $sql)) {
        header('location: index.php');
        echo "New record created successfully";
    } 
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
        
    mysqli_close($conn);

?>