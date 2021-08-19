
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<style>
				*{
	margin: 0px;
	padding: 0px;
}
body{
	font-size: 120%;
	background: #D3D3D3;
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

.table4{
	border-collapse: collapse;
	width: 100%;
	color: #282828;
	font-family: Times New Roman;
	font-size: 20px;
	text-align: center;
	margin-top:150px;
	padding: 0;
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
		<li><a href="index3.php">Add/Delete Doctor</a></li>
			<li><a href="viewdoctor.php">View Doctors</a></li>
			<li><a href=" viewpatients.php">View Patients</a></li>
			<li><a href="viewappointments.php">View Appointments</a></li>
			<li><a href="feedback.php">FeedBack</a></li>
  			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>
		</ul>
	</nav>
</header>

<body>
	<table class="table4">

		<?php
echo "<tr><th>Doctor ID</th><th>Name</th><th>Contact Number</th><th>Address</th><th>Email</th><th>Password</th><th>Category</th></tr>";

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
  $stmt = $conn->prepare("SELECT*FROM doctor");
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

	<div id="footer">
      &copy; Afyabora All Rights Reserved 2021-
    </div>
</body>
</html>