<?php
require('controller/session.php');
$sorgu = $db->query("SELECT * FROM uyeler WHERE id=".(int)$_GET['id']);
$sonuc = $sorgu->fetch_assoc();
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
<div class="content" style="text-align: center">
    <form action="" method="post">
        <div class="col-12">
            <div class="col-3">
                <div class="form-group">
                    <label for="ad">Ad</label>
                    <input class="form-control" id="ad" name="ad" value="<?php echo $sonuc['ad'];?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="soyad">Soyad</label>
                    <input class="form-control" id="soyad" name="soyad" value="<?php echo $sonuc['soyad'];?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="tc">TC</label>
                    <input class="form-control" id="tc" name="tc" value="<?php echo $sonuc['tc'];?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="tel">Telefon</label>
                    <input class="form-control" id="tel" name="tel" value="<?php echo $sonuc['telefon'];?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="kapi-no">Kapı No</label>
                    <input class="form-control" id="kapi-no" name="kapi-no" value="<?php echo $sonuc['kapi_no'];?>">
                </div>
            </div>
            <div class="col-auto">
                <input class="btn btn-primary" type="submit" value="Düzenle">
            </div>
        </div>
    </form>
    <?php
    if ($_POST){
        $ad = $_POST['ad'];
        $soyad = $_POST['soyad'];
        $tc = $_POST['tc'];
        $tel = $_POST['tel'];
        $kapi_no = $_POST['kapi-no'];
        if($ad<>"" || $soyad <>"" || $tc<>"" || $tel<>"" || $kapi_no<>""){
            if ($db->query("UPDATE uyeler SET ad = '$ad', soyad = '$soyad', tc = '$tc', telefon = '$tel', kapi_no = '$kapi_no' WHERE id=".$_GET['id'])){
                echo "başarılı";
                header("location:member-list.php");
            }else{
                echo "HATA";
            }
        }
    }
    ?>
</div>
</body>
</html>
