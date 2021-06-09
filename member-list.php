<?php
require('controller/connection.php');
require('controller/session.php');
$users = $db->query('SELECT * FROM uyeler')->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link href="css/index.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="libraries/bootstrap/css/bootstrap.min.css">
    <!-- Datatables.net -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.24/af-2.3.6/b-1.7.0/b-colvis-1.7.0/b-html5-1.7.0/b-print-1.7.0/cr-1.5.3/date-1.0.3/fc-3.3.2/fh-3.1.8/rg-1.1.2/rr-1.2.7/sl-1.3.3/datatables.min.css"/>
    <?php  include('vendor/navbar.php') ?>
</head>
<body class="loggedin">
<div class="content">
<div class="row">
    <div class="col-12">
        <div class="table">
            <table class="table" style="width:100%" id="uyeler-table">
                <thead>
                <tr>
                    <th>Ad</th>
                    <th>Soyad</th>
                    <th>Tc</th>
                    <th>Tel</th>
                    <th>Adres</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?=$user['ad']?></td>
                        <td><?=$user['soyad']?></td>
                        <td><?=$user['tc']?></td>
                        <td><?=$user['telefon']?></td>
                        <td><?=$user['adres']?></td>
                        <td><button class="btn btn-primary member-edit-button" disabled data-toggle="modal" data-target="#memberEditModal" data="<?=$user['id']; ?>">Düzenle</button></td>
                        <td><a href="controller/member-controller/member-delete.controller.php?id=<?=$user['id']; ?>" class="btn btn-danger">Sil</a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</body>
<!-- Member edit modal -->
<div class="modal fade" id="memberEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="memberEditModalLabel"></h5>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close-modal">Close</button>
                <button type="button" class="btn btn-primary" id="edit-modal-button">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- end of member edit modal -->
<script type="text/javascript" src="libraries/jquery/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.24/af-2.3.6/b-1.7.0/b-colvis-1.7.0/b-html5-1.7.0/b-print-1.7.0/cr-1.5.3/date-1.0.3/fc-3.3.2/fh-3.1.8/rg-1.1.2/rr-1.2.7/sl-1.3.3/datatables.min.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script>

</script>
<script type="text/javascript" src="js/member-list.js"></script>
</html>
