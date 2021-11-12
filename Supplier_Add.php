<?php
ini_set("display_errors",true);

$servername='localhost';
$username='root';
$password='';
$dbname = "MSP";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

if(isset($_POST['submit']))
{
	 $SupplierID = $_POST['SupplierID'];
	 $CompanyName = $_POST['CompanyName'];
	 $MobilePhone = $_POST['MobilePhone'];
	 $EmailAddress = $_POST['EmailAddress'];
	 $Address = $_POST['Address'];
	 $City = $_POST['City'];
	 
     $sql = "INSERT INTO Supplier (SupplierID,companyName,supplierMobilePhone,supplierEmailAddress,supplierAddress,City)
			 VALUES ('$SupplierID','$CompanyName','$MobilePhone','$EmailAddress','$Address','$City')";
	 
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>

