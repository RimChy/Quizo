<?php
    session_start();
    function doValidate(){
		if(isset($_SESSION['error'])){
		echo('<p style="color:red">'.htmlentities($_SESSION['error']).'</p>');
		unset($_SESSION['error']);
		}
	}
?>