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
<?php
$array=[
    [1,2,3,4],
    [5,6,7,8],
    [9,10,11,12],
    [13,14,15,17]
];
function calculatorSum($arr){
    $sum=0;
    foreach ($arr as $row=>$item){
        foreach ($item as $col=>$value){
            if($row==$col){
                $sum=$sum+$value;
            }
        }
    }
    return $sum;
}
echo calculatorSum($array);
?>
</body>
</html>