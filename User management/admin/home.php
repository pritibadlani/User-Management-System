<?php 
	include('../functions.php');

	if (!isAdmin()) {
		$_SESSION['msg'] = "Please log-in first";
		header('location: ../login.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
	.header {
		background: #003366;
	}
	button[name=register_btn] {
		background: #003366;
	}
	</style>
</head>
<body>
	<div class="header">
		<h2>Admin - Home Page</h2>
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
			<img src="../images/admin_profile.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>

						
						

					</small>
					<br> <br>
					<h2  style="text-align: center;  color: #5F9EA0;  font-size: xx-large;   font-family: 'Gill Sans', 'Gill Sans MT', ' Calibri', 'Trebuchet MS', 'sans-serif'; " 
					>ADMIN PRIVELEGES</h2>
					<br> 
					<center><button class="btn" style=" display: flex; justify-content: center;"   onClick="myFunction()">To create a user</button>
					<br>
					<button class="btn " style=" display: flex; justify-content: center;" onClick="myFunction1()">View/Edit/Block Users</button>
					<br>
				
					<button class="btn " style=" display: flex; justify-content: center;" onClick="writemsg()">Post message</button>
					<br>
					<button class="btn " style=" display: flex; justify-content: center;" onClick="delfunc()">Delete message</button>
					<br>
					<script>

					function myFunction() {
					  location.replace("create_user.php");
					}
					function myFunction1() {
					  location.replace("viewusers.php");
					}
					function delfunc() {
					  location.replace("../viewmsg.php");
					}
					function writemsg() {
					  location.replace("../postmsg1.php");
					}
			
					</script>
					<a href="home.php?logout='1'" style="color: red;">logout</a>

				<?php endif ?>
			</div>
		</div>



	</div>
		
</body>
</html>