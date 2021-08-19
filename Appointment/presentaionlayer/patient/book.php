<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "appointment");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
if (isset($_POST['Name']) || isset($_POST['Date']) || isset($_POST['Time']) ||isset($_POST['DoctorName'])|| isset($_POST['Category'])) {
// Escape user inputs for security
$Name = $mysqli->real_escape_string($_REQUEST['Name']);
$Date = $mysqli->real_escape_string($_REQUEST['Date']);
$Time = $mysqli->real_escape_string($_REQUEST['Time']);
$DoctorName = $mysqli->real_escape_string($_REQUEST['DoctorName']);
$Category = $mysqli->real_escape_string($_REQUEST['Category']);
} 
if(!isset($Name)){
  $Name = 'Name';
  }
if(!isset($Date)){
  $Date = 'Date';
  }
  if(!isset($Time)){
  $Time = 'Time';
  }
  if(!isset($DoctorName)){
      $DoctorName = 'DoctorName';
      }
      if(!isset($Category)){
        $Category = 'Category';
        }
// Attempt insert query execution
$sql = "INSERT INTO book(Name, Date, Time, DoctorName, Category) VALUES ('$Name', '$Date', '$Time','$DoctorName','$Category')";
if($mysqli->query($sql) === true){
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <title>Book Appointment</title>
  <style>
	    .banner,body{
            height: 100vh;
            width: 100%;
            background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(appointment.jpg);
            background-size: cover;
            background-position: center;
        } 
      body{
          background-color: #D3D3D3;
		  margin: 0;}

		header{
	width: 100%;
	height: 70px;
	background-color: #282828;

}
h2{
	position: absolute;
	padding: 3px;
	float: left;
	margin-left: 2%;
	margin-top: 10px;
	font-family: Times New Roman;
	color: blue;
	font-size: 30px;
}

ul{
	width: auto;
	float: right;
	margin-top: 8px;

}

li{
	display: inline-block;
	padding: 15px 15px;

}
a{
	text-align: center;
	color: #ffffff;
	text-decoration: none;
	font-family: Times New Roman;
	font-size: 1.4vw;

}
a:hover{
	color: #F0c330;
	transition: 0.5s;
}
      
input[type=text], select, textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}
input[type=submit] {
  background-color: grey;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}
.container {
	width: 30%;
	margin:50px auto;
	padding: 20px;
	border: 1px solid #B0C4DE;
	background: white;
	border-radius: 0px 0px 10px 10px;
}
.col-25 {
    font-family: Times New Roman;
  float: left;
  width: 25%;
  margin-top: 6px;
}
.col-75 {
    font-family: Times New Roman;
  float: left;
  width: 75%;
  margin-top: 6px;
}
.row:after {
    font-family: Times New Roman;
  content: "";
  display: table;
  clear: both;
}
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
	font-size: 15px;
  }
}
.btn{
	margin :0 50% 0 40%;
	padding: 10px 30px 10px 30px;
  margin-top: 30px;
	font-size: 15px;
	color: white;
	background: grey;
	border:none;
	border-radius: 5px;
	font-family: Times New Roman;
	font-size: 20px;
}
.btnB{
	margin :0 50% 0 40%;
  margin-top: 20px;
	padding: 10px 40px 10px 30px;
	font-size: 15px;
	color: white;
	background: grey;
	border:none;
	border-radius: 5px;
	font-family: Times New Roman;
	font-size: 20px;
}
#footer{
  background-color: #212121;
  height: 60px;
  position: fixed;
  bottom: 0px;
  left: 0px;
  line-height: 50px;
  color: #aaa;
  text-align: center;
  width: 100%;
}
  </style>

</head>
<body>
<header>
	<h2>Afya Bora</h2>
		<nav>
		<ul> 
      <li><a href=" index.php">Home</a></li>
			<li><a href=" book.php">Book Appointment</a></li>
			<li><a href="view.php">View Appointment</a></li>
      <li><a href="feedback.php">Feedback</a></li>
			<li><a href="services.php">Services</a></li>
			<li><a href="about us.php">About Us</a></li>
			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>
		</ul>
	</nav>
</header>
	<div class="banner">
<div class="container">
  <form action="book.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="Name">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="" name="Name" required placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Date">Date</label>
      </div>
      <div class="col-75">
        <input type="Date" id="" name="Date" required placeholder="">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Time">Time</label>
      </div>
      <div class="col-75">
        <input type="Time" id="" name="Time" required placeholder="">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Category">Category</label>
      </div>
      <div class="col-75">
        <select id="" name="Category">
          <option value="Oncologist">Oncologist</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="DoctorName">Doctor Name</label>
      </div>
      <div class="col-75">
        <select id="DoctorName" name="DoctorName">
          <option value="Elizabeth Jones">Elizabeth Jones</option>
        </select>
      </div>
    </div>
    <div class="input-group">
		<button type="Submit" name="Book" class="btnB">Book</button>
	</div>
    <div class="input-group">
		<button type="Submit" name="Cancel" class="btn">Cancel</button>
	</div>
  <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "appointment");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
if (isset($_POST['Name']) || isset($_POST['Date']) || isset($_POST['Time']) ||isset($_POST['DoctorName'])|| isset($_POST['Category'])) {
// Escape user inputs for security
$Name = $mysqli->real_escape_string($_REQUEST['Name']);
$Date = $mysqli->real_escape_string($_REQUEST['Date']);
$Time = $mysqli->real_escape_string($_REQUEST['Time']);
$DoctorName = $mysqli->real_escape_string($_REQUEST['DoctorName']);
$Category = $mysqli->real_escape_string($_REQUEST['Category']);
} 
if(!isset($Name)){
  $Name = 'Name';
  }
if(!isset($Date)){
  $Date = 'Date';
  }
  if(!isset($Time)){
  $Time = 'Time';
  }
  if(!isset($DoctorName)){
      $DoctorName = 'DoctorName';
      }
      if(!isset($Category)){
        $Category = 'Category';
        }
// Attempt insert query execution
$sql = "INSERT INTO cancel(Name, Date, Time, DoctorName, Category) VALUES ('$Name', '$Date', '$Time','$DoctorName','$Category')";
if($mysqli->query($sql) === true){
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>



  </form>
</div>
	</div>
	<div id="footer">
      &copy; Afyabora All Rights Reserved 2021-
    </div>
    </div>
</body>
</html>