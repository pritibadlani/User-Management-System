<?php 

include "functions.php"; // Using database connection file here

$id = isset($_GET['id']) ? $_GET['id'] : ''; // get id through query string

$qry = mysqli_query($db,"select * from users where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['save_btn'])) // when click on save button
{
    $username = $_POST['username'];
    $email = $_POST['email'];
	
    $edit = mysqli_query($db,"update users set username='$username', email='$email' where id='$id'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:viewformanager.php"); // redirects to view  page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>
	
<!DOCTYPE html>
<head>
	<title>EDIT form</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
	<h2>Edit</h2>
</div>
<form method="post" >
	
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="save_btn" value="save_btn" >Save</button>
	</div>
</form>
</body>
</html>