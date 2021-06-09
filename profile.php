<?php
require('controller/session.php');
require('controller/config.php');
$stmt = $db->prepare('SELECT name, username, email FROM accounts WHERE id = ?');
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($name,$surname, $email);
$stmt->fetch();
$stmt->close();
?>
<!DOCTYPE html>
<html>
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
    <div class="content">
        <h2>Profile Page</h2>
        <div>
            <p>Your account details are below:</p>
            <table>
                <tr>
                    <td>Username:</td>
                    <td><?=$_SESSION['name']?></td>
                </tr>
                <tr>
                    <td>İsim:</td>
                    <td><?=$name?></td>
                </tr>
                <tr>
                    <td>Soyisim:</td>
                    <td><?=$surname?></td>
                </tr>
                <tr>
                    <td>E-Mail:</td>
                    <td><?=$email?></td>
                </tr>
            </table>
        </div>
</div>
</body>
</html>
