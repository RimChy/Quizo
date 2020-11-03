<?php
require_once "pdo.php";
session_start();
$stmt=$pdo->prepare('Select * from score where user_id=:uid');
$stmt->execute(array(
':uid'=>$_SESSION['user_id']
));
$cpp=0;
$py=0;
$java=0;
$html=0;
$js=0;
$php=0;
$css=0;
$c=0;
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
	if($row['topic']=="C++") $cpp=$row['score'];
	if($row['topic']=="Python") $py=$row['score'];
	if($row['topic']=="Java") $java=$row['score'];
	if($row['topic']=="HTML") $html=$row['score'];
	if($row['topic']=="Javascript") $js=$row['score'];
	if($row['topic']=="C") $c=$row['score'];
	if($row['topic']=="PHP") $php=$row['score'];
	if($row['topic']=="CSS") $css=$row['score'];
	
}
?>

<!DOCTYPE html>
<html >
<head>
    <head>
	    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/jquery.rprogessbar.min.css">
    
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
			<!-- Custom styles for this template -->
		<link rel="stylesheet" href="css/style.css">
		<title>Quizo</title>
	</head>
	

<body>
<style>
table, td {
  border: 2px solid black;
  border-collapse: collapse;
}
td {
  padding: 15px;
}
</style>
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
		  <li class="nav-item active">
			<a class="nav-link" href="scores.php">Scores</a>
		  </li>
		  <li class="nav-item ">
			<a class="nav-link" href="logout.php">Logout</a>
		  </li>
		</ul>
	  </div>
	</nav>
	
	</div>
	<div class="py-5">
	<h1 class="text-center text-primary" style="font-size:300%">Your Scores</h1>
	<h4 class="text-center text-white">We only store your best score</h4>
	</div>
	<section class="scores text-center">
	<div class="container">
	 
	<div class="row">
	 <div class="col-md-12 ">
	 <h2 class="text-white">Score Table</h2>
	 <table width=25% class="border mx-auto">
	 <tr>
	    <td class="bg-dark text-white">C++</td>
		<td class="bg-light text-dark font-weight-bold"><?=htmlentities($cpp)?></td>
	 </tr>
	 <tr>
	    <td class="bg-dark text-white">Python</td>
		<td class="bg-light text-dark font-weight-bold"><?=htmlentities($py)?></td>
	 </tr>
	 <tr>
	    <td class="bg-dark text-white">Java</td>
		<td class="bg-light text-dark font-weight-bold"><?=htmlentities($java)?></td>
	 </tr>
	 <tr>
	    <td class="bg-dark text-white">HTML</td>
		<td class="bg-light text-dark font-weight-bold"><?=htmlentities($html)?></td>
	 </tr>
	 
	 
	 </table>
	 </div>
	</div>
	</div>
	</section>

    <section class="demo-area py-5">
        <div class="container">
		<h2 class="text-center text-white mt-5">Progress</h2>
                 
            <div class="row">
                <div class="col-lg-12">
                      <div class="pro-title mt-2">
				    <h5 class="text-white">C++<span class="text-white" style="float:right"><?php
					echo round(((htmlentities($cpp)*100)/15.00),2);
					?>%</span></h5>
                  <div class="progress">
				  
			  <div class="progress-bar bg-success" role="progressbar" style="width:<?=((htmlentities($cpp)*100)/15.00)?>%" aria-valuenow="<?=((htmlentities($cpp)*100)/15.00)?>" aria-valuemin="0" aria-valuemax="100"></div>
			</div> 
		
            </div>			
                   
            </div>
        </div>
		
		<div class="row">
                <div class="col-lg-12">
                     <div class="pro-title mt-2">
				    <h5 class="text-white">Python<span class="text-white" style="float:right"><?php
					echo round(((htmlentities($py)*100)/15.00),2);
					?>%</span></h5>
                  <div class="progress">
				  
			  <div class="progress-bar bg-primary" role="progressbar" style="width:<?=((htmlentities($py)*100)/15)?>%" aria-valuenow="<?=((htmlentities($py)*100)/15)?>" aria-valuemin="0" aria-valuemax="100"></div>
			</div> 
		
            </div>			
                   
            </div>
        </div>
		<div class="row">
                <div class="col-lg-12">
                     <div class="pro-title mt-2">
				    <h5 class="text-white">Java<span class="text-white" style="float:right"><?php
					echo round(((htmlentities($java)*100)/15.00),2);
					?>%</span></h5>
                  <div class="progress">
				  
			  <div class="progress-bar bg-danger" role="progressbar" style="width:<?=((htmlentities($java)*100)/15.00)?>%" aria-valuenow="<?=((htmlentities($java)*100)/15.00)?>" aria-valuemin="0" aria-valuemax="100"></div>
			</div> 
		
            </div>			
                   
            </div>
        </div>
		<div class="row">
                <div class="col-lg-12">
                                      <div class="pro-title mt-2">
				    <h5 class="text-white">HTML<span class="text-white" style="float:right"><?php
					echo round(((htmlentities($html)*100)/15.00),2);
					?>%</span></h5>
                  <div class="progress">
				  
			  <div class="progress-bar bg-danger" role="progressbar" style="width:<?=((htmlentities($html)*100)/15.00)?>%" aria-valuenow="<?=((htmlentities($html)*100)/15.00)?>" aria-valuemin="0" aria-valuemax="100"></div>
			</div> 
		
            </div>			
                   
            </div>
        </div>
		
		</div>
    </section>
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
    <script src="js/custom.js"></script>
    
</body>

</html>
