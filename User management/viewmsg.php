<?php
$db= new mysqli("localhost","root","","multi_login") or die("ERROR:could not connect to the database!!!");
$query="select * from textarea";
$result=$db->query($query);

?>
<!DOCTYPE html> 
<html lang="en"> 

<head> 
  <meta charset="UTF-8"> 
  <title> Message Details</title> 

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
    <h1>Message Details</h1> 
    <!-- TABLE CONSTRUCTION--> 
    <table> 
      <tr> 
        <th>message</th> 
        <th>Delete message</th> 
      </tr> 
      <!-- PHP CODE TO FETCH DATA FROM ROWS--> 
      <?php
      
       	while($rows=$result->fetch_array() )
        {
      ?> 
      <tr> 
        <!--FETCHING DATA FROM EACH 
          ROW OF EVERY COLUMN--> 
      
        <td><?php echo $rows['message'];?></td> 
         <td><a href="deletemsg.php?id=<?php echo $rows['id']; ?>" >Delete</a></td>
        
      </tr>

      
      <?php 
        } 
      
      ?>
      <tr>
    <td colspan="2">
    <center><button class="btn" style=" display: flex; justify-content: center; "   onClick="back1()"> GO BACK</button></center>
	</td>
  </tr> 
    </table> 
  </section> 
  <script>

   function back1() {
	  location.replace("admin/home.php");
	}
	</script>
  
</body> 

</html> 