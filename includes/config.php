<?php

ob_start(); //Turns out output buffering
session_start(); 

date_default_timezone_set("America/New_York");

try {
    $con = new PDO("mysql:dbname=dreamingstreaming;host=localhost", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (PDOException $e){
    exit("Connection failed: " . $e->getMessage());
}

?>