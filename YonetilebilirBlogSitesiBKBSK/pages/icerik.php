<?php

require_once("dbconnect.php");
require_once("functions.php");
$_SESSION['contentId'] = $_GET['id'];
error_reporting(0);
$userLevel = 1;
$userLevel = $_SESSION['userLevel'];

?>

<!DOCTYPE html>
<html lang="tr">
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


<!-- İÇERİK GÖRÜNÜLEME BAŞLANGICI -->
<div class="cContainer">

<?php
$sorgu = $db->query("SELECT * FROM contents where Id = {$_GET['id']}");
while ( $veri = $sorgu->fetch(PDO::FETCH_ASSOC) ){
    $veri['Id'];
    $veri['Topic'];
    $veri['Text'];
    $veri['Pictures'];
?>
        <div class="cBanner">
            <img src="<?php echo $veri['Pictures']; ?>" alt="">
        </div>

        <div class="cTopic">
            <h1><?php echo $veri['Topic']; ?></h1>
        </div>

        <div class="cText">

            <?php echo $veri['Text']; ?>
        </div>

        <?php
    }
    ?>


</div>

<!--  YORUM GÖNDERME BÖLÜMÜ  -->

<?php
if ($userLevel<1){
    echo "Yorum yapabilmek için öncelikle giriş yapmalısın! <br>";
}else{
?>

<div class="alert"></div>
<div class="cCommentContainer">

    <div class="commentSend">
        <form action="" method="">
	
            <table class="table">
                <h1 style="text-align: center;">Yorum yap</h1>  
        
                <tr>
                    <td>Başlık:</td>
                    <td><input type="text" name="formYorumBaslik" class="form-control" ></td>
                </tr>
        
                <tr>
                    <td>Yorum:</td>
                    <td><textarea name="formYorumIcerik" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea></td>
                </tr>
        
                <tr>
                    <td></td>
                    <td><input class="btn btn-primary"  type="submit" id="Gonder" onclick="return false" value="Gönder"></td>
                </tr>
        
            </table>
        
        </form>
    </div>
</div>


    <!-- YORUM GÖNDERME BÖLÜMÜ SONU -->

    <!-- YORUM LİSTELEME BÖLÜMÜ -->

<?php
}
    $yorumGetir = $db->query("SELECT u.FirstName, u.LastName, c.Topic, c.Text, c.CreationDate, c.Confirm FROM comments c INNER JOIN users u on 
    c.Owner = u.Id INNER JOIN contents co ON c.Content = co.Id WHERE c.Confirm = '1' and co.Id={$_GET['id']} ORDER BY c.id DESC");

    while ($yorumGeldi = $yorumGetir->fetch(PDO::FETCH_ASSOC) ){
        $yorumGeldi['FirstName'];
        $yorumGeldi['LastName'];
        $yorumGeldi['Topic'];
        $yorumGeldi['Text'];
        $yorumGeldi['CreationDate'];
?>
    <div class="commentShow">
           
        <div class="comment">
            <div class="topic"><h2><?php echo $yorumGeldi['Topic'];?></h2></div>
            <div class="text"><p><?php echo $yorumGeldi['Text']; ?></p></div>
            <div class="commentDetails">
                <div class="author"><h5><?php echo $yorumGeldi['FirstName']." ".$yorumGeldi['LastName']; ?></h5></div>
                <div class="date"><h6><?php echo $yorumGeldi['CreationDate'];?></h6></div>
            </div>
            </div>

    </div>

<?php
    }

?>     



    <!-- YORUM LİSTELEME BÖLÜMÜ SONU -->

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

            var baslik = $("input[name=formYorumBaslik]").val();
            var icerik = $("textarea[name=formYorumIcerik]").val();

            $.ajax({
                url: "commentSend.php",
                type: "POST",
                data:{
                    'baslik':baslik,
                    'icerik':icerik
                },
                success: function(result){
                    $(".alert").show();
                    $(".alert").html(result);
                    $("input[name=formYorumBaslik]").val('');
                    $("textarea[name=formYorumIcerik]").val('');
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
