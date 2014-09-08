<meta charset="utf-8">
<?php
	session_start();
	require_once 'functions.php';
	$fun = new Functions;
	if(isset($_POST['email'])){
		$email = $_POST['email'];
	}

	if(isset($_POST['nickname'])){
		$nickname = $_POST['nickname'];
	}

	if(isset($_POST['password'])){
		$password = $_POST['password'];
	}

	if(!empty($email) && !empty($nickname) && !empty($password)){
		//注册信息填写完整了,把信息录入数据库
		$res = $fun->addUser($email,$nickname,md5($password));
		if($res){
			$_SESSION['username'] = $nickname;
			echo "<script>
				alert('注册成功');
				window.location.href='index.php';
			  </script>";
		}else{
			echo "<script>
				alert('注册失败，请重试');
				window.location.href='register.html';
			  </script>";
		}
	}else{
		echo "<script>
				alert('信息没填写完整，请重试');
				window.location.href='register.html';
			  </script>";
	}
	

?>