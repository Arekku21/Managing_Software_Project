<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "MSP";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

if(isset($_POST['submit']))
{    	 
    $sql = "Select * from Reminder";
	$result = mysqli_query($conn, $sql);

	$data =  [['Title','Description','DateTime']];
	$counter = 1;
	
	$filename = 'csv/reminder.csv';
	$f = fopen($filename, 'w');

	if (mysqli_num_rows($result) > 0) {
	  // output data of each row
	  while($row = mysqli_fetch_assoc($result)) {
		  $data[$counter][0] = $row["Title"];
		  $data[$counter][1] = $row["Description"];
		  $data[$counter][2] = $row["Date_Time"];
		  $counter += 1;
		  echo "<br><br>Title: " . $row["Title"]. " <br> Description: " . $row["Description"]. " <br> DateTime: " . $row["Date_Time"];
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

