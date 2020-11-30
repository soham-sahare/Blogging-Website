<?php

    session_start();

    $conn = new mysqli("sql303.epizy.com", "epiz_26800800", "2uqemF7hOU4", "epiz_26800800_vplacement");
    if($conn->connect_error)
    {
        die("Connection failed:". $conn->connect_error);
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>About us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <style>
        * { 
            margin: 0px; 
            padding: 0px; 
            box-sizing: border-box; 
            -webkit-font-smoothing: antialiased; 
            font-family: 'Kanit', sans-serif;
        }

        body::-webkit-scrollbar {
  width: 8px;
  height: 8px;
  background-color: rgba(0, 0, 0, 0.9);
}

body::-webkit-scrollbar-thumb {
    background: rgba(250, 250, 250, 0.5);
}

        img { 
            -ms-interpolation-mode: bicubic; 
            border: 0; height: auto; 
            max-width: 100%; 
            display: block;  
        }

        body { 
            background: #1a191d; 
        }

        .About_sec { 
            padding: 115px 0px 88px 0px ; 
            width: 100%; 
            height: 100%;
            overflow: hidden; 
        }

        .About_sec .Center { 
            max-width: 1100px; 
            margin: auto; 
            overflow: hidden; 
            text-align: center; 
        }

        .About_sec h2 { 
            font-size: 56px; 
            color: #fff; font-family: 'Oswald', sans-serif; 
            font-weight: 400; margin: 0px; 
            text-transform: uppercase; 
            line-height: 60px; 
            letter-spacing: -0.4px; 
        }

        .About_sec p { 
            padding: 24px 0px 35px 0px;
            font-size: 20px; 
            color: #ffffff;
            margin: 0px;
            font-family: 'Open Sans', sans-serif;
            line-height: 25px; 
            font-weight: 400; 
        }

        .About_sec .Line { 
            border: solid 1px white; 
            height: 2px; 
            width: 252px; 
            margin: auto; 
        }

        .About_sec .Tabside { 
            padding: 90px 0px; 
            width: 100%;
        }

        .About_sec .Tabside .TabImage {
            width: 43.63%; 
            float: left; 
            position: relative; 
        }

        .About_sec .Tabside .TabImage .img1 { 
            position: absolute;
            top: 0px; 
            left: 42px; 
            height: 260px; 
            background: url(../img/about-shadow.png) no-repeat;
            background-position: 25px 223px; 
        }

        .About_sec .Tabside .TabImage .img1 img { 
            padding: 5px; 
            border: solid 1px #ececec; 
            background: #fff;  
        }

        .About_sec .Tabside .TabImage .img2 { 
            position: absolute;
            top: 40px;
            left: 2px; 
            height: 260px; 
            background: url(../img/about-shadow.png) bottom center no-repeat; 
            background-position: 0px 223px; 
        }

        .About_sec .Tabside .TabImage .img2 img { 
            padding: 5px; 
            border: solid 1px #ececec; 
            background: #fff;  
        }

        .About_sec .Tabside .Description { 
            width: 54.3%; 
            float: right; 
            text-align: left; 
            margin-top: -6px;
        }

        .About_sec .Tabside .Description h3 { 
            font-size: 24px; 
            color: #fff; 
            margin: 0px; 
            text-transform: uppercase; 
            font-family:'Open Sans';
            line-height: 29px; 
        }

        .About_sec .Tabside .Description h3 span { 
            padding-left: 3px; 
            font-size: 14px; 
            color: white; 
            display: block; 
        }

        .About_sec .Tabside .Description p { 
            padding: 21px 0px 4px 0px; 
            font-size: 20px; 
            color: #ffffff; 
            margin: 0px; 
            font-family:'Open Sans'; 
            line-height: 25px; 
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
            background: rgba(250,250,250,0.2);
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
            footer {
            width: 100%;
            height: 80px;
            border-top: 2px solid white;
            background-color: #313131;
            }

            footer p {
            text-align: center;
            color: #fff;
            font-weight: 200;
            font-size: 16px;
            padding: 10px;
            letter-spacing: 0.5px;
            }
            #Container{
                height: 100%;
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

    <div id="Container">
        <div class="About_sec" id="about">
            <div class="Center">            	
                <h2>about us</h2>            		
                <p>Destiny Social allows you to create a beautiful blog that fits your style. Create as many blogs as you want – all with flexible layouts and hundreds of background images of your choice – to fulfill your blogging needs.

                <br> <br> Save the moments that matter. Destiny Social lets you safely store thousands of your blogs for free!!</p>
                <div class="Line"></div>	
                <div class="Tabside">
                    <div class="clear"></div>
                    <div class="tabcontent" id="cont-1-1">
                        <div class="TabImage">
                            <div class="img1">
                                <figure><img src="img/about-img2.jpg" alt="image"></figure>	
                            </div>
                            <div class="img2">
                                <figure><img src="img/about-img1.jpg" alt="image"></figure>
                            </div>
                        </div>
                        <div class="Description">
                            <h3>You’re not alone. We’re here to guide you every step of the way.</span></h3>
                            <p>Reach us on contact us and we can help you launch your blog with confidence. Give your business credibility, make it easy for customers to find you and you can blog about your knowledge or art.</p>
                            <p>All you need to do is login and add a blog and the next is DESTINY.</p>
                            <p></p>
                            <h3>Founders</h3>
                            <p>Soham Sahare (18101B0010)<br>Ruthvik Raut (18101B0009)<br>Anish Ashtaputre (18101B0011)</p>
                        </div>
                    </div>
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