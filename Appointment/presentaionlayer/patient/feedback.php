<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "appointment";
try {
  if (isset($_POST['Name']) || isset($_POST['Email']) || isset($_POST['Message'])) {
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
	  $Message = $_POST['Message'];
  }
    if(!isset($Name)){
      $Name = 'Name';
      }
      if(!isset($Email)){
      $Email = 'Email';
      }
      if(!isset($Message)){
          $Message = 'Message';
          }
        
 
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO feedback (Name, Email, Message)
    VALUES ('$Name', '$Email','$Message')";
    $conn->exec($sql);
    echo "";
    }
catch(PDOException $e)
    {

    	echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
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
			<li><a href=" book.php">Book Appointment</a></li>
			<li><a href="view.php">View Appointment</a></li>
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
    <input type="text" id="" name="Name" required placeholder="Your name..">

    <label for="Email">Email</label>
    <input type="text" id="" name="Email" required placeholder="Enter a valid email address">

    <label for="Message">Message</label>
    <textarea type="text" name="Message" required placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
<div id="footer">
      &copy; Afyabora All Rights Reserved 2021-
    </div>
</body>
</html>