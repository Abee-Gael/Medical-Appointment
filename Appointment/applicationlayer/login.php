<?php include('../datalayer/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<style>
		*{
	margin: 0px;
	padding: 0px;


}
body{
	font-size: 120%;
	background: #D3D3D3;
}
.header{
	width: 30%;
	margin: 200px auto 0px;
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
border: 1px solid #B0C4DE;
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
<body>
	<div class="header">
	<h2>Login</h2>
</div>

<form method="post" action="login.php">

	<?php include ('../datalayer/errors.php')?>

	<div class="input-group">
		<label>User ID</label>
		<input type="text" name="UserID">

	</div>

	<div class="input-group">
		<label>Password</label>
		<input type="Password" name="password">

	<div class="input-group">
		<button type="submit" name="Login" class="btn"> Login</button>
	</div>

	<p>
		Not a member? <a href="sign up.php">Sign Up </a>
	</p>
	
</form>

</body>
</html>