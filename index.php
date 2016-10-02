    <?php
function login(){
	include("dbconfig.php");   //connection string
		session_start();	
		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			// username and password sent from Form
			$myusername=mysqli_real_escape_string($conn,$_POST['username']); 
			$mypassword=mysqli_real_escape_string($conn,$_POST['password']); 

			$sql="SELECT `type` FROM `users` WHERE `username`='$myusername' and `password`='$mypassword'";
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			$count=mysqli_num_rows($result);
			$type=$row['type'];
	
			// If result matched $myusername and $mypassword, table row must be 1 row
			if($count==1 AND $type=="Dean"){
			session_start("myusername");
			$_SESSION['login_user']=$myusername;
			header("location: welcomedean.php");
			}
			elseif($count==1 AND $type=="Student"){
			session_start("myusername");
			$_SESSION['login_user']=$myusername;
			header("location: welcomestudent.php");
			}
			else {
			echo "<script type='text/javascript'> alert('Invalid Username or Password'); </script>";
			}
			} 
} 

function register(){
	Include("dbconfig.php");
	if($_SERVER["REQUEST_METHOD"] == "POST")
		{
		$sql="insert into users(`Username`,`Password`,`Type`,`Email`,`First Name`,`Last Name`) values('".$_REQUEST['username']."', '".$_REQUEST['pass1']."', 'Student', '".$_REQUEST['email']."', '".$_REQUEST['firstname']."', '".$_REQUEST['lastname']."')";
		$result=mysqli_query($conn, $sql);
		If($result)
		{
		echo "<script type='text/javascript'> alert('Congratualtions, You are now registered!'); </script>";
		}
		Else
		{
		echo "<script type='text/javascript'> alert('Registration Failed, Server Problem'); </script>";
		}
		}
	} 
		
	
	
	
	
	
	
	if ( isset( $_POST['login'] ) ) {
		login();
	}
	elseif ( isset( $_POST['register'] ) ) {
		register();
	}

	
	
?>
	<html>
    <head>
	
        <title>School Management System Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Scripts -->
        <link rel="stylesheet" href="assets/css/w3.css">
<script>
//password validation using javascript for plebs
function CheckPassword()   
{   
//Password must be between 6 to 20 characters which contain at least one numeric digit, one uppercase and one lowercase letter...
var regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;  
//verify password
if(document.register.pass1.value != document.register.pass2.value){
alert('Oops! Password did not match! Try again. ')  
}

else if(document.register.pass1.value.match(regex))   
{   
alert('Correct, try another...')  
return true;  
}  
else  
{   
alert('Password must be between 6 to 20 characters which contain at least one numeric digit, one uppercase and one lowercase letter...!')  
return false;  
} 
}
</script>
		
		
		
    </head>

    <body>

        <!-- Background Image -->
        <body style="background-image:url(assets/images/b1.jpg);background-size:cover;">

            <!--header-->
            <header class="w3-container w3-white-opacity">
                <h1 class="w3-center "><br>
                    <font color="white" face="Century Gothic" size="8">School Management System</font>
					<br><br>
                </h1>
            </header>

            <!--Register Modal-->
            <div id="id01" class="w3-modal" style="display: none;">
                <div class="w3-modal-content w3-card-8 w3-animate-top">
                    <header class="w3-container w3-theme w3-red">
                        <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn">x</span>
                        <h3>Registration Form</h3>
                    </header>
					
                    <form name="register" class="w3-container w3-card-4" method="POST" action="" onsubmit="return checkForm(this);">
					<fieldset>
					<legend>Please fill-up the following:</legend>
					<input type='hidden' name='register' value='<?php echo "$register";?>'/>
                        <div class="w3-group">
                            <input class="w3-input" name="firstname" type="text" required />
                            <label class="w3-label w3-validate">First Name</label>
                        </div>
                        <div class="w3-group">
                            <input class="w3-input" name="lastname" type="text" required/>
                            <label class="w3-label w3-validate">Last Name</label>
                        </div>
						 <div class="w3-group">
                            <input class="w3-input" name="email" type="email" required/>
                            <label class="w3-label w3-validate">Email</label>
                        </div>
                        <div class="w3-group">
                            <input class="w3-input" title="Username must atleast contain 4 characters" name="username" type="text" required  pattern=".{4,}"/>
                            <label class="w3-label w3-validate">Username</label>
                        </div>
                        <div class="w3-group">
                            <input class="w3-input" title="Password must contain at least 6 characters, including UPPER/lowercase and numbers" name="pass1" type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" onchange="
							  this.setCustomValidity(this.validity.patternMismatch ? this.title : '');
							  if(this.checkValidity()) form.pass2.pattern = this.value;
							">
                            <label class="w3-label w3-validate">Password</label>
                        </div>
						<div class="w3-group">
                            <input class="w3-input" title="Please enter the same Password as above" name="pass2" type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" onchange="
							  this.setCustomValidity(this.validity.patternMismatch ? this.title : '');
							">
                            <label class="w3-label w3-validate">Verify Password</label>
                        </div>
						</fieldset>
                        <div class="w3-group">
                            <button type="submit" class="w3-btn w3-yellow" style="width:200px">Register</button>
                        </div>
					
                    </form>
                </div>
            </div>

            <!--login form header-->
           
            <div class="w3-row">
		    <div class="w3-col w3-container l4">
                </div>  
                <div class="w3-col w3-container l4 w3-green w3-col w3-center w3-card-4">
                    <h3>
                        <font color="white">Login</font>
                    </h3>
                </div>
            </div>

            <!--login form student-->
            <div class="w3-row">
                <form class="w3-col w3-container l4 w3-white">
                </form>
                <div class="w3-col w3-container l4 w3-dark-grey w3-card-2">
                    <form method="POST" action="">
					<input type='hidden' name='login' value='<?php echo "$login";?>'/> 
                        <div class="w3-group">
                            <input class="w3-input w3-text-black" name="username" placeholder="Enter Username" type="text" required/>
                            <label class="w3-label w3-text-white w3-validate">Username</label>
                        </div>
                        <div class="w3-group">
                            <input class="w3-input w3-text-black" name="password" placeholder="Enter Password" type="password" required/>
                            <label class="w3-label w3-text-white w3-validate">Password</label>
                        </div>

                        <div class="w3-row">
                            <div class="w3-half w3-center">
                                <input type="submit" class="w3-btn w3-green" style="width:150px" name="submit" value="Submit" onclick="checkpas"> </input>
                            </div>
							
                    </form>
                    <div class="w3-half w3-center">
                        <input type="button" value="Register" class="w3-btn w3-green" onclick="document.getElementById('id01').style.display='block'" style="width:150px"></button>
                    </div>
					</div>
					
                   
                </div>
            </div>
            <br><br><br>
            
            <!--footer-->
            <footer class="w3-container w3-white-opacity">
                <p>
                    <font color="white" face="verdana">Thesis B System 2016-2017. All rights reserved.</font</p>

            </footer>
        </body>
    </html>