<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong number</title>
</head>
<body>
    <form method="post">
    <input type="number" name="number">
    <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
if($_POST)
{
    $number =$_POST['number'];
    $a= $number;
    $sum= 0;
    while ($a != 0)
    {
        $rem =$a % 10;
        $sum = $sum + ($rem *$rem*$rem);
        $a = $a/10;
    }
    if($number== $sum)
    {
        echo "Yees $number an armstrong number";
    }else{
        echo "$number is not an armstrong number";
    }
}
?>