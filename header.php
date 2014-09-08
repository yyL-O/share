<?php

	session_start();
	// require_once 'stateCheck.php';
	require_once 'functions.php';
	$fun = new Functions;

	if(isset($_SESSION['username'])){
		$username = $_SESSION['username'];
		$arr_user = $fun->getUserInfo($username);//获取用户信息
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>SHARE 分享你的生活</title>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="wrapper">
			<div class="header">
				<div class="header_box">
					<a id="logo" href="index.php"></a>
					<div class="menu_bar">
						<!-- 添加 -->
						<a id="add_content" class="add" href="javascript:void(0);"><img src="images/add.png"></a>
						<!-- 用户头像 -->
						<div class="user">
							<div class="user_pic">
							<?php
								if(isset($_SESSION['username'])){
									echo '<img src="'.$arr_user['img'].'" width="40px" height="40px" >';
								}else{
									echo '<img src="images/userPic.jpg" width="40px" height="40px" >';
								}
							?>
								<div class="triangle"></div>
							</div>
							<div class="user_choice">
								<ul>
									<li class="menu_per_info"><a href="perPage.php">个人主页</a></li>
									<li class="exit"><a href="logout.php">退出登录</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>