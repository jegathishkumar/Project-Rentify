<?php

   $conn=mysqli_connect("localhost","root","","jega");
   if(!$conn){
	 die("Connection Failed" . mysqli_connect_error());
   }
   if(isset($_POST['signup'])){
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$phone=$_POST['phone'];
	$sql_query="INSERT INTO usersample (firstname,lastname,email,password,phone) 	values 	('$firstname','$lastname','$email','$password',$phone)";
	if(mysqli_query($conn,$sql_query)){
	}
	else{
	}	
	mysqli_close($conn);
   }
?>



<DOCTYPE html>
<head>
    <title>Login</title>
</head>
<body>
    <div class="container">
       <form action="BUYorSELL.php" method="POST" >
           <h1>Login</h1>
		<div class="input-box">
			<input type="email" name="email" placeholder="Email" required>
		</div>

		<div class="input-box">
			<input type="password" name="password" placeholder="password" required>
		</div>

		<div class="remember-forgot">
			<lable><input type="checkbox"> Remember Me </lable>
			<a href="#">Forgot password?</a>
		</div>

		<button type="submit" name="submit" class="btn">Login</button>

		<div class="register-link">
			<p>Don't have an account?
			<a href="SIGNUP.php">Sign Up</a></p>
		</div>
	</form>
    </div>
        <style type="text/css">
	body{
	display:flex;
	justify-content:center;
	align-items:center;
	min-height:100vh;
	background:rgb(34,193,195);
	background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(121,32,153,1)86%);
	background-attachment:fixed;


	}
	.container{
	width: 420px;
	background:transparent;
	border: 2px solid rgba(255,255,255,.2);
	backdrop-filter:blur(20px);
	box-shodow:0 0 10px rgba(0,0,0,.2);
	color: white;
	border-radius:10px;
	padding:30px 40px;
	}
	.container h1{
	font-size: 36px;
	text-align:center;
	color:white;
	}
	.container .input-box{
	width:100%;
	height:50px;
	margin:30px 0;
	}
	.input-box input{
	height:100%;
	width:100%;
	background:transparent;
	border:none;
	outline:none;
	border:2px solid rgba(255, 255, 255, .2);
	border-radius: 40px;
	font-size:16px;
	color:white;
	padding: 20px 45px 20px 20px;	
	}
	.input-box input::placeholder{
	color:white;
	}

	.container .remember-forgot{
	display:flex;
	justify-content: space-between;
	font-size:14.5px;
	margin: -15px 0 15px;

	}
	.remember-forgot lable input{
	accent-color:white;
	margin-right:3px;	
	}
	.remember-forgot a{
	color:white;
	text-decoration:none;
	}
	.remember-forgot a:hover{
	text-decoration: underline;
	}
	.container .btn{
	height:45px;
	width:100%;
	background:white;
	border:none;
	outline:none;
	border-radius:40px;
	box-shadow:0 0 10px rgba(0,0,0,.1);
	cursor:pointer;
	font-size:16px;
	color:black;
	font-weight:600;
	
	}
	.register-link {
	font-size:14.5px;
	text-align:center;
	margin: 20px 0 15px;
	}
	.register-link p a{
	color:white;
	text-decoration:none;
	font-weight:600;
	}
	.register-link a:hover{
	text-decoration: underline;
	}
  </style>
</body>
</html>