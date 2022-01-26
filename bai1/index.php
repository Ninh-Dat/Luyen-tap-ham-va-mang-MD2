<?php
function createArr($number)
{
    $arr = [];
    for ($i = 0; $i < $number; $i++) {
        $arr[] = rand(1, 100);
    }
    return $arr;
}

$arr = createArr(10);
echo "<pre>";
echo "Mảng ngẫu nhiên"."<br>";
print_r($arr);

function sortArr($arr)// sắp xếp mảng theo hướng tăng dần
{
    sort($arr);
    return $arr;
}
echo "<pre>";
echo "Sắp xếp mảng theo hướng tăng dần"."<br>";
print_r(sortArr($arr));
echo "<br>";




function loaiBoPhanTuGiongNhau($arr){
    $arr1 = [];
    for ($i=0;$i<count($arr);$i++){
        if(!in_array($arr[$i],$arr1)){
            $arr1[] = $arr[$i];
        }
    }
    return $arr1;
}
echo "<pre>";
echo "Loại bỏ các phần tử trùng nhau trong mảng"."<br>";
$arr = [1,2,3,1,1,2,4,5,5,6,7];
print_r(loaiBoPhanTuGiongNhau($arr));