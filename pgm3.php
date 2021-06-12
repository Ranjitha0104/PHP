<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome</title>
</head>
<body>
    <?php
    $input = 1234321;
    $in=$input;
    echo '</br>'.'Input number:'.$input;
    $sum= 0; $rem= 0;
    for($i =0; $i<=strlen($input); $i++)
    {
        $rem=$input%10;
        $sum=$sum+ $rem;
        $input=$input/10;
    }
    echo '<br/>'.'Sum is:'.$sum;
    $rev =strrev($in);
    echo '</br>'.'Reverse is:'.$rev;
    if($in== $rev){
        echo '</br>'.$in.'    Is a palindrome' ;
    }else{
        echo '</br>'.$in.'    Is not a palindrome';
    }
    ?>
</body>
</html>