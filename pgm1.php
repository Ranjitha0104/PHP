<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Square root</title>
</head>
<body>
    <p>Number generated is: <?php
    $choice= rand(1, 100);
    echo $choice;
    ?><br/> And its sqr root is <?php
    echo sqrt($choice);
    ?></p>
</body>
</html>