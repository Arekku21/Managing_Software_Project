<?php
ini_set("display_errors",true);

$servername='localhost';
$username='root';
$password='';
$dbname = "MSP";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

if(isset($_POST['submit']))
{
	 $CompanyName = $_POST['CompanyName'];
	 $MobilePhone = $_POST['MobilePhone'];
	 $EmailAddress = $_POST['EmailAddress'];
	 $Address = $_POST['Address'];
	 $City = $_POST['City'];
	 
     $sql = "INSERT INTO Supplier (companyName,supplierMobilePhone,supplierEmailAddress,supplierAddress,City)
			 VALUES ('$CompanyName','$MobilePhone','$EmailAddress','$Address','$City')";
	 
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>

