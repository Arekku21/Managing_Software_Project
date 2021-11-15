<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "MSP";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

if(isset($_POST['submit']))
{	 
    $sql = "SELECT * FROM INVENTORY";
	$result = mysqli_query($conn, $sql);

	$data =  [['ItemID','ItemName','SupplierID','BatchID','ItemQuantity','ItemExpiry','ItemNote']];
	$counter = 1;
	
	$filename = 'csv/inventory.csv';
	$f = fopen($filename, 'w');
	
	if (mysqli_num_rows($result) > 0) {
	  // output data of each row
	  while($row = mysqli_fetch_assoc($result)) {
		  $data[$counter][0] = $row["itemid"];
		  $data[$counter][1] = $row["itemname"];
		  $data[$counter][2] = $row["supplierid"];
		  $data[$counter][3] = $row["batchid"];
		  $data[$counter][4] = $row["itemquantity"];
		  $data[$counter][5] = $row["itemexpiry"];
		  $data[$counter][6] = $row["itemnote"];
		  $counter += 1;
		echo "<br><br>itemid: " . $row["itemid"]. " <br> itemname: " . $row["itemname"]. " <br> supplierid: " . $row["supplierid"]. " <br> batchid: " . $row["batchid"]. " <br> itemquantity: " . $row["itemquantity"]. " <br> itemexpiry: " . $row["itemexpiry"]. " <br> itemnote: " . $row["itemnote"];	
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