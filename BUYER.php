<DOCTYPE html>
<head>
    <title>Buyer</title>
</head>
<body>
    <div class="container">
       		<div class="flex-box">
			<img src="img1.jpg" >
			<h2>$5000</h2>
			<div class="content">
				<p>Area:CBE</p>
				<p>No.of bedrooms:2</p>
				<p>Contact:01234</p>
				<p>Nearby college:YES</p>
				<p>Nearby hospital:NO</p>
				<a href="SUCCESSFUL.php" class="btn">Interested</a>
			</div>
		</div>

		<div class="flex-box">
			<img src="img2.jpg" >
			<h2>$4000</h2>
			<div class="content">
				<p>Area:Tiruppur</p>
				<p>No.of bedrooms:1</p>
				<p>Contact:54321</p>
				<p>Nearby college:NO</p>
				<p>Nearby hospital:YES</p>
				<a href="SUCCESSFUL.php" class="btn">Interested</a>
			</div>

		</div>
		<div class="flex-box">
			<img src="img3.jpg" >
			<h2>$3500</h2>
			<div class="content">
				<p>Area:Salem</p>
				<p>No.of bedrooms:1</p>
				<p>Contact:54866</p>
				<p>Nearby college:YES</p>
				<p>Nearby hospital:YES</p>
				<a href="SUCCESSFUL.php" class="btn">Interested</a>
			</div>

		</div>
	</form>

    </div>

	<style type="text/css">
		*{
	margin:0;
	padding:0;
	font-family:sans-serif;
	box-sizing:border-box;
	}

	body{
	background:rgb(34,193,195);
	background: linear-gradient(0deg, rgba(34,193,195,1) 0%,rgba(121,32,153,1)86%);
	background-attachment:fixed;


	}
	.container{
	margin-top:100px;	
	display:flex;
	flex-wrap:wrap;
	justify-content:center;

	}
	.flex-box{
	width:325px;
	background:linear-gradient(cyan,pink);
	border-radius:15px;
	overflow:hidden;
	box-shadow: 0px 2px 4px rgba(0,0,0,0.2);
	margin:20px;
	transition:1s;
	}
	.flex-box:hover{
	cursor:pointer;
	transform:scale(1.1);
	}
	.flex-box img{
	width:100%;
	height:250px;
	}
	.flex-box h2{
	padding:40px 0 10px 110px ;
	font-size:25px;
	margin-bottom:8px;
	}
	.content{
	padding:16px;
	}
	.content p{
	color:#666;
	font-size:15px;
	line-height:1.3;
	}
	.content .btn{
	background:white;
	padding:10px 15px;
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
	margin:10px 80px;
	display: inline-block;
	}

	</style>
</body>
</html>