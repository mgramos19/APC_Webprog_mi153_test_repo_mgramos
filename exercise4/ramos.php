<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$Complete_Name = $Nickname = $EmailAddress = $HomeAddress = $CellNo = "";
$gender = $Comment =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $Complete_Name = "Name is required";
  } else {
    $Complete_Name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$Complete_Name)) {
      $Complete_Name = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["Nickname"])) {
    $Nickname = "Nickname is required";
  } else {
    $Nickname = test_input($_POST["Nickname"]);
    
    }
  }
  
  if (empty($_POST["email"])) {
    $Email_Address = "Email is required";
  } else {
    $Email_Address = test_input($_POST["email"]);
    
    if (!filter_var(E-mail_Address, FILTER_VALIDATE_EMAIL)) {
      $Email_Address = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["Cell_No"])) {
    $Cell_No = "";
  } else {
    $Cell_No = test_input($_POST["Cell_No"]);
  }

  if (empty($_POST["Comment"])) {
    $Comment = "";
  } else {
    $Comment = test_input($_POST["Comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
    }


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Information Fill-Up</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Complete_Name: <input type="text" name="Complete_Name" value="<?php echo $Complete_Name;?>">
  <span class="error">* <?php echo $Complete_Name;?></span>
  <br><br>
  
   Nickname: <input type="text" name="Nickname" value="<?php echo $Nickname;?>">
  <span class="error">* <?php echo $Nickname;?></span>
  <br><br>
  
  E-mail_Address: <input type="text" name="E-mail_Address" value="<?php echo $E-mail_Address;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  
   Home_Address: <input type="text" name="Home_Address" value="<?php echo $Home_Address;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  
  Cell_No. <input type="number" name="Cell_No" value="<?php echo $Cell_No;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  
  Comment: <textarea name="Comment" rows="5" cols="40"><?php echo $Comment;?></textarea>
  <br><br>
  
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $CompleteName;
echo "<br>";
echo $Nickname;
echo "<br>";
echo $EmailAddress;
echo "<br>";
echo $HomeAddress;
echo "<br>";
echo $CellNo;
echo "<br>";
echo $Comment;
echo "<br>";
echo $gender;
?>

</body>
</html>
