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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<div class="iletisimContainer">

    <div><h1 STYLE="text-align: center;">İLETİŞİM FORMU</h1></div>

    <div class="iletisimOrtalama">

        <div class="iletisimBilgileri">
            <form action="">
                <div class="form-group">
                    <label>İsim</label>
                    <input class="form-control" type="text" name="Name" id="Name" placeholder="Adınızı ve soyadınızı giriniz" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="text" name="Email" id="Email" placeholder="Email adresinizi giriniz" required>
                </div>
                <div class="form-group">
                    <label>Mesaj</label>
                    <textarea class="form-control" type="text" name="Message" id="Message" rows="12" required></textarea>
                </div>
                <center><input type="submit" name="Gonder" class="btn btn-primary" id="Gonder" value="Gönder" onclick="return false"/></center>
            </form>
        </div>

        <div class="iletisimMap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12043.975711911997!2d28.6364378!3d41.0035061!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x67da154978c91278!2zQmV5bGlrZMO8esO8IEvEsXJsYW5nxLHDpyBCaXNpa2xldCBTcG9yIEt1bMO8YsO8!5e0!3m2!1str!2str!4v1607255332592!5m2!1str!2str
                    " width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>


    </div>
    <center><div class="iletisimAlert"></div></center>

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

<script>
    $(document).ready(function(){

        $("#Gonder").click(function(){

            var name = $("input[name=Name]").val();
            var eMail = $("input[name=Email]").val();
            var message = $("textarea[name=Message]").val();

            console.log(name,eMail,message);

            $.ajax({
                url: "iletisimGonder.php",
                type: "POST",
                data:{
                    'name':name,
                    'eMail':eMail,
                    'message':message
                },
                success: function(result){
                    alert(result);
                    if (result=="Mesajınız gönderildi. Yetkililer size en kısa süre içerisinde dönüş sağlayacaklardır."){
                    $("input[name=Name]").val('');
                    $("input[name=Email]").val('');
                    $("textarea[name=Message]").val('');
                    }
                }
            });
        });

    });

    $(document).ready(function(){

        $("#cikisYap").click(function(){

            $.ajax({
                url: "logOut.php",
                type: "GET",
                success: function(result){
                    alert("Başarıyla çıkış yaptınız!");
                    location.reload();
                }
            });
        });

    });
</script>