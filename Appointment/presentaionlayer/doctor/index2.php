
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
			<li><a href=" index2.php">Home</a></li>
			<li><a href=" searchpatient.php">Search Patient</a></li>
			<li><a href=" treatment.php">Treatment</a></li>
			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>
		</ul>
	</nav>
</header>
<body>
	<table class="table2">
		<?php
echo "<tr><th>Appointment ID</th><th>Date</th><th>Time</th><th>Patient_ID</th><th>Name</th><th>Contact Number</th><th>Address</th><th>Email</th><th>Category</th></tr>";

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
  $stmt = $conn->prepare("SELECT book.Appointment_ID,book.Date,book.Time, patients.Patient_ID, patients.Name, patients.ContactNumber,patients.Address,patients.Email,patients.Bloodtype FROM  book, patients ;");
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
</div>
</body>
</html>

