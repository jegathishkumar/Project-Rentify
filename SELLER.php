<DOCTYPE html>
<head>
    <title>Sign up</title>
</head>
<body>
    <div class="container">
       <form action="">
           <h1>Hi, Seller..!</h1>
		<div class="input-box">
			<input type="text" placeholder="Seller Name" required>
		</div>
		<div class="input-box">
			<input type="text" placeholder="Area or place" required>
		</div>

		<div class="input-box">
			<input type="number" placeholder="No.of bedrooms" required>
		</div>

		<div class="input-box">
			<input type="number" placeholder="Amount" required>
		</div>

		<div class="input-box">
			<input type="number" placeholder="Contact no." required>
		</div>
		<a href="Successful.html">
		<button type="submit" class="btn" >
		Add</button></a>
	</form>
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
      </style>
    </div>
</body>
</html>