<?php
	include_once 'dbconfig.php';
	if(isset($_POST['submit']))
		{
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
		}
?>

<html>
	<head>
		<title>
			MY HOMEPAGE
		</title>
		<style>
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
		</style>
	</head>
	<body>
		
		INFORMATION 

			<table align ="center">

				
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
			$nameErr = $nNameErr = $emailErr = $genderErr = $cNumErr = $commentErr = "";
			$name = $nName = $email = $hAd = $gender = $cNum = $comment = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if (empty($_POST["name"])) {
				$nameErr = "NAME IS REQUIRED ";
			} else {
				$name = test_input($_POST["name"]);
				if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
				$nameErr = "ONLY LETTERS ARE ALLOWED DUDE"; 
				}
			}
		  
			if (empty($_POST["nName"])) {
				$nNameErr = "NICKNAME IS REQUIRED ";
			} else {
				$nName = test_input($_POST["nName"]);
				if (!preg_match("/^[a-zA-Z ]*$/",$nName)) {
				$nNameErr = "ONLY LETTERS ARE ALLOWED DUDE"; 
				}
			}
		  
			if (empty($_POST["email"])) {
				$emailErr = "E-MAIL IS REQUIRED MAYNE";
			} else {
				$email = test_input($_POST["email"]);
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "INVALID EMAIL FORMAT MAYNE"; 
				}
			}
		  
			if (empty($_POST["hAd"])) {
				$hAd = "";
			} else {
				$hAd = test_input($_POST["hAd"]);
			}
		  
			if (empty($_POST["gender"])) {
				$genderErr = "GENDER IS REQUIRED";
			} else {
				$gender = test_input($_POST["gender"]);
			}
		  
			if (empty($_POST["cNum"])) {
				$cNumErr = "NUMBER IS REQUIRED";
			} else {
				$cNum = test_input($_POST["cNum"]);
				if (!filter_var($cNum, FILTER_VALIDATE_INT) === FALSE) {
				$cNumErr = "NUMBERS ONLY MAYNE"; 
				}
			}
		  
			if (empty($_POST["comment"])) {
				$comment = "";
			} else {
				$comment = test_input($_POST["comment"]);
				}
			}

			function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
			}
		?>

		<h3>WANT TO SEND A MESSAGE? SCROLL DOWN</h3>

		<form method="post" >
			<div class="input">
				<div class="col1">
					NAME:
						<input type="text"  name="name" value="<?php echo $name;?>">
						<span class="error"> <?php echo $nameErr;?></span>
						<br><br>
					NICKNAME:
						<input type="text" name="nName" value="<?php echo $nName;?>">
						<span class="error"> <?php echo $nNameErr;?></span>
						<br><br>
					E-MAIL: 
						<input type="text" name="email" value="<?php echo $email;?>">
						<span class="error"> <?php echo $emailErr;?></span>
						<br><br>
					ADDRESS: 
					<textarea name="hAd" rows="3" cols="35"><?php echo $hAd;?></textarea>
				</div>
				<div class="col2">
					GENDER:
						<input type="radio" name="gender" value="FEMALE"/>FEMALE
						<input type="radio" name="gender" value="MALE"/>MALE
						<span class="error"> <?php echo $genderErr;?></span>					
						<br><br>
					CELLPHONE NUMBER:
						<input type="cNum" name="cNum" value="<?php echo $cNum;?>">
						<span class="error"> <?php echo $cNumErr;?></span>
						<br><br>
					COMMENT:
						<textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
						<br><br>
				</div>
			</div>
			
			<input type="submit" name="submit" value="SUBMIT" 
			style="background-color: white; color: red; border: white; font-family: simplifica; font-size: 35px; ">
			
		</form>
		<a href="index.php" class=button>MESSAGES ARE HERE!</a>
	</body>
</html>