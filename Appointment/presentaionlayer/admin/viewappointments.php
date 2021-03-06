
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
	color: grey;
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
	color: black;
}
form{
	width: 30%;
	margin:0px 20px 0px 50px;
	padding: 20px;
	border: 1px solid grey;
	background:  #D3D3D3;
	border-radius: 0px 0px 10px 10px;
}
.btnA{
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
	border:1px solid grey;
}
.input-groupA{
	margin: 10px 0px 10px 0px;
}
.input-groupA label{
	display: block;
	text-align: left;
	margin: 3px;
}
.input-groupA input{
	height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border:2px solid grey;
}
h1{
	margin-left: 37%;
	margin-top: 80px;
	Font-family: Times New Roman;
}
.headerA{
	width: 30%;
	margin:-0px 20px 0px 800px;
	color: white;
	background: #D3D3D3;
	text-align: center;
	border: 2px solid grey;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px ;
	padding: 20px;
}
.headerAD{
	width: 30%;
	margin:-0px 20px 0px 800px;
	color: grey;
	background: white;
	text-align: center;
	border: 2px solid grey;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px ;
	padding: 20px;
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
	<h1 style="margin-left:40% ;margin-top:30px; color: white;"   class="asd"> Appointments </h1>
	<table class="table4">
	<?php
echo "<tr><th>Appointment ID</th><th>Name</th><th>DATE</th><th>TIME</th><th>Doctor Name</th><th>Category</th></tr>";

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
  $stmt = $conn->prepare("SELECT*FROM book");
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

		<table class="table4">
         	<caption style="margin-left: 34px;padding: -10px;font-weight: bold;font-size: 30px;" class="asd">Cancel</caption>>
	
		<?php
echo "<tr><th>Cancel ID</th><th>Name</th><th>Date</th><th>Time</th><th>Doctor's Name</th><th>Category</th></tr>";



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appointment";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT Cancel_ID, Name, Date, Time, DoctorName, Category FROM Cancel;");
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

	<form role="form" method="post" enctype="multipart/form-data" class="form1" style="width: 100%;margin-top:110px;margin-left: -10px;">
	<div class="headerA">
	  <h3>Confirmation</h3>
    </div>
	  <div class="headerAD">
	  <div class="input-groupA">
		<label>Email</label>
		<input type="text" name="addemail" >
	  </div>

	  <div class="input-groupA">
		<label>Subject</label>
		<input type="text" name="addsubject">
	  </div>
	
	  <div class="input-groupA">
		<label>Message</label>
		<input type="text" name="addContactmessage">
	  </div>
               
        <button type="submit"  id="message" name="sendemail" style="width:200px;height:30px;border-radius: 10px; background: grey ;margin-left:45%;color: white ">Send
               </button>
               
        
        </div>
        </form>
		<?php 
    if (isset($_POST['sendmail'])){
        if(mail($_POST['email'], $_POST['subject'], $_POST['message'],'FROM:afyabora@gmail.com')){
            echo "success";
        }else{
            echo "failed";
        }
    }
    
    ?>
<div id="footer">
      &copy;Afyabora All Rights Reserved 2021-
    </div>
</body>
</html>