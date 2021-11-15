<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "MSP";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

if(isset($_POST['submit']))
{    	 
    $sql = "Select * from users";
	$result = mysqli_query($conn, $sql);

	$data =  [['UserID','UserRole','UserName','UserPassword','CreatedAt']];
	$counter = 1;
	
	$filename = 'csv/login.csv';
	$f = fopen($filename, 'w');

	if (mysqli_num_rows($result) > 0) {
	  // output data of each row
	  while($row = mysqli_fetch_assoc($result)) {
		  $data[$counter][0] = $row["userid"];
		  $data[$counter][1] = $row["userrole"];
		  $data[$counter][2] = $row["username"];
		  $data[$counter][3] = $row["userpassword"];
		  $data[$counter][4] = $row["created_at"];
		  $counter += 1;
		  echo "<br><br>userid: " . $row["userid"]. " <br> userrole: " . $row["userrole"]. " <br> username: " . $row["username"]. " <br> userpassword: " . $row["userpassword"]. " <br> created_at: " . $row["created_at"];
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