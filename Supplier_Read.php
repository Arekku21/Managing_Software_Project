<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "MSP";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

if(isset($_POST['submit']))
{	 
    $sql = "SELECT * FROM Supplier";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	  // output data of each row
	  while($row = mysqli_fetch_assoc($result)) {
		echo "<br><br>SupplierID: " . $row["SupplierID"]. " <br> companyName: " . $row["companyName"]. " <br> supplierMobilePhone: " . $row["supplierMobilePhone"]. " <br> supplierEmailAddress: " . $row["supplierEmailAddress"]. " <br> supplierAddress: " . $row["supplierAddress"]. " <br> City: " . $row["City"];
	  }
	} else {
	  echo "0 results";
	}
     mysqli_close($conn);
}
?>