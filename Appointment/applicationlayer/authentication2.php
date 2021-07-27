<?php      
    include('connection.php');  
    $Name = $_POST['Name'];  
    $Password = $_POST['Password'];  
      
        //to prevent from mysqli injection  
        if (isset($_POST['Name'])) {
            $Name = stripslashes($_REQUEST['Name']);    // removes backslashes
            $Name = mysqli_real_escape_string($con, $Name);
            $Password = stripslashes($_REQUEST['Password']);
            $Password = mysqli_real_escape_string($con, $Password);
            // Check user is exist in the database
            $query    = "SELECT * FROM `doctor` WHERE Name='$Name'
                         AND Password='" . md5($Password) . "'";
            $result = mysqli_query($con, $query) or die(mysql_error());
            $rows = mysqli_num_rows($result);
            if ($rows == 1) {
                $_SESSION['Name'] = $Name;
                // Redirect to user dashboard page
                header('location:../presentaionlayer/patient/index.php');
            } else {
                echo "<div class='form'>
                      <h3>Incorrect Name/Password.</h3><br/>
                      <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                      </div>";
            }
        } else {}
           
?>  