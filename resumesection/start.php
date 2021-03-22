<!DOCTYPE html>
<html>
<head>
	<title>Resume</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <link rel="preconnect" href="https://fonts.gstatic.com">
 <link rel="stylesheet" type="text/css" href="../css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Lato&family=Shippori+Mincho:wght@600;800&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			text-decoration:none;
			font-family: 'Shippori Mincho', serif;
		}
		.resume{
			display: flex;
			justify-content:space-between;
			align-items: center;
		}
		.items1{
			
		}
		.items2{
			
		}
		img{
			width:100%;
			margin: 10px;
		}
		 #startcreate{
			padding: 10px;
			text-align: center;
			display:block;
			border-radius:5px;
			background:#0bd48d;
		}
		ol li{
			margin: 10px;
			padding: 10px;
		}
	</style>
</head>
<body>
		<?php
include('../navbar.php');
?>
	<div class="container">
		<div class="resume row">
	<div class="items1 col-lg-5">
		<h1>Just Three Simple Steps</h1>
		<ol>
			<li><h5>Select a template from our library of professional designs</h5></li>
			<li ><h5>Build your resume with our industry-specific bullet points</h5></li>
			<li><h5>Download your resume, print it out and get it ready to send!</h5></li>
		</ol>
	</div>
	<div class="items2 col-lg-5">
		<img src="../image/banner.png">
		<a href="resume.php" id="startcreate">Create My Resume</a>
		<p>By clicking Create My Resume, you agree to our <a href="#"> Terms of Use </a>and <a href="#"> Privacy Policy </a>.</p>
	</div>
</div>
	</div>
	<?php
include('../footer.php');
?>
</body>
</html>