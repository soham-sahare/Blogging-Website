<?php

    $conn = new mysqli("sql303.epizy.com", "epiz_26800800", "2uqemF7hOU4", "epiz_26800800_vplacement");
    if($conn->connect_error)
    {
        die("Connection failed:". $conn->connect_error);
    }

    if(isset($_POST['submit']))
    {
        $uname = $_POST['username'];
        $password = $_POST['password'];

        $sql = "select * from users where `username`='$uname'AND `password`='$password'";
        $result = mysqli_query($conn, $sql);
        
        if($result)
        {
            if(mysqli_num_rows($result) > 0){
                            
                session_start();
                $_SESSION['login'] = true;
                $_SESSION['uname'] = $uname;
                header('location: index.php');
            }
            else{
                $_SESSION['login'] = false;
                echo "Invalid Credentials. Please try again, Or signup.";
            }
        }

    }
?>