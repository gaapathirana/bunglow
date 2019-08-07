<?php
$servername="localhost";
$username="root";
$password="";
$dbname="villa";

$conn= new mysqli($servername,$username,$password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$name= $_POST["name"];
$nic=$_POST["nic"];
$phone=$_POST["phone"];
$date1=$_POST["date"];
$date2=$_POST["date2"];
$child=$_POST["child"];
$roomNo=$_POST["rid"];
$avl=$_POST["avl"];


$sql = "UPDATE rooms SET name= '$name', nic= '$nic', phone = '$phone',phone = '$phone',outdate = '$date2', children = '$child', 	indate = '$date1' , checkRoom = '$avl' WHERE 	id='$roomNo'";

		if ($conn->query($sql) === TRUE) {
			echo '<script language="javascript">';
			echo 'alert("Your Reservation is Booked");';
			echo 'window.location.href="index.php";';
			echo '</script>';

		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}



$conn->close();

?>

