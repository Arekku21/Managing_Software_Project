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

	$data =  [['SupplierID','CompanyName','Mobile Phone','Email','City']];
	$counter = 1;
	
	$filename = 'csv/supplier.csv';
	$f = fopen($filename, 'w');

	if (mysqli_num_rows($result) > 0) {
	  // output data of each row
	  while($row = mysqli_fetch_assoc($result)) {
		  $data[$counter][0] = $row["SupplierID"];
		  $data[$counter][1] = $row["companyName"];
		  $data[$counter][2] = $row["supplierMobilePhone"];
		  $data[$counter][3] = $row["supplierEmailAddress"];
		  $data[$counter][4] = $row["City"];
		  echo "<br><br>SupplierID: " . $row["SupplierID"]. " <br> companyName: " . $row["companyName"]. " <br> supplierMobilePhone: " . $row["supplierMobilePhone"]. " <br> supplierEmailAddress: " . $row["supplierEmailAddress"]. " <br> supplierAddress: " . $row["supplierAddress"]. " <br> City: " . $row["City"];
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