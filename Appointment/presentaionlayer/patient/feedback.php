<?php include ('../../datalayer/server.php'); ?>
<!DOCTYPE html>
<html>
    <head>
     <title> Feedback Form </title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <style>
            body {margin: 0;}
      .banner{
            height: 100vh;
            width: 100%;
            background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(background.jpg);
            background-size: cover;
            background-position: center;
        } 
        body {font-family: Times New Roman;}

.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
  font-family: Times New Roman;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #000;
}

.active {
  background-color: #04AA6D;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
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
	font-size: 1.2vw;

}
a:hover{
	color: #F0c330;
	transition: 0.5s;
}
.modal-dialog {
    height: 50%;
    width: 50%;
    margin: auto
}

.modal-header {
    color: white;
    background-color: #007bff
}

textarea {
    border: none;
    box-shadow: none !important;
    -webkit-appearance: none;
    outline: 0px !important
}

.openmodal {
    margin-left: 35%;
    width: 25%;
    margin-top: 25%
}

.icon1 {
    color: #007bff
}

a {
    margin: auto
}

input {
    color: #007bff
}
        </style>
    </head>
    <body>
        <nav>
            <div class="navbar">
				<li><a href=" index.php">Home</a></li>
			    <li><a href=" book.php">Book Appointment</a></li>
			    <li><a href="view.php">View Appointment</a></li>
			    <li><a href="cancel.php">Cancel Booking</a></li>
			    <li><a href="services.php">Services</a></li>
			    <li><a href="about us.php">About Us</a></li>
			    <li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>
            </div>
        </nav>
        <button type="button" class="btn btn-info btn-lg openmodal" data-toggle="modal" data-target="#myModal">Open Modal</button>
<!--Division for Modal-->
<div id="myModal" class="modal fade" role="dialog">
    <!--Modal-->
    <div class="modal-dialog">
        <!--Modal Content-->
        <div class="modal-content">
            <!-- Modal Header-->
            <div class="modal-header">
                <h3>Feedback Request</h3>
                <!--Close/Cross Button--> <button type="button" class="close" data-dismiss="modal" style="color: white;">&times;</button>
            </div> <!-- Modal Body-->
            <div class="modal-body text-center"> <i class="far fa-file-alt fa-4x mb-3 animated rotateIn icon1"></i>
                <h3>Your opinion matters</h3>
                <h5>Help us improve our product? <strong>Give us your feedback.</strong></h5>
                <hr>
                <h6>Your Rating</h6>
            </div> <!-- Radio Buttons for Rating-->
            <div class="form-check mb-4"> <input name="feedback" type="radio"> <label class="ml-3">Very good</label> </div>
            <div class="form-check mb-4"> <input name="feedback" type="radio"> <label class="ml-3">Good</label> </div>
            <div class="form-check mb-4"> <input name="feedback" type="radio"> <label class="ml-3">Mediocre</label> </div>
            <div class="form-check mb-4"> <input name="feedback" type="radio"> <label class="ml-3">Bad</label> </div>
            <div class="form-check mb-4"> <input name="feedback" type="radio"> <label class="ml-3">Very Bad</label> </div>
            <!--Text Message-->
            <div class="text-center">
                <h4>What could we improve?</h4>
            </div> <textarea type="textarea" placeholder="Your Message" rows="3"></textarea> <!-- Modal Footer-->
            <div class="modal-footer"> <a href="" class="btn btn-primary">Send <i class="fa fa-paper-plane"></i> </a> <a href="" class="btn btn-outline-primary" data-dismiss="modal">Cancel</a> </div>
        </div>
    </div>
</div>
    </body>
</html>    
   