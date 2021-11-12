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

	if (mysqli_num_rows($result) > 0) {
	  // output data of each row
	  while($row = mysqli_fetch_assoc($result)) {
		echo "<br><br>itemid: " . $row["itemid"]. " <br> itemname: " . $row["itemname"]. " <br> supplierid: " . $row["supplierid"]. " <br> batchid: " . $row["batchid"]. " <br> itemquantity: " . $row["itemquantity"]. " <br> itemexpiry: " . $row["itemexpiry"]. " <br> itemnote: " . $row["itemnote"];
	  }
	} else {
	  echo "0 results";
	}
     mysqli_close($conn);
}
?>