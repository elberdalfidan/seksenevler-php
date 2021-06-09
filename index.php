<?php
require('controller/session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link href="css/index.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="libraries/bootstrap/css/bootstrap.min.css">
    <?php  include('vendor/navbar.php') ?>
</head>
<body class="loggedin">
<div class="content">
    <h2>Home Page</h2>
    <p>Welcome back, <?=$_SESSION['name']?>!</p>
    <span>TEST</span>
</div>
</body>
</html>
