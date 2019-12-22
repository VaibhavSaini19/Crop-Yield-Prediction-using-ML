<?php

$district = strtoupper($_GET['district']);
$crop = ucfirst($_GET['crop']);
$area = $_GET['area'];
$soil = $_GET['soil'];

// $res = exec("python Crop-yield-prediction.py '$district' '$crop' '$area' '$soil'");
// $res = exec("python RF_predict.py $district $crop $area $soil 2>&1", $output, $error);
$res = shell_exec("python3 RF_predict.py $district $crop $area $soil 2>&1");

echo $res;
// var_dump($output);
// var_dump($error);
// var_dump($res);


?>