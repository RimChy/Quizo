<?php
require_once "pdo.php";
require_once "util.php";
if(isset($_POST['signup'])){
	if(isset($_POST['name']) && isset($_POST['pass']) && isset($_POST['confirm_pass'])){
		if(strlen($_POST['name'])<1 || strlen($_POST['pass'])<1 || strlen($_POST['confirm_pass'])<1){
			$_SESSION['error']="All fields are required";
			header('Location:signup.php');
			return;
		}
		if($_POST['pass']!=$_POST['confirm_pass']){
			$_SESSION['error']="Passwords aren't matching";
			header('Location:signup.php');
			return;
		}
		$stmt=$pdo->prepare('INSERT into user(name,password) values(:name, :pass)');
		$stmt->execute(array(
		 ':name'=>$_POST['name'],
		 ':pass'=>hash('md5',$_POST['pass'])
		));
		//$row=$stmt->fetch(PDO::FETCH_ASSOC);
		$stmt=$pdo->prepare('SELECT * from user where name=:name and password=:pass');
		$stmt->execute(array(
		 ':name'=>$_POST['name'],
		 ':pass'=>hash('md5',$_POST['pass'])
		));
		$row=$stmt->fetch(PDO::FETCH_ASSOC);
		if($row!=false){
		
			$_SESSION['name']=$row['name'];
			$_SESSION['user_id']=$row['id'];
			$stmt1=$pdo->prepare('INSERT into score(user_id,topic,score) values(:sid,:topic,:score)');
			$stmt1->execute(array(
			':sid'=>$_SESSION['user_id'],
			':topic'=>("C++"),
			':score'=>0
			));
			$stmt2=$pdo->prepare('INSERT into score(user_id,topic,score) values(:sid,:topic,:score)');
			$stmt2->execute(array(
			':sid'=>$_SESSION['user_id'],
			':topic'=>'Python',
			':score'=>0
			));
					$stmt3=$pdo->prepare('INSERT into score(user_id,topic,score) values(:sid,:topic,:score)');
			$stmt3->execute(array(
			':sid'=>$_SESSION['user_id'],
			':topic'=>'Java',
			':score'=>0
			
			));
					 $stmt4=$pdo->prepare('INSERT into score(user_id,topic,score) values(:sid,:topic,:score)');
			$stmt4->execute(array(
			':sid'=>$_SESSION['user_id'],
			':topic'=>'HTML',
			':score'=>0
			));
					
			$stmt5=$pdo->prepare('INSERT into score(user_id,topic,score) values(:sid,:topic,:score)');
			$stmt5->execute(array(
			':sid'=>$_SESSION['user_id'],
			':topic'=>'Javascript',
			':score'=>0
			));
					
			 $stmt6=$pdo->prepare('INSERT into score(user_id,topic,score) values(:sid,:topic,:score)');
			$stmt6->execute(array(
			':sid'=>$_SESSION['user_id'],
			':topic'=>'PHP',
			':score'=>0
			));
					
		    $stmt7=$pdo->prepare('INSERT into score(user_id,topic,score) values(:sid,:topic,:score)');
			$stmt7->execute(array(
			':sid'=>$_SESSION['user_id'],
			':topic'=>'CSS',
			':score'=>0
			));
					
			$stmt8=$pdo->prepare('INSERT into score(user_id,topic,score) values(:sid,:topic,:score)');
			$stmt8->execute(array(
			':sid'=>$_SESSION['user_id'],
			':topic'=>'C',
			':score'=>0
			));
					
			header('Location:view.php');
			return;
		}
		
	}
}
if(isset($_POST['cancel'])){
	header('Location:index.php');
	return;
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
		<div class="signinfo" style="margin:6% auto;
	padding:5%;
	width:40%;
	height:100%;
	background:#808080;
	text-align:left;">
		<h2 class="login text-center">Signup form</h2>
		<?php doValidate()?>
		    <form method="post">
			    <p><label for="name" class="font-weight-bold" >Name</label></br>
				<input type="text" id="name" name="name" class="logname"/></p>
				<p><label for="pass" class="font-weight-bold">Password</label></br>
				<input type="password" id="pass" name="pass"class="logname"/></p>
				<p><label for="confirm_pass" class="font-weight-bold">Confirm password</label></br>
				<input type="password" id="confirm_pass" name="confirm_pass" class="logname"/></p>
				<div class="text-center">
				<p><input type="submit" name="signup" class="sign_sub" value="Submit"/>
				<input type="submit" name="cancel" class="sign_sub" value="Cancel"/></p>
				</div>
			</form>
			
			
		</div>
		</div>
		
		</div>
		
			
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
		
	</body>
<html>