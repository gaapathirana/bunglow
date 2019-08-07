<!DOCTYPE html>
<html>
<head>
  <title>Galle My Bungalow</title>
  <!--link css-->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
    
<div class="book">
<div class="container">
  <center><h2>Book Your Room</h2></center>
  <center><h3 style="color:   #B0C4DE">Deluxe Double Room   1 full bed</h3></center>
  <form action="rBook.php" method="post">
  <div class="form-group">
      <label for="usr">Your Name</label>
      <input type="text"  class="form-control" required  name="name" id="name">
    </div>
    <div class="form-group">
      <label for="usr">Your Nic No</label>
      <input type="text"  class="form-control" required  name="nic" id="nic">
    </div>
    <div class="form-group">
      <label for="usr">Your Phone Number</label>
      <input type="text"  class="form-control" required  name="phone" id="phone">
    </div>
    <div class="form-group">
      <label for="usr">check in Date:</label>
      <input type="date" class="form-control" required name="date" id="date">
    </div>
<input type="hidden" name="rno" id="rno" value="1">
<input type="hidden" name="avl" id="avl" value="booked">
      <div class="form-group">
      <label for="usr">check out Date:</label>
      <input type="date" class="form-control" required name="date2" id="date2">
    </div>

    <div class="form-group">
      <label for="sel1">Childrens:</label>
      <select class="form-control" name="child" required id="child">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
    </div>

   <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "villa";

$con=mysqli_connect($servername, $username, $password, $dbname);


$sql = "SELECT  id From rooms where checkRoom ='Available' AND  type = 'a' ORDER BY ID  DESC   LIMIT 1";
$result=mysqli_query($con,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['id'];



echo"<input type='hidden' name='rid' id='rid' value=' $num_rows' ";

 
  
$con->close();
?> 
<br>
<br>
      <input type="submit" class="btn btn-success" id="bkbtn" value="Book Now">
  </form>
</div>


<br>

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