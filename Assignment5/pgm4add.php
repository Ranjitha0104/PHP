<?php 
    include 'con_db.php';
?>
<html>
<head>
    <title>Random</title>
</head>
<body>
    <center>
        <form method="post" enctype="multipart/form-data">
    <table border="1" style="text-align:left;">
        <tr>
            <th colspan="2" style="text-align:center;"> Passport Form</th>
        </tr>
        <tr>
            <th>Enter Passport Number</th><th><input type="text" name="passno"></th>
        </tr>
        <tr>
            <th>Enter First Name</th><th><input type="text" name="fname"></th>
        </tr>
        <tr>
            <th>Enter Middle Name</th><th><input type="text" name="mname"></th>
        </tr>
        <tr>
            <th>Enter Last Number</th><th><input type="text" name="lname"></th>
        </tr>
        <tr>
            <th>Enter DOB</th><th><input type="date" name="dob"></th>
        </tr>
        <tr>
            <th>Enter Nationality</th><th><input type="text" name="nation"></th>
        </tr>
        <tr>
            <th>Address</th><th><textarea name="address"></textarea></th>
        </tr>
        <tr>
            <th>Select Gender</th><th><input type="radio" name="gender" value="male">Male<input type="radio" name="gender" value="female">Female<input type="radio" name="gender" value="other">Other</th>
        </tr>      
        <tr>
            <th>Upload Picture</th><th><input type="file" name="file"></th>
        </tr>  
        <tr>
            <th colspan="3" style="text-align:center"><input type="submit" name="submit" value="Submit"></th>
        </tr> 
    </table>
</form>
    </center>
<?php
if(isset ($_POST["submit"]))
{
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$passno = $_POST['passno'];
$nation = $_POST['nation'];
$addr = $_POST['address'];
$gender = $_POST['gender'];

$pname=$_FILES['file']['name'];
        $ftype=$_FILES['file']['type'];
        $fsize=$_FILES['file']['size'];
        $floc=$_FILES['file']['tmp_name'];
        $fstore="upload/".$pname;
        move_uploaded_file($floc,$fstore);

$q =mysqli_query($con, "select * from passport WHERE passno = $passno ");
        $row=mysqli_fetch_array($q);
    
if($row==0){
$sql = mysqli_query($con,"INSERT INTO passport VALUES('$passno','$fname','$mname','$lname','$dob','$nation','$addr','$gender')");
if($sql)
                    {
                        echo '<script>alert("Data Added Successfully");window.location="pgm4view.php"</script>';
                    }
                    else
                    {
                       echo '<script>alert("Failed");</script>'; 
                    }
}
else{
    echo '<script>alert("Passport Number Already Present");window.location="pgm4add.php"</script>';
}
}
?>
</body>
</html>