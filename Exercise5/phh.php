<!DOCTYPE HTML>  
<html>
<head>
<style>
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

<?php
// define variables and set to empty values
$Complete_Name = $Nick_name = $Email_Address = $Home_Address = $Cell_No = "";
$gender = $Comment =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $Complete_Name = "Name is required";
  } else {
    $Complete_Name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$Complete_Name)) {
      $Complete_Name = "Only letters and space allowed"; 
    }
  }
  
  if (empty($_POST["Nickname"])) {
    $Nick_name = "Nickname is required";
  } else {
    $Nick_name = test_input($_POST["Nickname"]);
    
    }
  }
  
  if (empty($_POST["email"])) {
    $Email_Address = "Email is required";
  } else {
    $Email_Address = test_input($_POST["email"]);
    
    if (!filter_var($Email_Address, FILTER_VALIDATE_EMAIL)) {
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
  Complete-Name: <input type="text" name="Complete Name" value="<?php echo $Complete_Name;?>">
  <span class="error">* <?php echo $Complete_Name;?></span>
  <br><br>
  
   Nickname: <input type="text" name="Nickname" value="<?php echo $Nick_name;?>">
  <span class="error">* <?php echo $Nick_name;?></span>
  <br><br>
  
  E-mail Address: <input type="text" name="E-mail Address" value="<?php echo $Email_Address;?>">
  <span class="error">* <?php echo $Email_Address;?></span>
  <br><br>
  
   Home_Address: <input type="text" name="Home_Address" value="<?php echo $Home_Address;?>">
  <span class="error">* <?php echo $Home_Address;?></span>
  <br><br>
  
  Cell No. <input type="number" name="Cell No" value="<?php echo $Cell_No;?>">
  <span class="error"><?php echo $Cell_No;?></span>
  <br><br>
  
  Comment: <textarea name="Comment" rows="5" cols="40"><?php echo $Comment;?></textarea>
  <br><br>
  
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $gender;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $Complete_Name;
echo "<br>";
echo $Nick_name;
echo "<br>";
echo $Email_Address;
echo "<br>";
echo $Home_Address;
echo "<br>";
echo $Cell_No;
echo "<br>";
echo $Comment;
echo "<br>";
echo $gender;
?>

</body>
</html>
