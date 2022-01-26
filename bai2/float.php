<?php
function createArr($number)
{
    $arr = [];
    for ($i = 0; $i < $number; $i++) {
        $arr[] = rand(-100, 100) / 10;
    }
    return $arr;
}

$arr1 = createArr(10);
echo "<pre>";
echo "Mảng ngẫu nhiên số thực" . "<br>";
print_r($arr1);
echo "<br>";

function maxArr($arr)
{
    $max = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {

        if ($arr[$i] > $max) {
            $max = $arr[$i];

        }

    }
    return $max;

}

echo "Số lớn nhất trong mảng = ";
print_r(maxArr($arr1));
echo "<br>";

function minArr($arr)
{
    $min = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {

        if ($arr[$i] < $min) {
            $min = $arr[$i];

        }

    }
    return $min;
}

echo "Số nhỏ nhất trong mảng = ";
print_r(minArr($arr1));
echo "<br>";


function maxDuongChan($arr)
{
    $max = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] % 2 == 0) {
            if ($arr[$i] > $max) {
                $max = $arr[$i];
            }
        }

    }
    return $max;

}

echo "Số lớn nhất dương chẵn trong mảng = ";
print_r(maxDuongChan($arr1));
echo "<br>";

function minAmLe($arr)
{
    $min = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i]%2 != 0) {
            if ($arr[$i] < $min) {
                $min = $arr[$i];
            }
        }
    }
    return $min;
}

echo "Số âm nhỏ nhất trong mảng = ";
print_r(minAmLe($arr1));
echo "<br>";

function sumArr($arr){
    $sum=0;
     for($i=0;$i<count($arr);$i++){
             $sum +=$arr[$i];
         }

     return $sum;
}
echo "Tổng các phần tử trong mảng = ";
print_r(sumArr($arr1));
echo "<br>";



function sumTBCArr($arr){
    $sumTBC=0;
    for($i=0;$i<count($arr);$i++){
        $sumTBC=sumArr($arr)/count($arr);
    }

    return $sumTBC;
}
echo "Tính tổng TBC các phần tử trong mảng = ";
print_r(sumTBCArr($arr1));
echo "<br>";


function  greaterAvgArray($arr){
    $array= [];
         for($i=0;$i<count($arr);$i++){
                 if ($arr[$i]> sumTBCArr($arr)){
                     $array[]=$arr[$i];
                 }
             }
         return $array;
}
echo "<pre>";
echo "Các phần tử trong mảng lớn hơn tổng TBC"."<br>";
print_r(greaterAvgArray($arr1));
echo "<br>";


function sortArr($arr){

        sort($arr);
        return $arr;

}
echo "<pre>";
echo "Sắp xếp mảng theo hướng tăng dần"."<br>";
print_r(sortArr($arr1));
echo "<br>";



function rsortArr($arr){

    rsort($arr);
    return $arr;

}
echo "<pre>";
echo "Sắp xếp mảng theo hướng giảm dần"."<br>";
print_r(rsortArr($arr1));
echo "<br>";