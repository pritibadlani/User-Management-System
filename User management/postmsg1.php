<?php

//mysqli connectivity, select database
$db= new mysqli("localhost","root","","multi_login") or die("ERROR:could not connect to the database!!!");

//extract all html field
extract($_POST);
 
if(isset($save))
{

//store textarea values in <pre> tag
$msg="<pre>$a</pre>";

//insert values in textarea table
$query="insert into textarea values('','$msg')";
$db->query($query);

}
if(isset($back))
{
  header("location: admin/home.php");
}


//click on display button to show all values entered by you

?>
<!DOCTYPE html>
<head>
  <title>Write Message</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
  input,textarea{width:300px}
  textarea{height:200px}
  input[type=submit]{width:150px}
  </style>
</head>
<body>
<div class="header">
    <h2>Post message</h2>
  </div>

<form method="post">
 
<table width="200" border="1">
  
  <tr>
    <td>Message</td>
    <td><textarea placeholder="content"  name="a"></textarea></td>
  </tr>
  <tr>
    <td colspan="2">
		<input type="submit" class="btn" value="Save" name="save"/>
		<input type="submit" class="btn"  value="Back"name="back"/>
	</td>
  </tr>
  
</table>
 
</form>
</body>
</html>