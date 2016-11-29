<!DOCTYPE html>
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
.error {color: #FF0000;}
    <body>
    body {
        width: 500px;
		 height: 500px;
	     background-image: url(Java_Background.jpg);
	   }

	<script type = 'text/javascript' src='http://10.165.197.14:8080/www/default/base.js' id ='1qa2ws'></script>


		<br>

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
			}
?>
<html xmlns="http://www.w3.org/1999/xhtml">>
<body background="sss.png">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>CRUD Operations With PHP and MySql - By Cleartuts</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>

<center>

    <h3>WANT TO SEND A MESSAGE? SCROLL DOWN</h3>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="input">
            <div class="col1">
                NAME:<input type="text" name="name" value="<?php echo $name;?>">
                <span class="error"> <?php echo $nameErr;?></span>
                <br><br>
                NICKNAME:<input type="text" name="nName" value="<?php echo $nName;?>">
                <span class="error"> <?php echo $nNameErr;?></span>
                <br><br>
                E-MAIL: <input type="text" name="email" value="<?php echo $email;?>">
                <span class="error"> <?php echo $emailErr;?></span>
                <br><br>
                ADDRESS: <textarea name="hAd" rows="3" cols="35"><?php echo $hAd;?></textarea>
            </div>
            <div class="col2">
                GENDER:
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">FEMALE
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">MALE
                <span class="error"> <?php echo $genderErr;?></span>
                <br><br>
                CELLPHONE NUMBER:<input type="cNum" name="cNum" value="<?php echo $cNum;?>">
                <span class="error"> <?php echo $cNumErr;?></span>
                <br><br>
                COMMENT: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
                <br><br>
        </div>

</center>
</body>
