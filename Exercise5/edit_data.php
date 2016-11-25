<?php
	include_once 'dbconfig.php';
	if(isset($_GET['edit_id']))
	{
		$sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
		$result_set=mysqli_query($con,$sql_query);
		$fetched_row=mysqli_fetch_array($result_set);
	}
	if(isset($_POST['btn-update']))
	{
		// variables for input data
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$city_name = $_POST['city_name'];
		// variables for input data

		// sql query for update data into database
		$sql_query = "UPDATE users SET first_name = '$first_name' , last_name = '$last_name' , user_city = '$city_name'   WHERE user_id=".$_GET['edit_id'];
		// sql query for update data into database
		 echo $sql_query;
		// sql query execution function
		if(mysqli_query($con,$sql_query))
		{
?>
			<script type="text/javascript">
				alert('SUCCESFULLY UPDATED');
				window.location.href='index.php';
			</script>
			<?php
		}
		else
		{
			?>
			<script type="text/javascript">
				alert('ERROR OCCURRED');
			</script>
			<?php
		}
		// sql query execution function
	}
		if(isset($_POST['btn-cancel']))
	{
		header("Location: index.php");
	}
?>
<!DOCTYPE html>
	<html>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title>UPDATE</title>
			<style>
				label{
					font-family: simplifica;
					font-size: 50px;
					color: red;
				}
	
				input{
					font-family: simplifica;
					font-size: 32px;
				}
				
				button{
					background-color: white;
					color: black;
					border: white;
					font-family: simplifica;
					font-size: 32px;
					text-align: center;
				}
				
				button:hover{
					background-color: white;
					color: red;
				}
	
				.lft{
					font-family: simplifica;
					font-size: 23px;
					display: inline-block;
					width: 150px;
					clear: both;
					text-align: right;
				}
				
				content.input{
					width: 100%;
					clear: both;
				}
			</style>
		</head>
			<body>
				<center>
					<label>NEED TO CHANGE SOMETHING? CHANGE IT HERE!</label>
					<br><br>
					<div id="content">
						<form method="post">
							
								<input type="text" name="first_name"  placeholder="First Name" value="<?php echo $fetched_row['first_name']; ?>"/></br></br>
	
							
								<input type="text" name="last_name" placeholder="Last Name" value="<?php echo $fetched_row['last_name']; ?>"/></br></br>
    
							
								<input type="text" name="city_name" placeholder="City place" value="<?php echo $fetched_row['user_city']; ?>" /></br></br>
	
							<table align="center">
								<td>								
								<button type="submit" name="btn-update"><strong>UPDATE</strong></button>
								<button type="submit" name="btn-cancel"><strong>CANCEL</strong></button>
								</td>
							</table>
						</form>
					</div>
				</center>
			</body>
	</html>