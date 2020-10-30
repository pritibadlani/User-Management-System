<?php
/* 
 DELETE.PHP
 Deletes a specific entry from the 'drivers' table
*/

include('functions.php');

 // connect to the database
 

 // check if the 'id' variable is set in URL, and check that it is valid
 if (isset($_GET['id']) && is_numeric($_GET['id']))
 {
 // get id value
 $id = $_GET['id'];

 // delete the entry
 $result = mysqli_query($db,"DELETE FROM users WHERE id=$id")
 or die(mysqli_error()); 

Header("Location: admin/viewusers.php");
 }
?>
