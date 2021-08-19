<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>About us</title>
        <style>
            .banner{
	height: 100vh;
	width: 100%;
	background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(latex.jpg);
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
            *{
                margin: 0;
                padding: 0;
                font-family: sans-serif;
                box-sizing: border-box;
            }
            .about-section{
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: white;
            }
            .about-section{
                background: url(doctor.jpg);
                background-size: 55%;
                background-color:white;
                overflow: hidden;
                padding: 100px 0;
            }
            .inner-container{
                width: 55%;
                float: right;
                background-color: #C8C8C8;
                padding: 150px;
            }
            .inner-container h1{
                margin-bottom: 30px;
                font-size: 30px;
                font-weight: 800;
                font-family: Times New Roman;
            }
            .text{
                font-size: 20px;
                font-family: Times New Roman;
                color: rgb(21, 21, 22);
                line-height: 30px;
                text-align: justify;
                margin-bottom: 40px;
            }
            @media screen and (max-width: 1200px){
                .inner-container{
                    padding: 80px;
                }
            }
            @media screen and (max-width: 1000px){
                .about-section{
                    background-size: 100%;
                    padding: 100px 4px;
                }
                .inner-container{
                    width: 100%;
                }
            }
            @media screen and (max-width: 600px){
                .about-section{
                    padding: 0;
                }
                .inner-container{
                    padding: 60px;

                }
            }
            q{
                color: white;
                font-style: italic;
                font-family: Serif;
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
        <div class = "banner">
    <header>
	<h2>Afya Bora</h2>
		<nav>
		<ul> 
      <li><a href=" index.php">Home</a></li>
			<li><a href=" book.php">Book Appointment</a></li>
			<li><a href="view.php">View Appointment</a></li>
			<li><a href="cancel.php">Cancel Booking</a></li>
			<li><a href="services.php">Services</a></li>
			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>
		</ul>
	</nav>
</header>
        <div class="about-section">
            <div class="inner-container">
                <h1>About Us</h1>
                <p class="text">
                    Our online Medical Appointment aims to ease the manual medical appointment process by digitizing it. Our Medical Officers are highly skilled. Here you get to make an appointment the Medical officer you would love to see at the time and day of your choice.
                    <br><q> We should be concerned not only about the health of individual patients, but also the health of our entire society. - Ben Curson </q>
                </p>
            </div>
        </div>
        <div id="footer">
      &copy; Afyabora All Rights Reserved 2021-
    </div>
    </div>
    </body>
</html>