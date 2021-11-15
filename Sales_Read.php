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

	$data =  [['SaleInvoiceID','SaleDate','TotalAmount','PaymentType','Discount','PayedAmount','RemainingAmount']];
	$counter = 1;
	
	$filename = 'csv/sales.csv';
	$f = fopen($filename, 'w');

	if (mysqli_num_rows($result) > 0) {
	  // output data of each row
	  while($row = mysqli_fetch_assoc($result)) {
		  $data[$counter][0] = $row["saleInvoiceID"];
		  $data[$counter][1] = $row["saleDate"];
		  $data[$counter][2] = $row["totalAmount"];
		  $data[$counter][3] = $row["paymentType"];
		  $data[$counter][4] = $row["Discount"];
		  $data[$counter][3] = $row["payedAmount"];
		  $data[$counter][4] = $row["remainingAmount"];
		  echo "<br><br>saleInvoiceID: " . $row["saleInvoiceID"]. " <br> saleDate: " . $row["saleDate"]. " <br> totalAmount: " . $row["totalAmount"]. " <br> paymentType: " . $row["paymentType"]. " <br> Discount: " . $row["Discount"]. " <br> payedAmount: " . $row["payedAmount"]. " <br> remainingAmount: " . $row["remainingAmount"];
	  }
	  
	  foreach ($data as $row) {
		fputcsv($f, $row);
	  }
	
	  fclose($f);
	  
	} else {
	  echo "0 results";
	}
     mysqli_close($conn);
}
?>