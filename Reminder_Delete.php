<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "MSP";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

if(isset($_POST['submit']))
{    
     $title = $_POST['ReminderName'];
	 
     $sql = "DELETE FROM Reminder WHERE Title='$title'";
	 
     if (mysqli_query($conn, $sql)) {
        echo "Reminder deleted successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>