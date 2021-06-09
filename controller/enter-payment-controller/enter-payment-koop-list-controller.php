<?php
include("../config.php");
$birinciOdeme = $_POST['birinciOdeme'];
$ikinciOdeme = $_POST['ikinciOdeme'];
$ucuncuOdeme = $_POST['ucuncuOdeme'];
$dorduncuOdeme = $_POST['dorduncuOdeme'];
$besinciOdeme = $_POST['besinciOdeme'];
$altinciOdeme = $_POST['altinciOdeme'];
$yedinciOdeme = $_POST['yedinciOdeme'];
$sekizinciOdeme = $_POST['sekizinciOdeme'];
$eskiBorc = $_POST['eski_borc'];
$odenen = $birinciOdeme + $ikinciOdeme + $ucuncuOdeme + $dorduncuOdeme + $besinciOdeme + $altinciOdeme + $yedinciOdeme + $sekizinciOdeme;
$kalanBorc = (3000 + $eskiBorc) - $odenen;
$id = $_POST['id'];
$sql = "UPDATE 2020_2021_koop_odemeler SET birinci_odeme = '$birinciOdeme', ikinci_odeme = '$ikinciOdeme', ucuncu_odeme = '$ucuncuOdeme', dorduncu_odeme = '$dorduncuOdeme', besinci_odeme = '$besinciOdeme', altinci_odeme = '$altinciOdeme', yedinci_odeme = '$yedinciOdeme', sekizinci_odeme = '$sekizinciOdeme', eski_borc = '$eskiBorc', kalan_borc = '$kalanBorc', odenen = '$odenen' WHERE uye_id=".$id;
if(mysqli_query($db, $sql)){
    echo json_encode(array("statusCode"=>200));
}else{
    echo json_encode(array("statusCode"=>201));
}
mysqli_close($db);
?>
