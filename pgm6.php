<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci series</title>
</head>
<body>
<form method="post">
<input type="number" name="number" placeholder="Enter the number">
<input type="submit" value="submit">
</form>
<?php    
$num = $_POST['number'];
$s; 
$arr=array(); 
echo "Fibonacci series:";  
echo "\n";  

function fib($num){  
    if($num == 0){  
    return 0;  
    }else if( $num == 1){  
return 1;  
}  else {  
return (fib($num-1) + fib($num-2));  
}   
}  
for ($i = 0; $i < $num; $i++){  
$s=fib($i);
echo $s." ";
$arr[$i]=$s;  
}  
echo "<br>Prime numbers are: ";
for($i=3;$i<count($arr);$i++)
{
	$c=$arr[$i];
	$b=prime($c);
	if($b==1)
	echo $c." ";
}
function prime($x){
for($n=2;$n<$x;$n++)
{	
	if($x%$n==0)
	{
		return 0;
	}
}
return 1;
}
?>
</body>
</html>