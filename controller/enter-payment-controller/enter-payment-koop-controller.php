<?php
include("../config.php");
$result_array = array();
$sql = "SELECT * from 2020_2021_koop_odemeler left join uyeler on uyeler.id = 2020_2021_koop_odemeler. uye_id";
$result = $db->query($sql);
if($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        array_push($result_array, $row);
    }
}
header('Content-type: application/json');
echo json_encode($result_array);
$db->close();
?>
