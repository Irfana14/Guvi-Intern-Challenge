
<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$Username=$_POST['user'];
		 $password=$_POST['pass'];
		 

$sql = "SELECT * FROM saffron WHERE Username='$Username' && password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	$conn = new mysqli("localhost", "root", "1234", "data");
$sql = "SELECT * FROM entry WHERE Username='$Username'";
$result=mysqli_query($conn,$sql);
$json_array=array();
   
   while($row = mysqli_fetch_assoc($result))
	   {

$json_array[]=$row;
	   }
echo json_encode($json_array);
        
    
} else {
    echo "0 results";
}

$conn->close();
?>