<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "MSP";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

if(isset($_POST['submit']))
{    
     $title = $_POST['ReminderName'];
     $description = $_POST['Description'];
	 $dateTime = $_POST['DateTime'];
	 
     $sql = "INSERT INTO Reminder (Title,Description,Date_Time)
			 VALUES ('$title','$description','$dateTime')";
	 
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>