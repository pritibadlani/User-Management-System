<?php 
	include('functions.php');

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "PLEASE LOG IN";
		header('location: login.php');
	}
	$sql = "SELECT * FROM users where user_type='user' "; 
	$result = $db->query($sql); 
	$rows=$result->fetch_assoc();
	

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<div class="profile_info">
			<img src="images/user_profile.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						
					</small>
					
					<br><center><h2  style="text-align: center;  color: #5F9EA0; padding-left: 100px; font-size: xx-large;   font-family: 'Gill Sans', 'Gill Sans MT', ' Calibri', 'Trebuchet MS', 'sans-serif'; " 
					>USER PRIVELEGES</h2>
					<br> 
					

					<form method="post">
					<center><button class="btn" style=" display: flex; justify-content: center; "   name="viewus">View users</button></center>
					<br>
					
					<center><button class="btn" style=" display: flex; justify-content: center; "><a href="editforusers.php?id=<?php echo $rows['id']; ?>" >Edit user details</a><button</center>
						
					
					<center><button class="btn" style=" margin-top: 20px;display: flex; justify-content: center; " name="wrtmsg"> Post message</button></center>
				    </center>
					<br>
					
					<center></center><a href="index.php?logout='1'" style=" padding-left:170px; color: red;">logout</a></center>
				
				<?php endif ?>
				</form>
				</div>
					
			</div>
		</div>
	</div>
</body>
</html>