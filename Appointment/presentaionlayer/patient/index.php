<!DOCTYPE html>
<html>
<head>
        <title> Medical Appointment</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
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

        .content{
            width: 100%;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            text-align: center;
            color: white;
        }
        .content h1{
            font-size: 70px;
            margin-top: 80px;
        }
        .content p{
            margin: 20px auto;
            font-size: 20px;
            line-height: 25px;
            font-family: Times New Roman;
        }
        button {
            width: 200px;
            padding: 15px 0;
            text-align:center;
            margin: 20px 10px;
            border-radius: 25px;
            font-weight: bold;
            border: 2px solid #009688;
            background: transparent;
            color: white;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            font-family: Times New Roman;

        }
        span{
            background: #009688;
            height: 100;
            width: 100;
            border-radius: 25px;
            position: absolute;
            left: 0%;
            bottom: 0%;
            z-index: -1;
            transition: 0.5s;
        }
        button:hover span{
            width: 100%;

        }
        button:hover {
            border: none;
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
        <div class="banner" >
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
               <div class="content">
                   <h1>WELCOME TO AFYABORA ONLINE MEDICAL APPOINTMENTS</h1>
                   <p>Get to make appointments at the comfort of wherever you are to see a Medical Officers at your convinient time and date.</p>
                   <div>
                       <a href="book.php"><button type="button"><span></span>Appointment</button></button>
                   </div>
               </div>
        </div>
		<div id="footer">
      &copy; Afyabora All Rights Reserved 2021-
    </div>
    </div>
    </body>	
</html>