<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "appointment");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
if (isset($_POST['PatientName']) || isset($_POST['Treatment']) || isset($_POST['DoctorNote'])) {
// Escape user inputs for security
$PatientID = $mysqli->real_escape_string($_REQUEST['PatientID']);
$PatientName = $mysqli->real_escape_string($_REQUEST['PatientName']);
$Treatment = $mysqli->real_escape_string($_REQUEST['Treatment']);
$DoctorNote = $mysqli->real_escape_string($_REQUEST['DoctorNote']);
}
if(!isset($PatientID)){
    $PatientID = 'PatientID';
    }
if(!isset($PatientName)){
    $PatientName = 'PatientName';
    }
    if(!isset($Treatment)){
    $Treatment = 'Treatment';
    }
    if(!isset($DoctorNote)){
        $DoctorNote = 'DoctorNote';
        }
// Attempt insert query execution
$sql = "INSERT INTO treatment (Patient_ID, PatientName, Treatment, DoctorNote) VALUES ('$PatientID', '$PatientName', '$Treatment','$DoctorNote')";
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
  <title>Treatment</title>
  <style>

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
    margin-top: 0;
  }
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
			<li><a href=" searchpatient.php">Search Patient</a></li>
            <li><a href=" treatment.php">Treatment</a></li>
			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>
		</ul>
	</nav>
</header>
	<div class="banner">
<div class="container">
  <form action="treatment.php" method="post">
  <div class="row">
      <div class="col-25">
        <label for="PatientID">Patient ID</label>
      </div>
      <div class="col-75">
        <input type="PatientID" id="PatientID" name="PatientID" required placeholder="Patients ID...">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="PatientName">Patient Name</label>
      </div>
      <div class="col-75">
        <input type="PatientName" id="PatientName" name="PatientName" required placeholder="Patients Name...">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Treatment">Treatment</label>
      </div>
      <div class="col-75">
        <input type="Treatment" id="Treatment" name="Treatment" required placeholder="Patients treatment...">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="DoctorNote">Doctor's Note</label>
      </div>
      <div class="col-75">
        <input type="DoctorNote" id="DoctorNote" name="DoctorNote" required placeholder="Doctor's Note...">
      </div>
    </div>

 
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
	</div>
	<div id="footer">
      &copy; Afyabora All Rights Reserved 2021-
    </div>
    </div>
</body>
</html>