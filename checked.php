<?php
require_once "pdo.php";
session_start();
$result=$_SESSION['result'];
$result_progress=($result*100)/15;
$stmt=$pdo->prepare('SELECT * from score where topic=:topic and user_id=:uid');
		$stmt->execute(array(
		 ':topic'=>$_SESSION['topic'],
		 ':uid'=>$_SESSION['user_id']
		));
		$row=$stmt->fetch(PDO::FETCH_ASSOC);
if($result>$row['score']){
	$stmt1=$pdo->prepare('update score set score=:score where topic=:topic and user_id=:uid');
		$stmt1->execute(array(
		':score'=>$result,
		 ':topic'=>$_SESSION['topic'],
		 ':uid'=>$_SESSION['user_id']
		));
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
		  <li class="nav-item dropdown active">
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
		  <li class="nav-item ">
			<a class="nav-link" href="logout.php">Logout</a>
		  </li>
		</ul>
	  </div>
	</nav>
	
	</div>
	<div class="container">
     <div class="row">
	 <div class="col-md-12">
	<div class="text-center text-white">
	   		
	   <?php 
	   if($_SESSION['result']>=10){
		   echo('<h1>Excellent job '.htmlentities($_SESSION['name']).'</h1>');
		   
	   }
	   else if($_SESSION['result']>=8){
		    echo('<h1>Good job '.htmlentities($_SESSION['name']).',but you need to develop your skill more</h1>');
		  
	   }
	   else{
		   echo('<h1>Keep trying '.htmlentities($_SESSION['name']).'</h1>');
		  
	   }
	   
	   ?>
	   <div class="percent mx-auto mt-5"style="width:80px;height:80px;">

  <p style="display:none;"><?=htmlentities($result_progress)?></p>

</div>

	   <h2>Your score is: <span class="text-danger"><?php echo(htmlentities($_SESSION['result']));?></span>/<span class="text-primary">15</span> in <?=htmlentities($_SESSION['topic'])?> quiz</h2>
	   </div>
	   </div>
	   </div>
	   </div>
	   
	   
	  <script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.3.0/raphael.min.js"></script>

	<script src="js/jQuery.circleProgressBar.min.js"></script>

	<script src="js\custom.js"></script>
	
	</body>
</html>