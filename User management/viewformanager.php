<?php 
  include('functions.php');
?>
<?php 

$db = mysqli_connect('localhost', 'root', '', 'multi_login');
// Checking for connections 
if ($db->connect_error) { 
  die('Connect Error (' . 
  $db->connect_errno . ') '. 
  $db->connect_error); 
} 

// SQL query to select data from database 

$sql = "SELECT * FROM users where user_type='user' "; 
$result = $db->query($sql); 

$db->close(); 
?> 

<!DOCTYPE html> 
<html lang="en"> 

<head> 
  <meta charset="UTF-8"> 
  <title> User Details</title> 

  <style> 
    table { 
      margin: 0 auto; 
      font-size: large; 
      border: 1px solid black; 
    } 


    h1 { 
      text-align: center; 
      color: #5F9EA0; 
      font-size: xx-large; 
      font-family: 'Gill Sans', 'Gill Sans MT', 
      ' Calibri', 'Trebuchet MS', 'sans-serif'; 
    } 

    td { 
      background-color: #5F9EA0; 
      border: 1px solid black; 
    } 

    th, 
    td { 
      font-weight: bold; 
      border: 1px solid black; 
      padding: 10px; 
      text-align: center; 
    } 

    td { 
      font-weight: lighter; 
    } 
  </style> 
</head> 

<body> 
  <section> 
    <h1>User Details</h1> 
    <!-- TABLE CONSTRUCTION--> 
    <table> 
      <tr> 
        <th>username</th> 
        <th>email</th> 
        <th>user type</th> 
        <th> edit info? </th>
        
       
      </tr> 
      <!-- PHP CODE TO FETCH DATA FROM ROWS--> 
      <?php // LOOP TILL END OF DATA 
        while($rows=$result->fetch_assoc()) 
        { 
      ?> 
      <tr> 
        <!--FETCHING DATA FROM EACH 
          ROW OF EVERY COLUMN--> 
        <td><?php echo $rows['username'];?></td> 
        <td><?php echo $rows['email'];?></td> 
        <td><?php echo $rows['user_type'];?></td> 
        <td><a href="editformanager.php?id=<?php echo $rows['id']; ?>" >edit</a></td>
        
        
      </tr>
      <?php 
        } 
      ?> 
       <tr>
      <td colspan="4">
      <center><button class="btn" style=" display: flex; justify-content: center; "   onClick="back2main()"> GO BACK</button></center>
      </td>
      </tr> 
      
       
    </table> 
    
  </section> 
  <script>

   function back2main() {
    location.replace("manager.php");
  }
  </script>
  
</body> 

</html> 
