<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "appointment");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
if (isset($_POST['Name']) || isset($_POST['Email']) || isset($_POST['Message'])) {
// Escape user inputs for security
$Name = $mysqli->real_escape_string($_REQUEST['Name']);
$Date = $mysqli->real_escape_string($_REQUEST['Email']);
$Time = $mysqli->real_escape_string($_REQUEST['Message']);

} 
if(!isset($Name)){
  $Name = 'Name';
  }
if(!isset($Email)){
  $Date = 'Email';
  }
  if(!isset($Message)){
  $Time = 'Message';
  }
 
// Attempt insert query execution
$sql = "INSERT INTO feedback (Name, Email, Message) VALUES ('$Name', '$Email', '$Message')";
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
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
      
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
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
			<li><a href="cancel.php">Cancel Booking</a></li>
      <li><a href="feedback.php">Feedback</a></li>
			<li><a href="services.php">Services</a></li>
			<li><a href="about us.php">About Us</a></li>
			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>
		</ul>
	</nav>
</header>
<h3>Feedback Form</h3>

<div class="container">
  <form action="feedback.php" method="post">
    <label for="Name"> Name</label>
    <input type="text" id="" name="Name" placeholder="Your name..">

    <label for="Email">Email</label>
    <input type="text" id="" name="Email" placeholder="Your last name..">

    <label for="Message">Message</label>
    <textarea id="subject" name="Message" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>