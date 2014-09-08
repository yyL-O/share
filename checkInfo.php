<?php
	
	require_once 'functions.php';
	$fun = new Functions;

	if(isset($_POST['ajax'])){

		if($_POST['ajax'] == "checkEmail" && isset($_POST['email'])){
			$email = $_POST['email'];
			$res = $fun->checkEmail($email);
			if($res){
				$arr = array('flag' =>false);
				echo json_encode($arr);
				exit();
			}else{
				$arr = array('flag' =>true);
				echo json_encode($arr);
				exit();
			}
		}

		if($_POST['ajax'] == "checkNickname" && isset($_POST['nickname'])){
			$nickname = $_POST['nickname'];
			$res = $fun->checkNickname($nickname);
			if($res){
				$arr = array('flag' =>false);
				echo json_encode($arr);
				exit();
			}else{
				$arr = array('flag' =>true);
				echo json_encode($arr);
				exit();
			}
		}


	}



?>