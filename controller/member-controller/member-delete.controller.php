<?php
if ($_GET)
{
    include("../config.php");
    if ($db->query("DELETE FROM uyeler WHERE id =".(int)$_GET['id']) && $db->query("DELETE FROM 2020_2021_odemeler WHERE uye_id =".(int)$_GET['id']) && $db->query("DELETE FROM 2020_2021_koop_odemeler WHERE id =".(int)$_GET['id']))
    {
        header("location:../../../member-list.php");
    }
}
?>
