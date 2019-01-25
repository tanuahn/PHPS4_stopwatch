<?php
include 'StopWatch.php';

$arr = [];
for ($i = 0; $i < 10000; $i++){
    $arr[$i] = $i * rand(1, 100);
}

function sapXep($arr){
    // Lap de sap xep
    for ($i = 0; $i < count($arr) - 1; $i ++){
        // Tim vi tri min
        $min = $i;
        for ($j = $i +1; $j < count($arr); $j ++){
            if ($arr[$j] < $arr[$min]){
                $min = $j;
            }
        }
        //sau khi co vi tri nho nhat thi doi vi tri voi $i
        $temp = $arr[$i];
        $arr[$i] = $arr[$min];
        $arr[$min] = $temp;

    }
    return $arr;
}

$watch = new StopWatch();
echo 'Thoi gian bat dau: ' . $watch->getStartTime() . '<br/>';
sapXep($arr);
$watch->stop();
echo 'Thoi gian ket thuc: ' . $watch->getEndTime() . '<br/>';
echo 'Thoi gian thuc thi chuong trinh: ' . $watch->getElapsedTime() . '.';
?>






