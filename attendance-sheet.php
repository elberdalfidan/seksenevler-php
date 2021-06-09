<?php
require('controller/session.php');
include("controller/connection.php");
$users = $db->query('SELECT * FROM uyeler')->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hazirun Cetveli</title>
    <link href="css/index.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="libraries/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.24/af-2.3.6/b-1.7.0/b-colvis-1.7.0/b-html5-1.7.0/b-print-1.7.0/cr-1.5.3/date-1.0.3/fc-3.3.2/fh-3.1.8/rg-1.1.2/rr-1.2.7/sl-1.3.3/datatables.min.css"/>
    <?php  include('vendor/navbar.php') ?>
</head>
<body class="loggedin">
<div class="content">
    <div class="col-12">
        <div class="table">
            <table class="table" id="uyeler-table"  class="display" style="width:100%">
                <thead>
                <tr>
                    <th>Ad</th>
                    <th>Soyad</th>
                    <th>Tc</th>
                    <th>Adres</th>
                    <th>Asaleten</th>
                    <th>Vekaleten</th>


                </tr>
                </thead>

                <tbody>
                <?php foreach ($users as $user):?>
                    <tr>
                        <td><?=$user['ad'] ?></td>
                        <td><?=$user['soyad'] ?></td>
                        <td><?=$user['tc'] ?></td>
                        <td><?= $user['adres'] ?></td>
                        <td><input class="form-control"></td>
                        <td><input class="form-control"></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>
</div>
</body>
<script type="text/javascript" src="libraries/jquery/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.24/af-2.3.6/b-1.7.0/b-colvis-1.7.0/b-html5-1.7.0/b-print-1.7.0/cr-1.5.3/date-1.0.3/fc-3.3.2/fh-3.1.8/rg-1.1.2/rr-1.2.7/sl-1.3.3/datatables.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script>
    $(document).ready(function() {
        $('#uyeler-table').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'print'
            ]
        } );
    } );
</script>
</html>
