<!DOCTYPE html>
<html>
<head>
	<title>Doctor</title>
	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<style>
		body,html{
	margin: 0;
	padding: 0;
	background-color: #D3D3D3;

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
.table3{
	border-collapse: collapse;
	width: 100%;
	color: #282828;
	font-family: Times New Roman;
	font-size: 20px;
	text-align: center;
	margin-top: 10px;
	padding: 0;
}
.patientsearch{

width: 30%;
margin:0px auto;
padding: 20px;
border: 1px solid #423289;
background: white;
border-radius: 0px 0px 10px 10px;
}
.btn{
	margin :0 50% 0 40%;
	padding: 10px 30px 10px 30px;
	font-size: 15px;
	color: white;
	background: grey;
	border:none;
	border-radius: 5px;
	font-family: Times New Roman;
}
.input-group{
	margin: 10px 0px 10px 0px;
}
.input-group label{
	display: block;
	text-align: left;
	margin: 5px;
}
.input-group input{
	height: 20px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border:1px solid grey;
}
.table2{
border-collapse: collapse;
width: 100%;
color: #282828;
font-family: Times New Roman;
font-size: 20px;
text-align: center;
margin-top: 130px;
}
th{
background-color: grey;
color: white;
width: auto;
}
tr:nth-child(even){
background-color: grey;
width: auto;
}
#footer{
  background-color: #212121;
  height: 60px;
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
<body>
	<header>
	<h2>Afya Bora</h2>
		<nav>
		<ul> 
			<li><a href=" index.php">Home</a></li>
			<li><a href=" searchpatient.php">Search Patient</a></li>
			<li><a href=" treatment.php">Treatment</a></li>
			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>
		</ul>
	</nav>
</header>
	
<form method="post" action="searchpatient.php" class="patientsearch">

	<div class="input-group">
		<label style="font-weight: bold; font-size: 30px">Search By:</label>
		<label style="font-weight: bold">*Patient ID</label>
		<input type="text" name="Patient_ID" >

	</div>

	<div class="input-group">
		<button type="submit" name="Search" class="btn">Search</button>
	</div>
		</form>
</form>

		<?php 

         if (isset($_POST['Search'])) {

         ?>	<table class="table3" >
         	<caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Patient Information</caption>>

		<?php
echo "<tr><th>Patient ID</th><th>Name</th><th>Contact Number</th><th>Address</th><th>Email</th><th>Booldtype</th></tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appointment";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT Patient_ID, Name, ContactNumber, Address, Email, Bloodtype FROM patients;");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
 </table>
  	<table class="table2">
         	<caption style="margin-left: 34px;padding: -10px;font-weight: bold;font-size: 30px;" class="asd">Treatment History</caption>>
	
		<?php
echo "<tr><th>PatientID</th><th>Patient Name</th><th>Treatment</th><th>Doctor's Note</th></tr>";



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appointment";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT Patient_ID, PatientName, Treatment, DoctorNote FROM treatment;");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
	<?php  

	}?>
 </table>
 <div id="footer">
      &copy; Afyabora All Rights Reserved 2021-
    </div>
</div>
</body>
</html>


