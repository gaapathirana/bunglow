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
	<li style="float:right"><a href="#" onclick="openlForm()" >My Reservation</a></li>
   <li style="float:right"><a href="about.php">About Us</a></li>
  <li style="float:right"><a class="active" href="contact.php">Contact us</a></li>
  <li style="float:right"><a  href="Avalable Rooms.php">Avalable Rooms</a></li>
  <li style="float:right"><a   href="index.php">Home</a></li>
</ul>
<div id="maindv" class="maindv">
	<div class="cover">
		<img src="img/cover.jpg" alt="cover">
	</div>
<div class="map">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.6707829741363!2d80.22590331523027!3d6.039832495625879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae173b447b6ddeb%3A0xb0e05bad4fea6121!2sGalle+My+Bungalow!5e0!3m2!1ssi!2slk!4v1562859767685!5m2!1ssi!2slk" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
   </div>
   <div class="dtail">
<p><b>Address: </b>   No 165, Bandaranayaka Place, 80000 Galle, Sri Lanka  <br> </p>

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