<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "MSP";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

if(isset($_POST['submit']))
{
	 $itemId = $_POST['ItemID'];
	 $itemName = $_POST['ItemName'];
	 $supplierId = $_POST['SupplierID'];
	 $batchId = $_POST['BatchID'];
	 $quantity = $_POST['Quantity'];
	 $expiryDate = $_POST['ExpiryDate'];
	 $notes = $_POST['Note'];
	 
     $sql = "INSERT INTO Inventory (itemid,itemname,supplierid,batchid,itemquantity,itemexpiry,itemnote)
			 VALUES ('$itemId','$itemName','$supplierId','$batchId','$quantity','$expiryDate','$notes')";
	 
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>

