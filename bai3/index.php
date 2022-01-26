<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $chuoi = $_REQUEST['chuoi'];
    $chuoi1=$_REQUEST['chuoi1'];
    $ors = [];
    $a=[];
if (empty($chuoi)){
    $ors['chuoi']="Vui lòng nhập chuỗi vào đây";
}
else{
    $a['chuoi']="Chuỗi vừa nhâp là ".$chuoi;
}

if (empty(checkNumber($chuoi))){

    $ors['check-number']="không có lý tự số";
}
else{
    $a['check-number']="có ký tự số  ".checkNumber($chuoi);
}

    if (empty(checkUpperCase($chuoi))){

        $ors['check-uppercase']="không có ký tự viết hoa";
    }
    else{
        $a['check-uppercase']="có ký tự viết hoa  ".checkUpperCase($chuoi);
    }
    if (empty(checkTrungNhau($chuoi,$chuoi1))){

        $ors['chuoi1']="không có ký tự trùng nhau";
    }
    else{
        $a['chuoi1']="có lý tự trùng nhau  ".checkTrungNhau($chuoi,$chuoi1);
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="chuoi" placeholder="nhâp mội chuỗi bất kì" value="<?php echo $chuoi ?>">
    <input type="text" name="chuoi1" placeholder="nhâp mội ký tư bất kì" value="<?php  echo $chuoi1 ?>">
    <p style="color: red"> <?php echo  $ors['chuoi'] ?? " "?></p>
    <p style="color: blue"> <?php echo  $a['chuoi'] ?? " "?></p>
    <p style="color: red"> <?php echo  $ors['check-number'] ?? " "?></p>
    <p style="color: blue"> <?php echo  $a['check-number'] ?? " "?></p>
    <p style="color: red"> <?php echo  $ors['check-uppercase'] ?? " "?></p>
    <p style="color: blue"> <?php echo  $a['check-uppercase'] ?? " "?></p>
    <p style="color: red"> <?php echo  $ors['chuoi1'] ?? " "?></p>
    <p style="color: blue"> <?php echo  $a['chuoi1'] ?? " "?></p>
    <button>Check</button>
</form>
</body>
</html>
<?php
function checkNumber($str)
{
    $chuoi = "";
    $pattern = "/^[0-9]$/";
    for ($i = 0; $i < strlen($str); $i++) {
        if (preg_match($pattern, $str[$i])) {
            $chuoi .= $str[$i];
        }
    }
    return $chuoi;
}

function checkUpperCase($str)
{
    $chuoi = "";
    $pattern = "/^[A-Z]$/";
    for ($i = 0; $i < strlen($str); $i++) {
        if (preg_match($pattern, $str[$i])) {
            $chuoi .= $str[$i];
        }
    }
    return $chuoi;
}


function checkTrungNhau($str,$chuoi1){
    for ($i=0;$i<strlen($str);$i++){
       if ($str == $chuoi1){
           echo"có";
       }
    }
    return "ko";

}
?>