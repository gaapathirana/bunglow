

<?php
session_start();


if(!isset($_SESSION['nic'])){
  //not logged in
  header('Location: index.php');
   
} else {
  $nica= $_SESSION['nic'];
$phonea=  $_SESSION['phone'];
}
?>



<!DOCTYPE html>
<html>
<head>




	<title>Galle My Bungalow</title>
	<!--link css-->
	 <link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>
<ul>
	<li style="float:right"><a  class="active" href="#" onclick="openlForm()">My Reservation</a></li>
   <li style="float:right"><a href="about.php">About Us</a></li>
  <li style="float:right"><a href="contact.php">Contact us</a></li>
  <li style="float:right"><a href="Avalable Rooms.php">Avalable Rooms</a></li>
  <li style="float:right"><a   href="index.php">Home</a></li>
</ul>
<div id="maindv" class="maindv">
	<div class="cover">
		<img src="img/cover.jpg" alt="cover">
    </div>
    
<div class="my">

<center><h2>Your Reservations</h2></center>

<? echo "hello " $nic ?>
<table>
  <tr>
    <th>Name</th>
    <th>check in Date</th>
    <th>check out Date</th>
    <th>Childrens</th>
  </tr>
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "villa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM rooms where nic ='$nica'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {




 echo "<tr> <td>". $row["name"]. "</td><td>". $row["indate"]. "</td><td> " . $row["outdate"] . "</td><td> " . $row["children"] . "</td></tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 
</table>
</div>



<div class="form-popup" id="myForm">
  <form action="check.php" method="post" class="form-container">
    <h4>Check My Reservation</h4>

    <label for="email"><b>Nic</b></label>
    <input type="text" placeholder="Enter Your Nic" name="nic" required>

    <label for="psw"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Your Phone Number" name="phone" required>

    <button type="submit" class="btn">Login</button>
    <button type="button" class="btn cancel" onclick="closelForm()">Close</button>
  </form>
</div>

<script>
function openlForm() {
  document.getElementById("myForm").style.display = "block";
}

function closelForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</body>
</html>