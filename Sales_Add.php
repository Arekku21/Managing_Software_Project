<?php
ini_set("display_errors",true);

$servername='localhost';
$username='root';
$password='';
$dbname = "MSP";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

if(isset($_POST['submit']))
{
	 $SDate = $_POST['SDate'];
	 $TAmount = $_POST['TAmount'];
	 $PType = $_POST['PType'];
	 $Discount = $_POST['Discount'];
	 $PAmount = $_POST['PAmount'];
	 $RAmount = $_POST['RAmount'];
	 
     $sql = "INSERT INTO Sale_Invoice (saleDate,totalAmount,paymentType,Discount,payedAmount,remainingAmount)
			 VALUES ('$SDate','$TAmount','$PType','$Discount','$PAmount','$RAmount')";
	 
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>