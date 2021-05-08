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
<form method="post">
    <input type="text" name="numberX"/>
    <input type="text" name="numberY"/>
    <input type="submit" name="submit"/>
</form>
<?php
function calculate($numberX,$numberY)
{
    $sum = $numberX + $numberY;
    $nal = $numberX - $numberY;
    echo "Tong : " . $sum . '<br>'
        . "Hieu : " . $nal . '<br>'
        . "Tich : " . $numberX * $numberY . '<br>'
        . "Thuong : " . $numberX / $numberY;
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $numberX = $_POST["numberX"];
    $numberY = $_POST["numberY"];
}
try {
    if ($numberY == 0 || $numberX == 0 && $numberY == 0) {
        throw new Exception("by zero");
    } else {

        calculate($numberX, $numberY);

    }
} catch (Exception $etc) {
    echo $etc->getMessage();
}
    ?>

</body>
</html>