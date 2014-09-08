<meta charset="utf-8">
<?php

session_start();
unset($_SESSION['username']);
$str="你已经退出登陆，3秒之后返回登录页面...<br >或者点击回到";
$str.='<a href="index.php">首页</a>';
$str.=<<<eot
<script language="javascript" type="text/javascript">  
setTimeout("javascript:location.href='login.html'", 3000);  
</script> 
eot;
die($str);

?>