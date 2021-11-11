<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "MSP";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

if(isset($_POST['submit']))
{    
     $username = $_POST['LUsername'];
	 
     $sql = "DELETE FROM USERS WHERE username='$username'";
	 
     if (mysqli_query($conn, $sql)) {
        echo "User deleted successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>