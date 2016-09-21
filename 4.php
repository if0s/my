<?php
header('Access-Control-Allow-Origin: *');
$drivecode = $_GET['drivecode'];
$homepage = file_get_contents('https://drive.google.com/uc?export=download&id=' . $drivecode);
echo $homepage;
?>