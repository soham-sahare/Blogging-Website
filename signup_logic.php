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
        $conf_password = $_POST['conf_password'];

        $query = "SELECT `username` FROM `users` WHERE `username`='$uname';";

        if($result = mysqli_query($conn, $query)){

            if(mysqli_num_rows($result)>0){
                echo "Username exist";
            }
            else{
                if($conf_password == $password){

                    if(strlen($password) > 6){
                        $sql = "insert into `users`(`username`, `password`) values ('$uname', '$password')";
                    
                        if (mysqli_query($conn, $sql)) {
                            header('location: login.php');
                            echo "New record created successfully";
                        } 
                        else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
        
                        mysqli_close($conn);
                    }
                    else{
                        echo "Password must be greater than 6 characters. Please try again.";
                    }
                    
                }
                else{
                    echo "Password does not match. Please try again.";
                }
            }
        }

    }

?>