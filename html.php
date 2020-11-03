<?php
require_once "pdo.php";
session_start();

if(isset($_POST['submit'])){
	$selected=$_POST['quizcheck'];
	$result=0;
	for($i=1;$i<16;$i++){
		        echo('<div class="card-header text-dark">');
		 
				$stmt=$pdo->prepare('Select * from question_html where id=:qid');
				$stmt->execute(array(
				':qid'=>$i
				));
				while($rows=$stmt->fetch(PDO::FETCH_ASSOC)){
					if($rows['ans_id']==$selected[$i]) {
						$result=$result+1;
					}
						
						
				}
}


$_SESSION['result']=$result;
$_SESSION['topic']="HTML";
header('Location:checked.php');
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
		  <li class="nav-item">
			<a class="nav-link" href="logout.php">Logout</a>
		  </li>
		</ul>
	  </div>
	</nav>
	
	</div>
		<div class="cpp-quiz text-center text-white">
		<div class="container">
		<h1>Good Luck <?=htmlentities($_SESSION['name'])?> for your C++ quiz</h1>
		<h3>15 Questions</h3>
		<div class="card border-primary mb-3 mx-auto text-left" style="width:50%;">;
		 
		 <?php
		       for($i=1;$i<16;$i++){
		        echo('<div class="card-header text-dark">');
		 
				$stmt=$pdo->prepare('Select * from question_html where id=:qid');
				$stmt->execute(array(
				':qid'=>$i
				));
				while($rows=$stmt->fetch(PDO::FETCH_ASSOC)){
				
				echo(htmlentities($i).".".htmlentities($rows['question']));
				echo('</div>');
				
			$stmt1=$pdo->prepare('Select * from ans_cpp where question_id=:qid');
				$stmt1->execute(array(
				':qid'=>$i
				));
				echo('<form  method="post">');
				while($rows1=$stmt1->fetch(PDO::FETCH_ASSOC)){
				
					echo('<div class="card-body text-dark">');
					
		
					
					echo ('<input type="radio" name="quizcheck['.htmlentities($rows1['question_id']).']" value="'.htmlentities($rows1['ans_id']).'"/>');
					echo(htmlentities($rows1['ans']));
					
					echo('</div >');
					
					
					
				}
				}
			   }
				
			   
			    
               	 
			?>
			</div>
			</div>
			
			<input type="submit" name="submit" class="btn btn-danger m-auto d-block " value="Submit"/>
			</form>
			<footer class="bg-dark text-white py-2 mt-3">Reference:Some questions are from <a href="https://www.w3schools.com/">w3schools.com</a> and <a href="https://www.sanfoundry.com/">SANFOUNDARY.com</a><footer>
		  
		  
			 
		
		 
		
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
				<li><a><i class="fab fa-facebook icon"></i></a>
				<a><i class="fab fa-instagram icon"></i></a>
				<a><i class="fab fa-twitter icon"></i></a>
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
		
	</body>
<html>
