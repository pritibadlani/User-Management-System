<?php 
	include('functions.php');

	

?>
<!DOCTYPE html>
<html>
<head>
	<title>Manager</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<div class="header">
		<h2>Manager - Home Page</h2>
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
			<img src="images/admin_profile.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>

						
						

					</small>
					<br> <br>
					<h2  style="text-align: center;  color: #5F9EA0;  font-size: xx-large;   font-family: 'Gill Sans', 'Gill Sans MT', ' Calibri', 'Trebuchet MS', 'sans-serif'; " 
					>MANAGER PRIVELEGES</h2>
					
					<br>
					<center><button class="btn " style=" display: flex; justify-content: center;" onClick="myFunction1()">View/Edit Users</button></center>
					<br>
					<script>

					
					function myFunction1() {
					  location.replace("viewformanager.php");
					}
					
			
					</script>
					<center><a href="manager.php?logout='1'" style="color: red;">logout</a></center>

				<?php endif ?>
			</div>
		</div>



	</div>
		
</body>
</html>