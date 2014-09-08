<?php

class Functions{
	public $conn;//定义数据库连接为变量
	//构造函数连接数据库
	public function __construct(){
		require_once 'config.php';
		$this->conn = new Connect;
	}

	//注册时，插入用户数据
	public function addUser($email,$nickname,$password){
		$sql = "insert into user (`email`,`nickname`,`password`) values ('$email','$nickname','$password')";
		$res = $this->conn->execute_dml($sql);
		return $res;
		$this->conn->close_conn();
	}

	//判断用户名和密码是否匹配
	public function checkUser($username,$password){
		$pos = strpos($username,"@");//检查是邮箱还是昵称登陆
		if($pos){
			//邮箱登陆
			$sql = "select password from user where email = '$username'";
		}else{
			//昵称登陆
			$sql = "select password from user where nickname = '$username'";
		}
		$res = $this->conn->execute_dql($sql);
		if($res){
			$arr_user = mysql_fetch_assoc($res);
			if($arr_user['password'] == $password){
				return true;
			}else{
				return false;
			}
		}else{
			return flase;
		}
		
		$this->conn->close_conn();
	}

	//通过username获取用户信息
	public function getUserInfo($username){
		$pos = strpos($username,"@");//检查是邮箱还是昵称
		if($pos){
			//邮箱登陆
			$sql = "select * from user where email = '$username'";
		}else{
			if(is_numeric($username)){
				$sql = "select * from user where uid = '$username'";
			}else{//昵称登陆
				$sql = "select * from user where nickname = '$username'";
			}

		}
		$res = $this->conn->execute_dql($sql);
		return mysql_fetch_assoc($res);
		$this->conn->close_conn();
	}

	//更新用户信息
	public function updateUserInfo($uid,$email,$nickname,$sex,$city,$occupation,$introduce){
		$sql = "update user set email='$email',nickname='$nickname',sex='$sex',city='$city',occupation='$occupation',introduce='$introduce' where uid='$uid'";
		$res = $this->conn->execute_dml($sql);
		return $res;
		$this->conn->close_conn();
	}

	//更新密码
	public function updatePassword($username,$password){
		$pos = strpos($username,"@");//检查是邮箱还是昵称登陆
		if($pos){
			//邮箱登陆
			$sql = "update user set password='$password' where email='$username'";
		}else{
			//昵称登陆
			$sql = "update user set password='$password' where nickname='$username'";
		}
		$res = $this->conn->execute_dql($sql);
		return $res;
		$this->conn->close_conn();
	}
	

	//ajax验证邮箱是否已注册
	public function checkEmail($email){
		$sql = "select * from user where email = '$email'";
		$res = $this->conn->execute_dql($sql);
		$res_num = mysql_num_rows($res);
		return $res_num;
		$this->conn->close_conn();
	}

	//ajax验证用户名是否已注册
	public function checkNickname($nickname){
		$sql = "select * from user where nickname = '$nickname'";
		$res = $this->conn->execute_dql($sql);
		$res_num = mysql_num_rows($res);
		return $res_num;
		$this->conn->close_conn();
	}

	//更新头像
	public function updateUserImg($uid,$img){
		$sql = "update user set img='$img' where uid='$uid'";
		$res = $this->conn->execute_dml($sql);
		return $res;
		$this->conn->close_conn();
	}

}
	
?>