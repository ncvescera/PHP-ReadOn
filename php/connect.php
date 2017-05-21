<?php
$db_host = "localhost";
$db_user = "ncvescera";
$db_pswd = "testipaolo2017";
$db_name = "libri";
$list = array();
 
try
{
    $connection = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pswd);
    $connection-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e)
{
    echo $e;
}
 
 