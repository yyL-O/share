<meta charset="utf-8">
<?php
	session_start();
	require_once 'functions.php';
	$fun = new Functions;
	if(isset($_POST['username'])){
		$username = $_POST['username'];
	}

	if(isset($_POST['password'])){
		$password = $_POST['password'];
	}

	if(!empty($username) && !empty($password)){
		//登录信息填写完整了,验证信息
		$res = $fun->checkUser($username,md5($password));
		if($res){
			//检查通过
			$_SESSION['username'] = $username;
			header("location:index.php");
		}else{
			echo "<script>
				alert('登陆失败，请检查用户名和密码后重试');
				window.location.href='login.html';
			  </script>";
		}
	}else{
		echo "<script>
				alert('登陆失败，用户名和密码不能为空');
				window.location.href='login.html';
			  </script>";
	}
	

?>