<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Application</title>
</head>
<style>
    img {
        width : 80px;
        height : 100px;
        position: relative;
    }
    </style>
<body>
<form action="" enctype="multipart/form-data" method="POST">
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
        <input type=number name="d2" value="" required>
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
        <input type=radio name="m1" value="B.E" required>
        B.E
        </td>
        <td>
        <input type=radio name="m1" value="B.Com" required>
        B.Com
        </td></tr>
        <tr><td>
        Hobbies:
        </td>
        <td>
        <input type=checkbox name="c1[]" value="Code" >
        Code
        </td>
        <td>
        <input type=checkbox name="c1[]" value="Art" >
        Art
        </td>
        <td>
        <input type=checkbox name="c1[]" value="Website" >
        Website
        </td></tr>
        <tr><td>
        Course Offered:
        </td>
        <td>
        <select name="y" required>
        <option value="mca">MCA</option>
        <option value="mba">MBA</option>
        <option value="mtech">M.Tech</option>
        <option value="msc">M.Sc</option>
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

<?php
if(isset($_POST['s']))
{
$y=array(); 
$t=-1;
$a=$_POST['f1'];  $b=$_POST['f2']; $c=$_POST['f3'];  $d=$_POST['t4'];  $f=$_POST['y']; 
$g=$_POST['m1']; $i1=$_POST['r1']; $j=$_POST['e1'];
$j1=$_POST['e2']; $k=$_POST['d1']; $l=$_POST['d2']; 
$filepath= "imgs/".$_FILES["file"]["name"];
echo "<center><h1>Student Details</h1></center>";
if(move_uploaded_file($_FILES["file"]["tmp_name"],$filepath))
{
    echo "<center><img src=".$filepath."height=100 width=100 /></center>";
}
echo "<center><b>First name:-</b></font>".$a."</center>";
echo "<center><b>Middle name:-</b></font>".$b."</center>";
echo "<center><b>Last name:-</b></font>".$c."</center>";
echo "<center><b>DOB:-</b></font>".$k."</center>";
echo "<center><b>Gender:-</b></font>".$i1."</center>";
echo "<center><b>Email:-</b></font>".$j."</center>";
echo "<center><b>Address:-</b></font>".$j1."</center>";
echo "<center><b>Phone number:-</b></font>".$d."</center>";
echo "<center><b>Degree (%):-</b></font>".$l."</center>";
echo "<center><b>Course studied:-</b></font>".$g."</center>";
if (!empty($_POST['c1'])){
    foreach($_POST['c1'] as $value)
    {
        echo "<center><b>Hobbies:-</b></font>".$value."</center>";
    }
}
echo "<center><b>Course offered:-</b></font>".$f."</center>";
}
?>
</body>
</html>