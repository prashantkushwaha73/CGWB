<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "", "sih");
$sql = "SELECT * FROM gw_datdaset__1_ WHERE State LIKE '%".$_POST['name']."%'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "	<tr>
		          <td>".$row['State']."</td>
		          <td>".$row['District']."</td>
		          <td>".$row['2H']."</td>
		          <td>".$row['18O']."</td>
		        </tr>";
	}
}
else{
	echo "<tr><td>0 result's found</td></tr>";
}

?>