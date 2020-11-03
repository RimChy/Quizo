<?php
require_once "pdo.php";
require_once "util.php";
if(isset($_POST['login'])){
	if(isset($_POST['name']) && isset($_POST['pass'])){
		if(strlen($_POST['name'])<1 || strlen($_POST['pass'])<1){
			$_SESSION['error']="All fields are required";
			header('Location:login.php');
			return;
		}
		$stmt=$pdo->prepare('SELECT * from user where name=:name and password=:pass');
		$stmt->execute(array(
		 ':name'=>$_POST['name'],
		 ':pass'=>hash('md5',$_POST['pass'])
		));
		$row=$stmt->fetch(PDO::FETCH_ASSOC);
		if($row!=false){
			$_SESSION['name']=$row['name'];
			$_SESSION['user_id']=$row['id'];
			header('Location:view.php');
			return;
		}
		else{
			$_SESSION['error']="Incorrect password or name";
			header('Location:login.php');
			return;
		}
	}
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
		<div class="logpage text-center">
		<div class="container">
		
	    <h1 class="wel">Welcome to QUIZO</h1>
		<div class="loginfo">
		<h2 class="login text-center">Login form</h2>
		<?php doValidate()?>
		    <form method="post">
			    <p><label for="name" class="logname">Name</label></br>
				<input type="text" id="name" name="name"/></p>
				<p><label for="pass">Password</label></br>
				<input type="password" id="pass" name="pass"/></p>	
				<p><input type="submit" name="login" class="sub" value="Login"/></p>
			</form>
			
			<p class="new_user">Don't have an account! <a href="signup.php">Signup</a></p>
			
		</div>
		</div>
		
		</div>
		
			
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
		
	</body>
<html>