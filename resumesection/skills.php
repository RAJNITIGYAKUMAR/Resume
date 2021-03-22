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
	</style>
</head>
<body>
	<?php
	include('../navbar.php');
	?>
	<div class="container">
		<h4>Skills</h4>
		<div>
			<form>
				<div>
					<label>Name</label>
					<input type="text" name="name">
					<label>Email</label>
					<input type="email" name="email">
					<label>Mobile</label>
					<input type="phone" name="phone">
					<label>Address</label>
					<input type="text" name="address">

				</div>
			</form>
		</div>
		<a  class="btn btn-primary" href="#" role="button">Next</a>
	</div>
<?php
include('../footer.php');
?>
</body>
</html>