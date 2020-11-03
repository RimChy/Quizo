<?php
require_once "pdo.php";
require_once "util.php";
?>
<!doctype html>
<html>
	<head>
	    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/all.min.css">
		
			<!-- Custom styles for this template -->
		<link rel="stylesheet" href="css/style.css">
		<title>Quizo</title>
	</head>
	<body>
		<div class="menu">
		
		<nav class="navbar navbar-expand-lg navbar-light">
	  <a class="navbar-brand" href="#">QUIZO</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav ml-auto">
		  <li class="nav-item active">
			<a class="nav-link" href="view.php">Home <span class="sr-only">(current)</span></a>
		  </li>
		  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Quiz
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="cpp.php">C++</a>
          <a class="dropdown-item" href="python.php">Python</a>
          <a class="dropdown-item" href="java.php">Java</a>
		  <a class="dropdown-item" href="html.php">HTML</a>
         
		  </div>
      </li>
		  <li class="nav-item">
			<a class="nav-link" href="scores.php">Scores</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="logout.php">Logout</a>
		  </li>
		</ul>
	  </div>
	</nav>
	
	</div>
	<div class="index my-2" >
		<div class="container">
		<h1 class="text-center wel">Welcome to QUIZO, <?=htmlentities($_SESSION['name'])?></h1>
		<h2 class="basic-quiz text-center" style="color:white;margin-top:3%">Test your basic skills</h2>
		<div class="row mt-5">
			<div class="col-12">
			    <div class="text-center cpp w-50 mx-auto">
				<p><a href="cpp.php">C++</a></p>
				</div>
			</div>
		</div>
		<div class="row mt-2">
			<div class="col-12">
				<div class="cpp  text-center w-50 mx-auto">
				<p><a href="python.php">Python</a></p>	
				</div>
			</div>
		</div>
		<div class="row mt-2">
			<div class="col-12">
				<div class="cpp  text-center w-50 mx-auto">
				<p><a href="java.php">Java</a></p>	
				</div>
			</div>
		</div>
		
		<div class="row mt-2">
			<div class="col-12">
				<div class="cpp  text-center w-50 mx-auto">
				<p><a href="html.php">HTML</a></p>	
				</div>
			</div>
		</div>
		
		</div>
	</div>
	<div class="footer" >
		<footer class="bg-dark">
	    <div class="container">
			<div class="row footer-row">
				<div class="col-sm-12 col-md-4">
			
			    <ul>
				<h4 class="text-white">Go to any page</h4>
			    
				<li><a href="home.php">Home</a></li>
			    <li><a href="scores.php">Scores</a></li>
				<li><a href="logout.php">Logout</a></li>
				
			
			
			
			</div>
			<div class="col-sm-12 col-md-4">
			
				<ul>
			    <h4 class="text-white">Quiz</h4>
				<li><a href="cpp.php">C++</a></li>
				<li><a href="python.php">Python</a></li>
				<li><a href="java.php">Java</a></li>
				<li><a href="html.php">HTML</a></li>
				</ul>
			
			</div>
			<div class="col-sm-12 col-md-4">
			
				<ul>
			    <h4 class="text-white">Contact</h4>
				<li><b>Address:</b>Chittagong,Bangladesh</li>
				<li><b>Email:</b>abc@gmail.com</li>
				<li><b>Phone:</b>+88016526577</li>
				<li><h5>Stay connected</h5><li>
				<li><a href="https://www.facebook.com/"><i class="fab fa-facebook icon"></i></a>
				<a href="https://www.instagram.com/"><i class="fab fa-instagram icon"></i></a>
				<a href="https://www.twitter.com/"><i class="fab fa-twitter icon"></i></a>
				<a><i class="fab fa-linkedin icon"></i></a></li>
				
				</ul>
			
			</div>
			</div>
		</div>
		</footer>
	</div>
	
	
    	
		
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/all.min.js"></script>
		
		
	</body>
<html>