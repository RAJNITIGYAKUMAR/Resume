<!DOCTYPE html>
<html>
<head>
	<title>Sign-in</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		h1,h4{
			margin:15px;
		}
		.login{
			width:100%;
			height: 100vh;
			display: flex;
			flex-direction:column;
			justify-content: center;
			align-items: center;
			background:#defaff;
		}
		.loginform{
			border-radius: 5px;
			text-align: center;
			width:400px;
			background:#d2d6d3;
		}
		.name,.password,.submit{
			padding:5px;
			margin:10px;
		}
		.submit input{
			background-color:#ff351f;
			border-radius:5px;
		}
		input{
			width: 100%;
			padding:10px;
			text-transform:uppercase;
		}
	</style>
</head>
<body>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 <div class="container">
    <a class="navbar-brand" href="../index.php">Resume Builder</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Tools</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="resumesection/start.php">Resume</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link " href="#">CV</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">Cover</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link " href="#">Career</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link " href="../ragitser.php">Ragister</a>
        </li>
      <!--   <li class="nav-item">
          <a class="nav-link " href="../login.php">Sign In</a>
        </li> -->
      </ul>
    </div>
    </div>
</nav>
<div class="login">
	<div>
		<h1>Resume Builder</h1>
		<h4>Sign-in to Your Account</h4>
	</div>
	<div class="loginform">
		<form>
		<div class="name">
			<input type="text" name="email" required="" placeholder="Enter Your Email">
		</div>
		<div class="password">
			<input type="password" name="password" required="" placeholder="Enter Your password">
		</div>
		<div class="submit">
			<input type="submit" value="SIGN IN">
		</div>		
	</form>
		<div class="forgot">
		<a href="#" class="m-3">Forgot Password? </a>
		<p class="m-3">Don't have an account? <a href="#"> Sign Up </a></p>
		</div>
	</div>
		
		
</div>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-3">
        <h5 class="widget-title">Resume Builder<span></span></h5>
        <p>About the Website, little discription will goes here.. </p>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3">
        <h5 class="widget-title">Quick Links<span></span></h5>
            <ul class="thumbnail-widget">
            <li>
            <div class="thumb-content"><a href="#.">Get Started</a></div> 
            </li>
            <li>
            <div class="thumb-content"><a href="#.">Resume</a></div> 
            </li>
            <li>
            <div class="thumb-content"><a href="#.">CV</a></div> 
            </li>
            <li>
            <div class="thumb-content"><a href="#.">Career</a></div> 
            </li>
          </ul>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3">
        <h5 class="widget-title">Get Started<span></span></h5>
        <p>Get access to your full Training and Marketing Suite.</p>
        <a class="btn btn-primary" href="#." target="_blank">Register Now</a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3">
        <h5 class="widget-title">Contact Us<span></span></h5>
        <p><a href="mailto:saundaryraj@gmail.com" title="glorythemes">saundaryraj@gmail.com</a></p>
      </div>
    </div>
    
  </div>
</footer>

<div class="footer-copyright">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <p>Copyright Rajnitigya © 2021. All rights reserved.</p>
      </div>
    </div>
  </div>
</div>
</body>
</html>