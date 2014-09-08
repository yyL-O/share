<?php

	//sql操作类
	class Connect {
		public $conn;
		public $username="root";
		public $password="";
		public $host="localhost";
        public $port="80";
		public $DBName="share";
		public function __construct(){
			//函数初始化，连接数据库，选择数据库
            $this->conn=mysql_connect($this->host,$this->username,$this->password);
			if (!$this->conn) {
				die(mysql_error());
			}
			mysql_select_db($this->DBName,$this->conn);
			mysql_query("set names utf8");
		}
		public function execute_dql($sql){
			$res=mysql_query($sql,$this->conn)or die(mysql_error());
			return $res;
		}
		public function execute_dml($sql){
			//执行dml语句查询的结果是bool值，要么是返回0或1，是1的时候对结果集有没有影响
			$res1=mysql_query($sql,$this->conn) or die (mysql_errno());
			if(!$res1){
				return 0;//返回结果为0
			}else {
				if(mysql_affected_rows($this->conn)>0){
					return 1;//表示有行受到影响
				}else {
					return 2;//表示没有行受到影响
				}
			}
		}
		public function close_conn(){
			if(!empty($this->conn)){
				mysql_close($this->conn);
			}
		}
	}