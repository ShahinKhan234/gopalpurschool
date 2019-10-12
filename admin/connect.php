 <?php
$host = "localhost";
$username = "root";
$password = "";
$dbName ="ghhs";

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbName);


// Check connection
if ($conn) {
	
}else{
	echo "<h1>Database Not Conntected!</h1>";
}
?>