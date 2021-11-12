<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "MSP";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

if(isset($_POST['submit']))
{	 
    $sql = "SELECT * FROM Sale_Invoice";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	  // output data of each row
	  while($row = mysqli_fetch_assoc($result)) {
		echo "<br><br>saleInvoiceID: " . $row["saleInvoiceID"]. " <br> saleDate: " . $row["saleDate"]. " <br> totalAmount: " . $row["totalAmount"]. " <br> paymentType: " . $row["paymentType"]. " <br> Discount: " . $row["Discount"]. " <br> payedAmount: " . $row["payedAmount"]. " <br> remainingAmount: " . $row["remainingAmount"];
	  }
	} else {
	  echo "0 results";
	}
     mysqli_close($conn);
}
?>