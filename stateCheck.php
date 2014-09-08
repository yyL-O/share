<meta charset="utf-8">
<?php
	require_once 'functions.php';
	$fun = new Functions;
	if(isset($_SESSION['username'])){
		$username = $_SESSION['username'];
		$arr_user = $fun->getUserInfo($username);//获取用户信息
	}else if(isset($_GET['uid'])){
		$uid = $_GET['uid'];
		$arr_user = $fun->getUserInfo($uid);
	}else{
		echo "<script>
				alert('您还未登陆，请登陆之后查看');
				window.location.href='login.html';
			  </script>";
	}

?>