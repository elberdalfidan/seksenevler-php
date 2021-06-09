<?php
$result_array = array();

$sql = "SELECT * FROM uyeler WHERE id=".(int)$_GET['id'];
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
