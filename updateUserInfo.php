<?php
	session_start();
	require_once 'stateCheck.php';
	require_once 'functions.php';
	$fun = new Functions;

	if(isset($_GET['m']) && $_GET['m']=="pwd"){
		//修改密码
		$password = $_POST['password'];//当前密码
		$new_password = $_POST['new_password'];
		$confirm_password = $_POST['confirm_password'];
		if(!empty($password) && !empty($new_password) && !empty($confirm_password)){
			//全部不为空判断原始密码是否有错
			$res1 = $fun->checkUser($_SESSION['username'],md5($password));
			if($res1){
				//密码正确，继续执行更换密码操作
				if($new_password == $confirm_password){
					$res2 = $fun->updatePassword($_SESSION['username'],md5($new_password));
					if($res2){
						echo "<script>
								alert('密码修改成功');
				  				window.location.href='perPage.php';
				  			</script>";
				  		exit();
					}
				}else{
					echo "<script>
			  				alert('两次密码输入不一致');
			  				window.history.back(-1);
			  			</script>";
			  		exit();
				}
			}else{
				echo "<script>
		  				alert('原始密码错误，请重试');
		  				window.history.back(-1);
		  			</script>";
	  			exit();
			}
		}else{
			echo "<script>
	  				alert('密码部分不允许为空');
	  				window.history.back(-1);
	  			</script>";
	  		exit();
		}
	}else if(isset($_GET['m']) && $_GET['m']=="img"){
		
		/***********************上传图片部分*************************/
		// $referer=$_SERVER["HTTP_REFERER"];
		if($_FILES['file']['name'] != ""){
			$tp = array("image/gif","image/pjpeg","image/jpeg","image/png");
			if(in_array($_FILES['file']['type'], $tp) && $_FILES['file']['size'] < 512000){

				  $path="uploads/";
				  if(file_exists($path.$_FILES['file']['name'])){
				  		echo "<script>
				  				alert('文件".$_FILES['file']['name']."已经存在，请重新上传');
				  				window.history.back(-1);
				  			</script>";
				  		exit();
				  }else{
				  	move_uploaded_file($_FILES['file']['tmp_name'],$path.$_FILES['file']['name']);
				  	$img = $path.$_FILES['file']['name'];
				  }

				
			}else{
				echo "<script>alert('上传错误，仅支持jpg/jpeg/gif/png格式，且图片文件必须小于200K');
					window.history.back(-1);
					</script>";
				exit();
			}

		}else{
			echo "<script>
				alert('请先选择上传文件');
				window.history.back(-1);
				</script>";
			exit();
		}
		//图片处理完毕，若添加成功，则继续执行。否则exit();
		$uid = $arr_user['uid'];
		$res = $fun->updateUserImg($uid,$img);
		if($res){
			echo "<script>
				alert('保存成功');
				window.location.href='perPage.php';
				</script>";
			exit();
		}else{
			echo "<script>
				alert('保存失败，请重试');
				window.location.href='perInfoEdit.php';
				</script>";
			exit();
		}

	}else{
		//更新其他信息
		$uid = $arr_user['uid'];
		$email = $_POST['email'];
		$nickname = $_POST['nickname'];
		$sex = $_POST['sex'];
		$city = $_POST['city'];
		$occupation = $_POST['occupation'];
		$introduce = $_POST['introduce'];

		$res = $fun->updateUserInfo($uid,$email,$nickname,$sex,$city,$occupation,$introduce);
		if($res){
			echo "<script>
				alert('保存成功');
				window.location.href='perPage.php';
				</script>";
			exit();
		}else{
			echo "<script>
				alert('保存失败，请重试');
				window.location.href='perInfoEdit.php';
				</script>";
			exit();
		}


}
	

?>