<?php

include("../config.php");
$memberName = $_POST['memberName'];
$memberSurname = $_POST['memberSurname'];
$memberTc = $_POST['memberTc'];
$memberPhone = $_POST['memberPhone'];
$memberAddress = $_POST['memberAddress'];
$memberDoorNumber = $_POST['memberDoorNumber'];
$sql = "INSERT INTO uyeler (ad, soyad, tc, telefon, adres, kapi_no) VALUES ('$memberName','$memberSurname','$memberTc','$memberPhone','$memberAddress','$memberDoorNumber')";
if(mysqli_query($db, $sql)){
    $sorgu = $db->query("SELECT * FROM uyeler order by id desc limit 0, 1");
    $sonuc = $sorgu->fetch_assoc();
    $uye_id = $sonuc['id'];
    $birinci_odeme = "0";
    $ikinci_odeme = "0";
    $ucuncu_odeme = "0";
    $dorduncu_odeme = "0";
    $besinci_odeme = "0";
    $altinci_odeme = "0";
    $yedinci_odeme = "0";
    $sekizinci_odeme = "0";
    $eski_borc = "0";
    $odenen = "0";
    $kalan_borc = "0";
    if($uye_id<>""){
        if($db->query("INSERT INTO 2020_2021_odemeler(uye_id, birinci_odeme, ikinci_odeme, ucuncu_odeme, dorduncu_odeme, besinci_odeme, altinci_odeme, yedinci_odeme, sekizinci_odeme, eski_borc, odenen, kalan_borc) VALUES ('$uye_id','$birinci_odeme','$ikinci_odeme','$ucuncu_odeme','$dorduncu_odeme','$besinci_odeme','$altinci_odeme','$yedinci_odeme','$sekizinci_odeme','$eski_borc','$odenen','$kalan_borc')") &&
            $db->query("INSERT INTO 2020_2021_koop_odemeler(uye_id, birinci_odeme, ikinci_odeme, ucuncu_odeme, dorduncu_odeme, besinci_odeme, altinci_odeme, yedinci_odeme, sekizinci_odeme, eski_borc, odenen, kalan_borc) VALUES ('$uye_id','$birinci_odeme','$ikinci_odeme','$ucuncu_odeme','$dorduncu_odeme','$besinci_odeme','$altinci_odeme','$yedinci_odeme','$sekizinci_odeme','$eski_borc','$odenen','$kalan_borc')")
        ){
            echo json_encode(array("statusCode"=>200));
            $user = "test";
            $ip_address = $_SERVER['REMOTE_ADDR'];
            $operation = $memberName. " " . $memberSurname . " " . "isimli üye oluşturuldu";
            $db->query("INSERT INTO logs(user,operation,ip_address) VALUES ('$user','$operation','$ip_address')");
        }
        else{
            echo json_encode(array("statusCode"=>201));
        }
    }
    mysqli_close($db);
}
?>
