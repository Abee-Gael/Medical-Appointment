<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "appointment");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
if (isset($_POST['Name']) || isset($_POST['ContactNumber']) || isset($_POST['Address']) || isset($_POST['Email']) || isset($_POST['Password'])|| isset($_POST['Category'])) {
$Name = $mysqli->real_escape_string($_REQUEST['Name']);
$ContactNumber = $mysqli->real_escape_string($_REQUEST['ContactNumber']);
$Address = $mysqli->real_escape_string($_REQUEST['Address']);
$Email = $mysqli->real_escape_string($_REQUEST['Email']);
$Password = $mysqli->real_escape_string($_REQUEST['Password']);
$Category = $mysqli->real_escape_string($_REQUEST['Category']);
}
if(!isset($Name)){
    $Name = 'Name';
    }
if(!isset($ContactNumber)){
    $ContactNumber = 'ContactNumber';
    }
    if(!isset($Address)){
    $Address = 'Address';
    }
    if(!isset($Email)){
        $Email = 'Email';
        }
		if(!isset($Password)){
			$Password = 'Password';
			}
			if(!isset($Category)){
				$Category = 'Category';
				}
// Attempt insert query execution
$sql = "INSERT INTO doctor (Name, ContactNumber, Address, Email, Password, Category) VALUES ('$Name', '$ContactNumber', '$Address','$Email', '$Password','$Category')";
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
	<title>Admin</title>
	<style>
		*{
	margin: 0px;
	padding: 0px;
}
body{
	font-size: 120%;
	background:  #D3D3D3;
}
		body,html{
	margin: 0;
	padding: 0;
}
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
.header{
	width: 30%;
	margin:30px 20px 0px 50px;
	color: white;
	background: grey;
	text-align: center;
	border: 2px solid grey;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px ;
	padding: 20px;
}
.error{
	width: 92%;
	margin: 0px auto;
	padding: 10px;
	border:1px solid #a94442;
	color: #a94442;
	background: #f2dede;
	border-radius: 5px;
	text-align: left;
}
form{
	width: 30%;
	margin:0px 20px 0px 50px;
	margin:50px auto;
	padding: 20px;
	border: 1px solid grey;
	background: white;
	border-radius: 0px 0px 10px 10px;
}
.input-group{
	margin: 10px 0px 10px 0px;
}
.input-group label{
	display: block;
	text-align: left;
	margin: 3px;
}
.input-group input{
	height: 10px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border:2px solid grey;
}
.btn{
	padding: 10px;
	font-size: 15px;
	color: white;
	background: grey;
	border:none;
	border-radius: 5px;
}
.xd{
  height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border:1px solid grey;}

.delete{
	width: 30%;
	margin:0px 20px 0px 900px;
	padding: 20px;
	border: 2px solid grey;
	background: white;
	border-radius: 0px 0px 10px 10px;
}
.headerA{
	width: 30%;
	margin:-400px 20px 0px 900px;
	color: white;
	background: grey;
	text-align: center;
	border: 2px solid grey;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px ;
	padding: 20px;
}
.Information{
margin-left: 34px;
padding: 10px;
font-weight: bold;
font-size: 30px;
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
  font-family: Times New Roman;
}
	</style>
</head>
<header>
	<h2>Afya Bora</h2>
		<nav>
		<ul> 
		<li><a href="index3.php">Add Doctor</a></li>
			<li><a href="viewdoctor.php">View Doctors</a></li>
			<li><a href=" viewpatients.php">View Patients</a></li>
			<li><a href="viewappointments.php">View Appointments</a></li>
			<li><a href="feedback.php">FeedBack</a></li>
  			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>
		</ul>
	</nav>
</header>
<body>

<form method="post" action="index3.php">

	<div class="input-group">
		<label>Name</label>
		<input type="text" name="Name" >
	</div>
	<div class="input-group">
		<label>Contact Number</label>
		<input type="text" name="ContactNumber">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="text" name="Email">

	</div>
	<div class="input-group">
		<label>Address</label>
		<input type="text" name="Address">

	</div>

	<div class="input-group">
		<label>Password</label>
		<input type="text" name="Password">

	</div>
    <div class="input-group">
	   <label>Category</label>
	   <input type="text" name="Category">
	</div>

	<div class="input-group">
		<button type="submit" name="Add" class="btn">Add Doctor</button>
	</div>


</form>
	

<div id="footer">
      &copy; All Rights Reserved 2021-
    </div>
</body>
</html>