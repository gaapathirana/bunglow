<!DOCTYPE html>
<html>
<head>
	<title>Galle My Bungalow</title>
	<!--link css-->
	 <link rel="stylesheet" type="text/css" href="css/style.css">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



	</head>
<body>
<ul>
	<li style="float:right"><a href="#" onclick="openlForm()">My Reservation</a></li>
   <li style="float:right"><a href="about.php">About Us</a></li>
  <li style="float:right"><a href="contact.php">Contact us</a></li>
  <li style="float:right"><a class="active" href="Avalable Rooms.php">Avalable Rooms</a></li>
  <li style="float:right"><a   href="index.php">Home</a></li>
</ul>
<div id="maindv" class="maindv">
	<div class="cover">
		<img src="img/cover.jpg" alt="cover">
	</div>
	<div class="rooms">
	<center>	<h1><b>Avalable Rooms</b></h1></center>

<div class="card">
  <h5 class="card-header">Deluxe Double Room <span style="color:#556B2F"> 1 full bed</span></h5>
  <div class="card-body">
   
    <p class="card-text">댴 Private bathroom

 Free parking

Villa Size: 210 m²<br>
1 full bed <br>
This villa features a private entrance<br> air conditioning and dining area.</p>

 <h5 class="card-title" style="color: #4682B4"> <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "villa";

$con=mysqli_connect($servername, $username, $password, $dbname);


$sql = "SELECT  roomNum,  count(checkRoom) AS total From rooms where checkRoom ='Available' AND  type = 'a' ";
$result=mysqli_query($con,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
/*$sql = "SELECT COUNT(checkRoom) as total FROM rooms where checkRoom ='Available'"; */




     echo" Avalable Rooms</h5>"   ;

if($num_rows <=0)
{

echo "<a href='#' class='btn btn-primary'>All Booked</a>";

}
else
{
echo "<a href='book.php' class='btn btn-primary'>Book now</a>";

}
      $con->close();
?>


  </div>
</div>

<br>


<div class="card">
  <h5 class="card-header">Deluxe Double Room <span style="color:#556B2F"> 2 twin beds 
</span></h5>
  <div class="card-body">
    
    <p class="card-text">댴 Private bathroom

 Free parking<br>

Villa Size: 260 m² <br>
2 twin beds <br>
This villa has a private entrance, air conditioning and dining area. <br>

<b>In your bathroom:</b><br>
• Shower   
• Private Bathroom</p>
<h5 class="card-title" style="color: #4682B4"> <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "villa";

$con=mysqli_connect($servername, $username, $password, $dbname);


$sql = "SELECT  roomNum,  count(checkRoom) AS total From rooms where checkRoom ='Available' AND  type = 'b' ";
$result=mysqli_query($con,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
/*$sql = "SELECT COUNT(checkRoom) as total FROM rooms where checkRoom ='Available'"; */




     echo" Avalable Rooms</h5>"   ;

if($num_rows <=0)
{

echo "<a href='' class='btn btn-primary'>All Booked</a>";

}
else
{
echo "<a href='book2.php' class='btn btn-primary'>Book now</a>";

}
      $con->close();
?>

   
  </div>
</div>
	</div>
	</div>



  <div class="form-popup" id="myForm">
  <form action="check.php" method="post" class="form-container">
    <h4>Check My Reservation</h4>

    <label for="email"><b>Nic</b></label>
    <input type="text" placeholder="Enter Your Nic" name="nic" id="nic" required>

    <label for="psw"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Your Phone Number" name="phone" id="phone" required>

    <input type="submit" value="login" class="btn">
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