<?php
try{
    $db = new PDO('mysql:host=localhost;dbname=u9907974_siteadm','root','');
}catch (PDOException $e){
    die($e->getMessage());
}
?>
