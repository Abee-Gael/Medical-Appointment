<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
try{
    $pdo = new PDO("mysql:host=localhost;dbname=appointment", "root", "");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
 
// Attempt update query execution
try{
    $sql = "DELETE FROM book WHERE Appointment_ID='?'";  
    $pdo->exec($sql);
    echo "";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($pdo);
            ?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<style> 
	      body {margin: 0;}
      .banner{
            height: 100vh;
            width: 100%;
            background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(typing.jpg);
            background-size: cover;
            background-position: center;
        } 
        body {font-family: Times New Roman;}

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
form{

	width: 30%;
	margin:30px auto;
	padding: 20px;
	border: 1px solid #B0C4DE;
	background: white;
	border-radius: 0px 0px 10px 10px;

}

.input-group{
	margin: 20px 0px 20px 0px;
	font-family: Times New Roman;
	font-size: 20px;
}

.input-group label{
	display: block;
	text-align: left;
	margin: 20px;
	font-family: Times New Roman;
	font-size: 20px;
}

.input-group input{
	height: 20px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border:1px solid grey;
	font-family: Times New Roman;
	font-size: 20px;
}
.xd{
  height: 30px;
  margin-top:50px;
	width: 98%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border:1px solid grey;}

	.btn{
	margin :0 50% 0 40%;
	padding: 10px 30px 10px 30px;
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

<div class="banner" >
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

<body>	
<form method="post" action="cancel.php">


	<div class="input-group">
		<label>Appointment ID</label>
		<input type="ID" name="Appointment_ID" >

	</div>

	<div class="input-group">
		<button type="Submit" name="Cancel" class="btn">Cancel</button>
	</div>
		</form>
	</form>

	<div id="footer">
      &copy; All Rights Reserved 2021-
    </div>
    </div>
</body>
</html>

