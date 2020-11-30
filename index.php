<?php

    session_start();

    $conn = new mysqli("sql303.epizy.com", "epiz_26800800", "2uqemF7hOU4", "epiz_26800800_vplacement");
    if($conn->connect_error)
    {
        die("Connection failed:". $conn->connect_error);
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  		<title>Destiny Social</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    </head>

<body>

    <?php

        if($_SESSION['login'] == false) {
            include 'navbar1.php';
        }
        else{
            include 'navbar2.php';
        }
        
    ?>

    <div id="video-container">
        <div class="video-overlay"></div>

        <div class="video-content">
            <div class="inner">
                
            <?php

                if($_SESSION['login'] == false) {
                    include 'noaddBtn.php';
                }
                else{
                    include 'addBtn.php';
                }

            ?>

            </div>
        </div>

        <video autoplay="" loop="" muted>
        	<source src="highway-loop.mp4" type="video/mp4" />
        </video>
        
    </div>

    <div id="addmodal" class="modal">
        <div class="modal-content">

            <div class="modal-header">
                <h3 class="header-title">Add to our wall</h3>
                <div class="close-btn"><img src="img/close_contact.png" alt=""></div>    
            </div>
            <div class="modal-body">
                <diva>
                    <form id="add" action="add.php" method="post">
                        <div>
                            <div>
                                 <input name="name" type="text" class="form-control" id="name" placeholder="Name of blog" required></fieldset>
                            </div>
                            <div>
                                 <textarea name="message" rows="6" class="form-control" id="message" placeholder="Blog" required></textarea></fieldset>
                            </div>
                            <div>
                                 <input name="link" type="text" class="form-control" id="link" placeholder="Image Link" required></fieldset>
                            </div>
                            <div>
                                 <button type="submit" id="form-submit" class="btn">Add</button></fieldset>
                            </div>
                        </div>
                    </form>
                </diva>
            </div>
        </div>
    </div>

    <div class="full-screen-portfolio" id="portfolio">

        <?php
           
            $query1 = "SELECT * FROM `blogs`;";
            $result1 = $conn->query($query1);
            while($arr1 = mysqli_fetch_assoc($result1)){
            
                $blogname = $arr1['blogname'];
                $blogtext = $arr1['blogtext'];
                $blogimg = $arr1['blogimg'];
                $user_id = $arr1['user_id'];

                $uname_query = "SELECT `username` FROM `users` WHERE `user_id`='$user_id';";
                $result = $conn->query($uname_query);
                
                $row = mysqli_fetch_assoc($result);
                $username = $row['username'];
        ?>
        
            <div class="course row">
                <div class="col-sm-12 text-center">
                    <h1><?=$blogname?></h1>
                    <h6>Author: <?=$username?></h6>
                    <hr>
                </div>
                <div class="preview col-sm-6 text-center">
                    <figure><img class="img" src="<?=$blogimg?>" alt=""></figure>
                </div>
                <div class="info col-sm-6 text-center">
                    <h6><?=$blogtext?></h6>
                </div>
            </div>
                    
        <?php 
        } 
        ?>
    </div>

    <div class="popup-icon">
        <button id="modBtn" class="modal-btn"><img src="img/contact-icon.png"></button>
    </div>

    <div id="modal" class="modal">
        <div class="modal-content">

            <div class="modal-header">
                <h3 class="header-title">Say hello to Destiny Social</h3>
                <div class="close-btn"><img src="img/close_contact.png" alt=""></div>    
            </div>
            <div class="modal-body">
                <div class="col-md-6 col-md-offset-3">
                    <form id="contact" action="contact.php" method="post">
                        <div class>
                            <div>
                                 <input name="name" type="text" class="form-control" id="name" placeholder="Name" required></fieldset>
                            </div>
                            <div>
                                 <input name="email" type="email" class="form-control" id="email" placeholder="Email" required></fieldset>
                            </div>
                            <div>
                                 <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message" required></textarea></fieldset>
                            </div>
                            <div>
                                 <button type="submit" id="form-submit" class="btn">Send</button></fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div>
            <div>
                <p>Copyright &copy; 2020 | Destiny Social<br>Soham Sahare | Ruthvik Raut | Anish Ashtaputre</p>
                
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>