<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill</title>
</head>
<body> 
<form method="post">
<input type="text" name="prev" placeholder="Enter Previous reading(unit)" value="" /><br><br>
<input type="text" name="curr" placeholder="Enter Current reading(unit)" value="" /><br><br>
<input type="submit" name="submit" value="submit" /> <br/> <br/>
</form>
</body>
<?php
if (isset($_POST['submit'])){
  $pre = $_POST['prev'];
  $cur = $_POST['curr'];
  $total = $pre + $cur;
  if($total < 100)
  {
      $amount = $total * 3;
  }
  elseif($total > 100 && $total < 200 )
  {
     $amount = $total * 4;
  }
  elseif($total > 200 && $total < 300 )
  {
     $amount = $total * 5;
  }
  else
  {
    $amount = $total * 6;
  }
  echo 'Electricity amount is '.$amount;
}  
?>
</html>