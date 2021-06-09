<?php
require('../seksenevler-php/controller/session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link href="../seksenevler-php/css/index.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="../seksenevler-php/libraries/bootstrap/css/bootstrap.min.css">
    <?php  include('vendor/navbar.php') ?>
</head>
<body class="loggedin">
<div class="content" style="text-align: center">
    <form method="post" id="addMemberForm">
        <div class="col-12">
            <div class="col-3">
                <div class="form-group">
                    <label for="ad">Ad</label>
                    <input class="form-control" id="ad" name="ad">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="soyad">Soyad</label>
                    <input class="form-control" id="soyad" name="soyad">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="tc">TC</label>
                    <input class="form-control" id="tc" name="tc">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="tel">Telefon</label>
                    <input class="form-control" id="tel" name="tel">
                </div>
            </div>

            <div class="col-3">
                <div class="form-group">
                    <label for="adres">Adres</label>
                    <textarea id="adres" class="form-control" name="adres"></textarea>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="kapi-no">Kapı No (80 Evler)</label>
                    <input class="form-control" id="kapi-no" name="kapi-no">
                </div>
            </div>
            <div class="col-auto">
                <input class="btn btn-primary" type="button" value="Ekle" id="add-member-button">
            </div>
        </div>
    </form>
</div>
</body>
<script src="../seksenevler-php/libraries/jquery/jquery-3.6.0.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../seksenevler-php/js/add-member.js"></script>
</html>
