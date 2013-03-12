<?php
// Code Shobhit Garg-
$getStr = $_POST['jsonData'];
//$decodeStr = var_dump(json_decode($getStr,true));
$decodeStr = json_decode($getStr,true);

    $level1A = $decodeStr['surname'];
    $level1B1 = $decodeStr['phone']['0'];
    $level1B2 = $decodeStr['phone']['1'];

    $level1A = $level1A.' '.'Change';
    $level1B1 = "0833610040";
    $level1B2 = $level1B2;

    $arr= Array('surname'=>$level1A,'phone'=>Array($level1B1,$level1B2));

  echo $encodeStr = json_encode($arr);



?>
