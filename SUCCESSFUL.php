<DOCTYPE html>
<head>
    <title>Successful</title>
</head>
<body>
    <div class="container">
       <form action="">
           <h1>Successfully Done!</h1>
	   <a href="BUYorSELL.php" class="btn">Back to Home</a>
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
	.container .btn{
	background:white;
	padding:15px 20px;
	border:none;
	outline:none;
	border-radius:16px;
	box-shadow:0 0 10px rgba(0,0,0,.1);
	cursor:pointer;
	font-size:16px;
	color:black;
	text-align:center;
	text-decoration:none;
	font-weight:600;
	margin:10px 140px;
	display: inline-block;
	transition:1s;
	}
	.container .btn:hover{
	transform:scale(1.1);
	}

  </style>
</body>
</html>