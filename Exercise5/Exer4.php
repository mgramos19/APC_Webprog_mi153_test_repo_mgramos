<?php
	include_once 'dbconfig.php';
	if(isset($_POST['submit']))
		{
			// variables for input data

			$complete_name = $_POST['complete_name'];
			$nick_name = $_POST['nick_name'];
			$email = $_POST['email'];
			$home_ad = $_POST['home_ad'];
			$gender = $_POST['gender'];
			$cell = $_POST['cell'];
			$comment = $_POST['comment'];
			// variables for input data
			
			// sql query for inserting data into database			 
			$sql_query = "INSERT INTO users(cname,nName,email,hAd,gender,cNum,message) 
			VALUES ('$complete_name','$nick_name','$email','$home_ad','$gender','$cell','$comment')";
			mysqli_query($con,$sql_query);
			// sql query for inserting data into database

		}
?>

<!DOCTYPE html>
<html>
<body>

	
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
			
			<button onclick="myFunction()">Click me</button>

<p id="place"></p>
<p>Where is your favorite place to go?</p>
           
		   <button onclick="myFood()">Click me</button>
		   
<p id="food"></p>
<p>What is your favorite food to eat and type?</p>

            <button onclick="myArtist()">Click</button>
			
<p id="artist"></p>
<p>Who is your favorite artist?</p>
       
	        <button onclick="myTime()">Click</button>
			
<p id="pasttime"></p>
<p> What do you usually do during past time?</p>

            <button onclick="myMoment()">Click</button>
			
<p id="moment"></p>
<p>What is your unforgetable moment?</p>


<script>
function myFunction() {
    document.getElementById("place").innerHTML = "I love going to the beach, or visiting museum.";
	}
	</script>
	
<script>	
function myFood() {
     document.getElementById("food").innerHTML = " Anything that is sweet, specifically Cupcake and Ice cream like cookie&cream.";
}	

</script>

<script>	
function myArtist() {
     document.getElementById("artist").innerHTML = "Out of all the artist that I love, the only girl I admire most is Emma Watson.";
}	

</script>

<script>	
function myTime() {
     document.getElementById("pasttime").innerHTML = " during my past time I watch movies/tv series online or read, sometimes bake also";
}	

</script>

<script>	
function myMoment() {
     document.getElementById("moment").innerHTML = "Back when I was in gradeschool I  joined a Singing Contest.";
}	


</script>

<?php
// define variables and set to empty values
$complete_nameErr = $nick_nameErr =$emailErr = $genderErr  = $cellErr = "";
$complete_name = $nick_name = $email = $gender = $cell = $comment = $home_ad = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["complete_name"])) {
    $complete_nameErr = "Name is required";
  } else {
    $complete_name = test_input($_POST["complete_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9a-zA-Z]+$/",$complete_name)) {
      $complete_nameErr = "Only letters and Numbers"; 
    }
  }
  if (empty($_POST["nick_name"])) {
    $nick_nameErr = "Nickname is required";
  } else {
    $nick_name = test_input($_POST["nick_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9a-zA-Z]+$/",$nick_name)) {
      $nick_nameErr = "Letters Only!"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
   if (empty($_POST["home_ad"])) {
				$home_ad = "";
			} else {
				$hAd = test_input($_POST["home_ad"]);
			}
   if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
   if (empty($_POST["cell"])) {
				$cellErr = "number is required";
			} else {
				$cell= test_input($_POST["cell"]);
				if (!filter_var($cell, FILTER_VALIDATE_INT) === FALSE) {
				$cellErr = "Numbers only"; 
				}
			}
  
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Join me! Register below.</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 Complete Name: <input type="text" name="complete_name" value="<?php echo $complete_name;?>">
  <span class="error">* <?php echo $complete_nameErr;?></span>
  <br><br>
 Nickname: <input type="text" name="nick_name" value="<?php echo $nick_name;?>">
  <span class="error">* <?php echo $nick_nameErr;?></span>
  <br><br>
 E-mail:  <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
 Home Address:  <input type="text" name="home_ad" value="<?php echo $home_ad;?>">
  <br><br>
 Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
  <span class="error">*<?php echo $genderErr;?></span>
  <br><br>
 Cell-Phone Number:  <input type="text" name="cell" value="<?php echo $cell;?>">
  <span class="error">*<?php echo $cellErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <p><span class="error">* required field.</span></p>
  
  <input type="submit" name="submit" value="Submit">  
</form>



</body>
</html>