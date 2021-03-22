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
		.personalForm{
			margin: 10px;
		}
		.template{
			
		}
		.footer{
			display: flex;
			justify-content: space-between;
		}
	</style>
</head>
<body>
	<?php
include('../navbar.php');
?>
	<div class="text-center">
		<h4>Tell us about your education</h4>
		<p>Include every school, even if you're still there or didn't graduate.</p>
	</div>
		
		<div class="container">
		<div class="row">
			<div class="personalForm col-md-7">
				<form>
					<div class="row">
						<div class="col-5">
							<label for="name">School Name</label>
							<input class="form-control" type="text" name="SchoolName">
						</div>
						<div class="col-5">
							<label>City</label>
							<input class="form-control" type="text" name="location">
						</div>
					</div>
					<div class="row">
						<div class="col-5">
							<label>State</label>
							<input class="form-control" type="phone" name="phone">
						</div>
						<div class="col-5">
							<label>Degree</label>
							<input class="form-control" type="phone" name="phone">
						</div>
					</div>
					<div class="row">
						<div class="col-10">
							<label>Field Of Study</label>
							<input class="form-control" type="phone" name="phone">
						</div>
					</div>
					<div class="row">
						<div class="col-5">
							<label>Graduation Start</label>
							<input class="form-control" type="phone" name="phone">
						</div>
						<div class="col-5">
							<label>Gradutaion End</label>
							<input class="form-control" type="phone" name="phone">
						</div>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  <label class="form-check-label" for="defaultCheck1">
					    I Currently Attend Here
					  </label>
					</div>
																
				</form>
			</div>
			<div class="template col-md-4">
				<img src="../image/banner.png" style="width:100% ;height:500px" >
			</div>
		</div>
		</div>
		<div class="container footer">
			<div>
				<a class="btn btn-primary" href="../personal.php" role="button">BACK</a>
			</div>
			<div>
				<a class="btn btn-primary" href="work.php" role="button">NEXT</a>
			</div>
			
		</div>
		
	
<?php
include('../footer.php');
?>
</body>
</html>