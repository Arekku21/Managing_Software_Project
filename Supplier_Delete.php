<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "MSP";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

if(isset($_POST['submit']))
{
	 $SupplierID = $_POST['SupplierID'];
	 
     $sql = "DELETE FROM Supplier WHERE SupplierID = '$SupplierID'";
	 
     if (mysqli_query($conn, $sql)) {
        echo "Record has been deleted successfully!";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
//add, delete and read

?>

