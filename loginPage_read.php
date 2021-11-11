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

	if (mysqli_num_rows($result) > 0) {
	  // output data of each row
	  while($row = mysqli_fetch_assoc($result)) {
		echo "<br><br>userid: " . $row["userid"]. " <br> userrole: " . $row["userrole"]. " <br> username: " . $row["username"]. " <br> userpassword: " . $row["userpassword"]. " <br> created_at: " . $row["created_at"];
	  }
	} else {
	  echo "0 results";
	}
    mysqli_close($conn);
}
?>