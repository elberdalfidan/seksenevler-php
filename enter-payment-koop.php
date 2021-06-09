<?php
require('controller/session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>KOOPERATİF Ödeme Gir</title>
    <link href="css/index.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="libraries/bootstrap/css/bootstrap.min.css">
    <?php  include('vendor/navbar.php') ?>
</head>
<body class="loggedin p-1">
<h4 class="text-center">KOOPERATİF</h4>
<div class="">
    <div class="col-12">

        <div class="table">

            <table class="table table-responsive-lg" id="uyeler-table">

                <thead>

                <tr>

                    <th>Ad</th>

                    <th>Soyad</th>

                    <th>Kapı No</th>

                    <th>Eski Borç</th>

                    <th>1. Ay</th>

                    <th>2. Ay</th>

                    <th>3. Ay</th>

                    <th>4. Ay</th>

                    <th>5. Ay</th>

                    <th>6. Ay</th>

                    <th>7. Ay</th>

                    <th>8. Ay</th>

                    <th>Ödenen</th>

                    <th>Kalan Borç</th>

                    <th></th>

                    <th></th>

                </tr>

                </thead>



            </table>

        </div>

    </div>
</div>
</body>
<script src="libraries/jquery/jquery-3.6.0.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="js/enter-payment-koop.js"></script>
</html>
