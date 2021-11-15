<<<<<<< HEAD
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
=======
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
>>>>>>> 742acbcce634474c8fa5bd5a31d325f2725de98c
?>