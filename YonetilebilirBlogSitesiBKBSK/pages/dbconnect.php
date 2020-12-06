<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=bkbskblog;charset=utf8", "root", "");
} catch ( PDOException $e ){
    print $e->getMessage();
}

session_start();
?>