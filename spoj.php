<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$db = "fortnite_balkan";

session_start();

try {
    $spoj = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    $spoj->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>