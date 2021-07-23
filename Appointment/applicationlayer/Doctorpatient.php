<!DOCTYPE html>
<html>
<head>
	<title>Doctor Patient</title>
	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="id=edge">
    <style>
          body,html{
	margin: 0;
	padding: 0;

}
.banner{
	height: 100vh;
	width: 100%;
	background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(background.jpg);
	background-size: cover;
	background-position: center;
} 
        html,body{
	margin-top: 0;
	padding: 0;
	width: 100%;
}
body{
	height: 100vh;
	background:  #D3D3D3;

}

.button1{
	position: absolute;
	top: 65%;
	left: 50%;
	transform: translate(-50%,-50%);
	
}
.button1{
	background: none;
	color: white;
	width: 240px;
	height: 80px;
	border:3px solid white;
	font-size: 25px;
    font-family: Times New Roman;
	border-radius: 4px;
	transition: .6s;
	overflow: hidden;

}
.button1:focus{
	outline: none;
}

.button1:before{
    content: '';
    display: block;
    position: absolute;
    background: grey;
    width: 60px;
    height: 100%;
    left: 0;
    top: 0;
    opacity: .5;
    filter: blur(30px);
    transform: translateX(-130px) skewX(-15deg);
}

.button1:after{
    content: '';
    display: block;
    position: absolute;
    background: grey;
    width: 30px;
    height: 100%;
    left: 30px;
    top: 0;
    opacity: 0;
    filter: blur(30px);
    transform: translateX(-100px) scaleX(-15deg);
}

.button1:hover:before {
   transform: translateX(300px) skewX(-15deg);
    opacity: .6;
    transition: .7s;
}

.button1:hover:after {
   transform: translateX(300px) skewX(-15deg);
    opacity: 1;
    transition: .7s;
}

.button1:hover {
  background: grey;
  cursor: pointer;
}


.button2{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
}
.button2{
	background: none;
	color: white;
	width: 240px;
	height: 80px;
	border:3px solid white;
	font-size: 25px;
    font-family: Times New Roman;
	border-radius: 4px;
	transition: .6s;
	overflow: hidden;

}
.button2:focus{
	outline: none;
}

.button2:before{
    content: '';
    display: block;
    position: absolute;
    background: grey;
    width: 60px;
    height: 100%;
    left: 0;
    top: 0;
    opacity: .5;
    filter: blur(30px);
    transform: translateX(-130px) skewX(-15deg);
}

.button2:after{
    content: '';
    display: block;
    position: absolute;
    background: grey;
    width: 30px;
    height: 100%;
    left: 30px;
    top: 0;
    opacity: 0;
    filter: blur(30px);
    transform: translateX(-100px) scaleX(-15deg);
}

.button2:hover:before {
   transform: translateX(300px) skewX(-15deg);
    opacity: .6;
    transition: .7s;
}

.button2:hover:after {
   transform: translateX(300px) skewX(-15deg);
    opacity: 1;
    transition: .7s;
}

.button2:hover {
  background: grey;
  cursor: pointer;
}

.button3{
	position: absolute;
	top: 35%;
	left: 50%;
	transform: translate(-50%,-50%);
}
.button3{
	background: none;
	color: white;
	width: 240px;
	height: 80px;
	border:3px solid white;
	font-size: 25px;
    font-family: Times New Roman;
	border-radius: 4px;
	transition: .6s;
	overflow: hidden;

}
.button3:focus{
	outline: none;
}

.button3:before{
    content: '';
    display: block;
    position: absolute;
    background: grey;
    width: 60px;
    height: 100%;
    left: 0;
    top: 0;
    opacity: .5;
    filter: blur(30px);
    transform: translateX(-130px) skewX(-15deg);
}

.button3:after{
    content: '';
    display: block;
    position: absolute;
    background: grey;
    width: 30px;
    height: 100%;
    left: 30px;
    top: 0;
    opacity: 0;
    filter: blur(30px);
    transform: translateX(-100px) scaleX(-15deg);
}

.button3:hover:before {
   transform: translateX(300px) skewX(-15deg);
    opacity: .6;
    transition: .7s;
}

.button3:hover:after {
   transform: translateX(300px) skewX(-15deg);
    opacity: 1;
    transition: .7s;
}

.button3:hover {
  background:grey;
  cursor: pointer;
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

<body>
    <div class="banner">
	<div class="wrapper">
		<div class="btn" > <a href="login3.php">

<button type="button" class="button1" > Admin</button>

</div>

</div>


	<div class="wrapper" style="text-decoration: none;">
	<div class="btn" > <a href="login.php"  >
<button type="button" class="button2">Patient</button>
</div>

</div>


	<div class="wrapper" style="text-decoration: none;">
	<div class="btn" > <a href="login2.php"  >
<button type="button" class="button3">Doctor</button>
        </a>
</div>

</div>
<div id="footer">
      &copy; All Rights Reserved 2021-
    </div>
</div>
</body>
</html>