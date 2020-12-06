<?php
require_once("dbconnect.php");
require_once("functions.php");
error_reporting(0);
$userLevel = 0;
$userLevel = $_SESSION['userLevel'];
?>

<!DOCTYPE html>
<html lang="tr">
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



    <div class="slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="../images/1.JPG" alt="">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../images/2.JPG" alt="">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../images/3.JPG" alt="">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../images/4.JPG" alt="">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>


    <div class="contents">

        <?php

        $sorgu = $db->query("SELECT co.Id,co.Topic,co.Text,co.Pictures,co.CreationDate,cat.Name FROM contents co INNER JOIN categories cat ON co.Category=cat.Id WHERE co.Confirm = 1 ORDER BY co.Id DESC");
        while ( $veri = $sorgu->fetch(PDO::FETCH_ASSOC) ){
            $veri['Id'];
            $veri['Topic'];
            $veri['Text'];
            $veri['Pictures'];
            $veri['CreationDate'];
            $veri['Name'];
            ?>

            <div class="contentBorder">

                <img src="<?php echo $veri['Pictures']; ?>" alt="">
                <div class="content">
                    <div class="category"><?php echo $veri['Name']; ?></div>
                    <div class="topic"><h1><?php echo $veri['Topic']; ?></h1></div>
                    <div class="text"><?php echo DevaminiOku(resimKaldir($veri['Text']),$veri['Id']);?></div>
                </div>
                <div class="creationDate"><?php echo $veri['CreationDate']; ?></div>

            </div>

            <?php
        }
        ?>


    </div>

    <div class="pagination">

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