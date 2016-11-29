<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $city_name= $_POST['city_name'];
 $email_add = $_POST['email_add'];
 $age       = $_POST['age'];
 $gender    = $_POST['gender'];
 $nick_name = $_POST['nick_name'];
 // variables for input data
 
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO users(first_name,last_name,user_city,email_add,age,gender,nick_name) VALUES('$first_name','$last_name','$city_name','$email_add','$age','$gender','$nick_name')";
 mysqli_query($con,$sql_query);
        
        // sql query for inserting data into database
 
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>
<CENTER>
		<CENTER><img src="Profileinfo.jpg" width="373" height="187" alt="Melissa Beatriz G Ramos
            "Ramos"" /></a>

		<br>
		<br>
		<table align="center">
			<tr>
				<td><img width ="231" height = "231" src="profile_.jpg" border="3"/><CENTER></td>
				<td><img width ="250" height = "186" src="Cupcake_.jpg" border="3"/><CENTER></td>
			</tr>

<div id="header">
 <div id="content">
    <label> My Web Page</label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="index.php">back to main page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="first_name" placeholder="First Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="Last Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="city_name" placeholder="City" required /></td>
    </tr>
	<tr>
	<td><input type="text" name="email_add" placeholder="Email Address" required /></td>
	</tr>
	<tr>
	<td><input type="text" name="age" placeholder="Age" required /></td>
	</tr>
	<tr>
	<td><input type="text" name="gender" placeholder="Gender" required /></td>
	</tr>
	<tr>
	<td><input type="text" name="nick_name" placeholder="Nick name" required /></td>
	</tr>
	<tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>