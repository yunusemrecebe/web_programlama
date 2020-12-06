<?php

date_default_timezone_set('Europe/Istanbul');


function DevaminiOku($Yazi,$Id){
    $Sayi = strlen($Yazi);
    if($Sayi>0){
        $Bol=substr($Yazi,0,250);
        return $Bol."..."."<a href=icerik.php?id={$Id}> &nbsp;&nbsp;&nbsp; Devamını oku</a>";
    }   
    else{
        echo $Yazi;
    }
}

function resimKaldir($yazi)
{
    $imgBul = strpos($yazi, "<img");
    $yeniYazi = substr($yazi,$imgBul);
    $sonunuBul = strpos($yeniYazi, ">");
    $imgBitimi = $imgBul + $sonunuBul + 1;
    $imgBaslangic = substr($yazi,0,$imgBul);
    $imgBitis = substr($yazi,$imgBitimi);
    $return = $imgBaslangic . $imgBitis;
    $test = strpos($return, "<img");
    if($test !== false)
    {
        $return = resimKaldir($return);
    }
    return($return);
}

?>