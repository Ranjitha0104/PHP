<?php
$msg = '';
$dis ='';
$photo ='';
if(isset($_POST['s']))
{
$y=array(); 
$t=-1;
$a=$_POST['f1'];  $b=$_POST['f2']; $c=$_POST['f3'];  $d=$_POST['t4'];  $f=$_POST['y']; 
$g=$_POST['m1']; $i1=$_POST['r1']; $j=$_POST['e1'];
$j1=$_POST['e2']; $k=$_POST['d1']; $l=$_POST['percent']; $m= $_POST['hobby'];
$filepath = "imgs/". $_FILES["file"]["name"];
$dis1 = '<tr><h2>Student Details</h2> </tr>
<tr>' .  "<img src=".$filepath." height=100 width=100 />" . '</tr>
<tr><td>First Name: </td><td>' . $a . '</td></tr>
<tr><td>Mid Name: </td><td>' . $b . '</td></tr>
<tr><td>Last Name: </td><td>' . $c . '</td></tr>
<tr><td>Address: </td><td>' . $j1 . '</td></tr>
<tr><td>Email: </td><td>' . $j . '</td></tr>
<tr><td>Contact Number: </td><td>' . $d . '</td></tr>
<tr><td>DOB: </td><td>' . $k . '</td></tr>
<tr><td>Gender: </td><td>' . $i1 . '</td></tr>
<tr><td>Percentage: </td><td>' . $l . '</td></tr>
<tr><td>Hobbies: </td><td>' . $m . '</td></tr>
<tr><td>Previous Course: </td><td>' . $g . '</td></tr>
<tr><td>Course selected: </td><td>' . $f . '</td></tr>';
if ($f == 'MTech') {
    if($l > 70)
    {
        if($f == 'MTech' && $f == 'BE')
        {
            $dis = $dis1;
        }
        else
        {
            $msg = 'Previous course must be BE';
        }
    }
    else
    {
        $msg = 'Percentage should be more than 70% for ' . $f;
    }
}
elseif ($f == 'MCA') {
    if($l > 70)
    {
        if($f == 'MCA' && ($g == 'BSC' || $g == 'BCA'))
        {
            $dis = $dis1;
        }
        else
        {
            $msg = 'Previous course must be BCA or BSC ';
        }
    }	
    else
    {
        $msg = 'Percentage should be more than 70% for ' . $f;
    }
}
elseif($f == 'MBA')
{
    if($l > 60)
    {
        $dis = $dis1;

    }
    else
    {
        $msg = 'Percentage should be more than 60% for MBA';
    }
}
elseif($f == 'MSC')
{
    if($l > 40)
    {
        if($f == 'MSC' && ($g == 'BSC' || $g == 'BCA' ))
        {
            $dis = $dis1;
        }
        else
        {
            $msg = 'Previous course must be BSC or BCA ';
        }
    }
    else
    {
        $msg = 'Percentage should be more than 40% for MSC';
    }
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Application</title>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
        <h1>
        <center>Student Application Form</h1>
        </center><br>
        <center>
        <table border=0>
        <tr><td>
        Select img:
        </td>
        <td>
        <input type=file name="file" value="" required>
        </td></tr>
        <tr><td>
        First name:
        </td>
        <td>
        <input type=text name="f1" value="" required>
        </td></tr>
        <td>
        Middle name:
        </td>
        <td>
        <input type=text name="f2" value="" required>
        </td></tr>
        <tr><td>
        Last name:
        </td><td>
        <input type=text name="f3" value="" required>
        </td></tr>
        <tr><td>
        Date of Birth:
        </td>
        <td>
        <input type=date name="d1" value="" required>
        </td></tr>
        <tr><td>
        Gender:
        </td>
        <td>
        <input type=radio name="r1" value="Male" required>
        Male
        </td><td>
        <input type=radio name="r1" value="Female" required>
        Female
        </td></tr>
        <tr><td>
        Email:
        </td><td>
        <input type=email name="e1" value="" required>
        </td></tr>
        <tr><td>
        Address:
        </td>
        <td>
        <input type=text name="e2" value="" required>
        </td></tr>
        <tr><td>
        Phone number:
        </td>
        <td>
        <input type=number name="t4" value="" required>
        </td></tr>
        <tr><td>
        Degree marks(%):
        </td>
        <td>
        <input type=number name="percent" value="" required>
        </td></tr>
        <tr><td>
        Course studied:
        </td>
        <td>
        <input type=radio name="m1" value="BCA" required>
        BCA
        </td>
        <td>
        <input type=radio name="m1" value="BSc" required>
        BSC
        </td>
        <td>
        <input type=radio name="m1" value="BE" required>
        B.E
        </td>
        <td>
        <input type=radio name="m1" value="BCom" required>
        B.Com
        </td></tr>
        <tr><td>
        Hobbies:
        </td>
        <td>
        <input type=checkbox name="hobby" value="Code" >
        Code
        </td>
        <td>
        <input type=checkbox name="hobby" value="Art" >
        Art
        </td>
        <td>
        <input type=checkbox name="hobby" value="Website" >
        Website
        </td></tr>
        <tr><td>
        Course Offered:
        </td>
        <td>
        <select name="y" required>
        <option value="MCA" name="co1">MCA</option>
        <option value="MBA" name="co1">MBA</option>
        <option value="MTech" name="co1">MTech</option>
        <option value="MSc" name="co1">MSc</option>
        </select>
        </td></tr>
        </table>
        </center>
        <br>
        <br>
        <center>
        <input type=submit value="submit" name="s">
        <input type=submit value="reset" name="s1">
        </center>
        </form> 
        <center><br><br>
        <table >
			<tr>
				<th></th>
				<th></th>
			</tr>
				<?php echo $dis; ?>
		</table>
		<h4><?php echo $msg; ?></h4>
        </center> 
        </body>
</html>
