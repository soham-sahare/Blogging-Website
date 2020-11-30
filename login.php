<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
         @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

        body { background-image: url(highway.png); 
            font-family: Helvetica, Arial, sans-serif;
            text-align: center; 
            display: flex;
            align-items: center;
            justify-content: center;
            background-attachment: fixed;  
            background-size: cover;
            background-repeat:no-repeat;
            background-position:center;
        }
        
        form { 
            max-width:420px; 
            margin:200px auto;
            padding: 20px; 
            border: 2px solid black;
            background:  rgba(250, 250, 250, 0.5);
        }

        .feedback-input {
        color:black;
        font-family: Helvetica, Arial, sans-serif;
        font-weight:500;
        font-size: 18px;
        border-radius: 5px;
        line-height: 22px;
        background-color: transparent;
        border:2px solid  black;
        transition: all 0.3s;
        padding: 13px;
        margin-bottom: 15px;
        width:100%;
        box-sizing: border-box;
        outline:0;
        }

        .feedback-input:focus { border:2px solid #aeaeae; }

        textarea {
        height: 150px;
        line-height: 150%;
        resize:vertical;
        }

        [type="submit"] {
        font-family: 'Montserrat', Arial, Helvetica, sans-serif;
        width: 100%;
        background: white;
        border:  1px solid black;
        border-radius:5px;
        border:0;
        cursor:pointer;
        color:black;
        font-size:24px;
        padding-top:10px;
        padding-bottom:10px;
        transition: all 0.3s;
        margin-top:-4px;
        font-weight:700;
        }
        [type="submit"]:hover { background:#aeaeae; }

        h1{
            color: black;
        }
        a{
            color: black;
        }
        a:hover{
            color: blue;
        }
        nav .logo {
            float: left;
            margin-left: 30px;
            }

            nav .logo a {
            font-size: 28px;
            line-height: 80px;
            text-transform: uppercase;
            color: #fff;
            text-decoration: none;
            letter-spacing: 0.5px;
            }

            nav .logo em {
            font-style: normal;
            font-weight: 200;
            }

            nav {
            background: rgba(0,0,0, 0.5);
            height: 80px;
            position: fixed;
            width: 100%;
            left: 0;
            top: 0;
            z-index: 300;
            box-shadow: 0px 2px 10px 0px rgba(0,0,0,0.5);
            }

            .menu-icon {
            background: transparent;
            border: 1px solid #fff;
            width: 50px;
            height: 50px;
            margin: 15px 39px 0 auto;
            position: relative;
            cursor: pointer;
            transition: background 0.5s;
            border-radius: 5px;
            }

            .menu-icon span,
            .menu-icon span:before,
            .menu-icon span:after {
            cursor: pointer;
            border-radius: 1px;
            height: 2px;
            width: 35px;
            background: white;
            position: absolute;
            left: 15%;
            top: 50%;
            display: block;
            content: '';
            transition: all 0.5s ease-in-out;
            }

            .menu-icon span:before {
            left: 0;
            top: -10px;
            }

            .menu-icon span:after {
            left: 0;
            top: 10px;
            }

            .menu-icon.active {
            background: rgba(250,250,250,0.2);
            }

            .menu-icon.active span {
            background-color: transparent;
            }

            .menu-icon.active span:before,
            .menu-icon.active span:after {
            top: 0;
            }

            .menu-icon.active span:before {
            transform: rotate(135deg);
            }

            .menu-icon.active span:after {
            transform: rotate(-135deg);
            }

            .overlay-menu {
            background: rgba(0, 0, 0, 0.85);
            color: #ffffff;
            position: fixed;
            z-index: 100;
            left: 0;
            top: 0;
            height: 100%;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
            width: 100%;
            padding: 50px 0;
            opacity: 0;
            text-align: center;
            transform: translateY(-100%);
            transition: all 0.5s;
            }

            .overlay-menu.open {
            opacity: 1;
            transform: translateY(0%);
            }

            .overlay-menu .main-menu {
            transform: translateY(50%);
            opacity: 0;
            transition: all 0.3s;
            transition-delay: 0s;
            }

            .overlay-menu.open .main-menu {
            transition: all 0.7s;
            transition-delay: 0.7s;
            opacity: 1;
            transform: translateY(0%);
            }

            .overlay-menu .main-menu:nth-child(2) {
            transition-delay: 0s;
            }

            .overlay-menu.open .main-menu:nth-child(2) {
            transition-delay: 1.25s;
            }

            .overlay-menu {
            overflow: scroll;
            }

            .overlay-menu::-webkit-scrollbar {
            display: none;
            }

            .overlay-menu ul {
            list-style: none;
            margin-top: 80px;
            padding: 0px;
            }
            .overlay-menu ul li {
            padding: 15px 0px;
            }

            .overlay-menu ul li a {
            font-size: 24px;
            font-weight: 300;
            color: #fff;
            text-decoration: none;
            transition: all 0.5s;
            }

            .overlay-menu ul li a:hover {
            color: rgba(250,250,250,0.5);
            }

            .overlay-menu p {
            margin-top: 60px;
            font-size: 13px;
            text-transform: uppercase;
            color: #fff;
            font-weight: 200;
            letter-spacing: 0.5px;
            text-align: center;
            }

            .video-overlay {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  min-width: 100%;
  min-height: 100%;
}

.video-overlay {
  z-index: -1;
  background: rgba(0,0,0,0.5);
  width: 100%;
}
    </style>
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
    <div class="video-overlay"></div>

    <form action="login_logic.php" method="post">      

        <input name="username" type="text" class="feedback-input" id="name" placeholder="Username" required></fieldset>
        <input name="password" type="password" class="feedback-input" id="link" placeholder="Password" required></fieldset>
        <input type="submit" name="submit" class="btn" value="Login">

        <h4>Don't have an account? <a href="signup.php">Signup</a></h4>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/main.js"></script>


</body>
</html>