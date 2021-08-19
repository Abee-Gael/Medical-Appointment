<?php 
  
  $conn = "";
	 
  try {
	  $servername = "localhost:3306";
	  $dbname = "appointment";
	  $username = "root";
	  $password = "";
	 
	  $conn = new PDO(
		  "mysql:host=$servername; dbname=appointment",
		  $username, $password
	  );
		
	 $conn->setAttribute(PDO::ATTR_ERRMODE,
					  PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $e) {
	  echo "Connection failed: " . $e->getMessage();
  }
  function test_input($data) {
      
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
   
if ($_SERVER["REQUEST_METHOD"]== "POST") {
      
    $Name = test_input($_POST["Name"]);
    $Password = test_input($_POST["Password"]);
    $stmt = $conn->prepare("SELECT * FROM doctor");
    $stmt->execute();
    $users = $stmt->fetchAll();
      
    foreach($users as $user) {
          
        if(($user['Name'] == $Name) && 
            ($user['Password'] == $Password)) {
                header("location:../presentaionlayer/doctor/index2.php");
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
            die();
        }
    }
}
 
  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Doctor</title>
	<style>

*{
	margin: 0px;
	padding: 0px;
}
.body{
	font-size: 120%;
	background: #D3D3D3;

}
.header{
	width: 30%;
	margin: 200px auto 0px;
	color: white;
	background: grey;
	text-align: center;
	border: 1px solid #B0C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px ;
	padding: 20px;
}
.form{
	width: 30%;
	margin:0px auto;
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
	height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border:1px solid grey;
}
.btn{
	padding: 10px;
	font-size: 15px;
	color: white;
	background: grey;
	border:none;
	border-radius: 5px;
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
	</style>
</head>
<body class="body">
	<div class="header">
	<h2>Login</h2>
</div>

<form method="post" action="login2.php" class="form">

	<div class="input-group">
		<label>Name</label>
		<input type="text" name="Name" required>

	</div>

	<div class="input-group">
		<label>Password</label>
		<input type="Password" name="Password" required>



	<div class="input-group">
		<button type="submit" name="Login2" class="btn"> Login</button>
	</div>
</form>

</body>
</html>