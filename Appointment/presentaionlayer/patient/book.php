<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<style>
		body,html{
	margin: 0;
	padding: 0;

}
.banner,body{
	height: 100vh;
	width: 100%;
	background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(view.jpg);
	background-size: cover;
	background-position: center;
} body,html{
	margin: 0;
	padding: 0;
}

	header{
	width: 100%;
	height: 70px;
	background-color: #282828;

}
h3{
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
	margin: 50px auto 0px;
	color: white;
	background: grey;
	text-align: center;
	border: 1px solid grey;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px ;
	padding: 20px;
}

.headerP{
	width: 20%;
	margin-left: 0px;
	margin-top: 60px;
	color: white;
	background: grey;
	text-align: center;
	border: 1px solid grey;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px ;
	padding: 20px;
}

form{

	width: 30%;
	margin:0px auto;
	padding: 20px;
	border: 1px solid grey;
	background: white;
	border-radius: 0px 0px 10px 10px;
	font-family: Times New Roman;

}

.input-group{
	margin: 10px 0px 10px 0px;
	font-family: Times New Roman;
	font-size: 20px;
}

.input-group label{
	display: block;
	text-align: left;
	margin: 5px;
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

.input-group2{
  height: 30px;
	width: 98%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border:1px solid grey;}

	.input-group2{
	margin: 10px 0px 10px 0px;
}

.input-group2 label{
	display: block;
	text-align: left;
	margin: 5px;

}

.input-group2 input{
	height: 20px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border:1px solid grey;
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

<header>
	<h3>Afya Bora</h3>
		<nav>
		<ul> 
      <li><a href=" index.php">Home</a></li>
			<li><a href=" book.php">Book Appointment</a></li>
			<li><a href="view.php">View Appointment</a></li>
			<li><a href="cancel.php">Cancel Booking</a></li>
			<li><a href="services.php">Services</a></li>
			<li><a href="about us.php">About Us</a></li>
			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>
		</ul>
	</nav>
</header>

<body>
	<div class="banner">
	<div class="header">
	<h2>Book Appointment</h2>
</div>

<form method="post" action="book.php">

<?php include ('../../datalayer/errors.php');?>

	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

			<div class="input-group">
		<label>Categery</label>
	   	<select name="categorey" class="xd">
	   		<option value="OB/GYN" >OB/GYN</option>
	   		<option value="Oncologists" >Oncologists</option>
	   		<option value="Cardiologist">Cardiologist</option>
	   		<option value="Dentistry">Dentistry</option>
	   		<option value="Pediatrician">Pediatrician</option>
	   		<option value="General Physician">General Physician</option>
	   	</select>
	</div>

	<div class="input-group">
		<button type="submit" name="Search" class="btn">Search</button>
	</div>

	<?php  

	  if (isset($_POST['Search'])) {

	$categorey = mysqli_real_escape_string($mysqli,$_POST['categorey']);
	
	$query2="SELECT * FROM doctor WHERE categorey=('$categorey')";
	$result2=mysqli_query($mysqli,$query2);
	?>
	
		<div class="input-group"> 

			<label>Doctor Name</label>
			<select name="Doctor" class="xd">
	   		<option value="Abigael" >Abigael</option>
	   		<option value="Elizabeth" >Elizabeth</option>
	   	</select>
	 </div>

	<div class="input-group">
		<label>Date</label>
		<input type="Date" name="Date">

	</div>

	<div class="input-group">
		<label>Time</label>
		<input type="Time" name="Time">
	</div>

	 <div class="input-group">
			<button type="submit" name="Book" class="btn">BOOK</button>
			</div>
	 
	 <?php  
}
	    ?>

</form>
<div>
</body>
<div id="footer">
      &copy; All Rights Reserved 2021-
    </div>
    </div>
</html>