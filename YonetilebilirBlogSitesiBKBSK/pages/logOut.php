<?php
require_once("dbconnect.php");

if ($_SESSION['OturumDurumu']==1){
    session_destroy();
}
?>