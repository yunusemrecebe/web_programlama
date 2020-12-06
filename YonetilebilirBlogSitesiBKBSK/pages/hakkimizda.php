<?php
require_once("dbconnect.php");
require_once("functions.php");
error_reporting(0);
$userLevel = 0;
$userLevel = $_SESSION['userLevel'];
?>


<!doctype html>
<html lang="TR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ac794817c2.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Beylikdüzü Kırlangıç Bisiklet Spor Kulübü</title>
</head>
<body>
<div class="menu">

    <div class="logo">
        <img src="../images/logo.png" alt="" srcset="">
    </div>

    <div class="menuNavbar">
        <ul>
            <li><a href="index.php">Anasayfa</a></li>
            <li><a href="iletisim.php">İletişim</a></li>
            <li><a href="hakkimizda.php">Hakkımızda</a></li>
        </ul>
    </div>

    <div class="hamburger">
        <label for="control"><i class="fas fa-sign-in-alt"></i></label>
        <input type="checkbox" name="" id="control">

        <div class="pro">

            <ul>

                <?php //GİRİŞ YAPMAYAN KULLANICI İÇİN
                if ($userLevel<1){
                    ?>
                    <li><a href="login.php"><i class="fas fa-user"></i>&nbsp;Giriş Yap</a></li>
                    <?php
                }
                ?>

                <?php //STANDART KULLANICI İÇİN
                if ($userLevel==1){
                    ?>
                    <li><a href="logOut.php" id="cikisYap" onclick="return false"><i class="fas fa-user"></i>&nbsp;Çıkış Yap</a></li>
                    <?php
                }
                ?>

                <?php //YETKİLİ KULLANICI İÇİN
                if ($userLevel>1){
                    ?>
                    <li><a href="logOut.php" id="cikisYap" onclick="return false"><i class="fas fa-user"></i>&nbsp;Çıkış Yap</a></li>
                    <li><a href="admin/icerikYonetimi.php"><i class="fas fa-user-edit"></i>&nbsp;Admin Menu</a></li>
                    <?php
                }
                ?>

            </ul>

        </div>
    </div>
</div>

<div class="hakkimizdaContainer">
    <h1 style="text-align: center">HAKKIMIZDA</h1>
    <div>
    <img style="float:right;" src="../images/2.JPG" alt="">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Velit euismod in pellentesque massa placerat.
        Egestas sed sed risus pretium quam vulputate dignissim. At tellus at urna condimentum mattis pellentesque id. Praesent elementum facilisis leo vel fringilla est.
        Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque sit. At imperdiet dui accumsan sit amet. At elementum eu facilisis sed odio morbi.
        Aenean sed adipiscing diam donec adipiscing tristique risus. Accumsan in nisl nisi scelerisque. Integer malesuada nunc vel risus commodo viverra maecenas accumsan lacus.</p>
    </div>
    <div>
    <img src="../images/3.JPG" alt="">
    <p style="float: right; margin-top: 15px;">Sem nulla pharetra diam sit .<br>
        Imperdiet sed euismod nisi porta lorem. Ut ornare <br>
        lectus sit amet est placerat. A pellentesque sit amet porttitor.<br>
        In massa tempor nec feugiat nisl pretium. Id semper <br>
        risus in hendrerit gravida rutrum quisque non. Mauris <br>
        augue neque gravida in fermentum et sollicitudin ac orci. <br>
        Fermentum et sollicitudin ac orci phasellus egestas tellus<br>
        rutrum.Mauris augue neque gravida in fermentum. Facilisis <br>
        gravida neque convallis a cras semper auctor. Morbi tristique<br>
        senectus et netus et. Tempor commodo ullamcorper a lacus <br>
        vestibulum sed arcu non odio. Aliquam malesuada bibendum arcu <br>
        vitae.</p>
    </div>
    <p>Imperdiet proin fermentum leo vel orci porta. Ligula ullamcorper malesuada proin libero nunc consequat interdum. Integer feugiat scelerisque varius morbi enim nunc faucibus a pellentesque. Condimentum mattis pellentesque id nibh. Odio pellentesque diam volutpat commodo. Diam vulputate ut pharetra sit amet. Gravida neque convallis a cras semper. Ultricies mi quis hendrerit dolor. Tellus in hac habitasse platea dictumst. Est ante in nibh mauris cursus mattis molestie a. Quis hendrerit dolor magna eget. Augue ut lectus arcu bibendum at. In hac habitasse platea dictumst vestibulum. Nunc sed blandit libero volutpat sed cras ornare. Purus viverra accumsan in nisl nisi scelerisque eu. Sit amet mattis vulputate enim nulla aliquet porttitor. Porttitor massa id neque aliquam vestibulum morbi blandit cursus. Scelerisque purus semper eget duis at. Nec ultrices dui sapien eget mi proin sed libero.</p>
    <div>
    <img style="width: 100%" src="../images/4.JPG" alt="">
    <p>Eu lobortis elementum nibh tellus molestie nunc non blandit massa. Sollicitudin tempor id eu nisl nunc. Ullamcorper eget nulla facilisi etiam dignissim diam quis enim. Vulputate odio ut enim blandit volutpat maecenas. Cras adipiscing enim eu turpis egestas pretium aenean pharetra. Quis commodo odio aenean sed. Enim diam vulputate ut pharetra. Natoque penatibus et magnis dis parturient montes nascetur ridiculus. Condimentum lacinia quis vel eros donec ac odio. Est ullamcorper eget nulla facilisi etiam. Feugiat vivamus at augue eget arcu dictum varius duis. Erat nam at lectus urna duis convallis. Aliquam sem fringilla ut morbi. Viverra accumsan in nisl nisi. Gravida in fermentum et sollicitudin ac orci. Vulputate ut pharetra sit amet aliquam. Urna condimentum mattis pellentesque id nibh tortor. Cras fermentum odio eu feugiat pretium nibh ipsum consequat.</p>
    </div>
</div>

<div class="footer">
    <div class="adress">
        <p>Adres: Adnan Kahveci, 25-1, Anadolu Cd., 34528 Beylikdüzü <br> </p> <p style="text-align: center">Osb/Beylikdüzü/İstanbul</p>
    </div>

    <div class="social">
        <a href="http://www.facebook.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i></a>
        <a href="http://www.instagram.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></i></a>
        <a href="http://www.twitter.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
        <a href="http://www.youtube.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>