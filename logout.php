<?php
require_once "pdo.php";
session_start();
if(isset($_POST['confirm'])){
	unset($_SESSION['name']);
unset($_SESSION['user_id']);
session_destroy();
header('Location:index.php');
return;
}
if(isset($_POST['cancel'])){
	header('Location:view.php');
	return ;
}



?>
<!doctype html>
<html>
	<head>
	    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		
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
		  <li class="nav-item">
			<a class="nav-link" href="view.php">Home <span class="sr-only">(current)</span></a>
		  </li>
		  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Quiz
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="cpp.php">C++</a>
          <a class="dropdown-item" href="#">Java</a>
          </div>
      </li>
		  <li class="nav-item">
			<a class="nav-link" href="scores.php">Scores</a>
		  </li>
		  <li class="nav-item active">
			<a class="nav-link" href="logout.php">Logout</a>
		  </li>
		</ul>
	  </div>
	</nav>
	
	</div>
		<div class="logout-menu mt-5">
			<div class="container">
				<h2 class="text-white">Are you sure you want to logout?</h2>
				<div class="logput-inp">
				<form method="post">
				    <input type="submit"  value="Confirm" name="confirm" id="confirm"/>
					<input type="submit" value="Cancel" name="cancel" id="cancel"/>
					
				</form>
				</div>
			</div>
		</div>
	
			
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
		
	</body>
<html>
