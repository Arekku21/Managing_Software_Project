<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "MSP";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

if(isset($_POST['submit']))
{    
     $username = $_POST['LUsername'];
     $password = $_POST['LPassword'];
	 
	 $sql = "Select * from users";
	 $result = mysqli_query($conn, $sql);
	 
	 $counter = 0;
	 
     if (mysqli_num_rows($result) > 0) {
	  // output data of each row
	  while($row = mysqli_fetch_assoc($result)) {
		  if($username == $row["username"] && $password == $row["userpassword"]){
			  include 'Inventory_Add.html';
			  $counter = 1;
		  }
	  } 
	} if($counter ==0) {
	  echo "The username or password is invalid, Please try again ";
	}
    mysqli_close($conn);
}
?>