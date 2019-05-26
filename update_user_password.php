<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?
$user_mobile=$_POST['user_mobile'];
$user_old_password=$_POST['user_old_password'];
$user_password=$_POST['user_password'];
include "conn.php";
$sql_select="select * from user_reg where user_mobile='".$user_mobile."' && user_password='".$user_old_password."'";
$result_select=$conn->query($sql_select);
$num_row_select=mysqli_num_rows($result_select);
if($num_row_select)	
{
	$sql_update="update user_reg set user_password='".$user_password."' where user_mobile='".$user_mobile."'";
	$result_update=$conn->query($sql_update);
	if($result_update)
	{
		echo "<script>alert('密码修改成功！请返回重新登陆！');</script>";
		session_start();
		unset($_SESSION['user_name']);
		unset($_SESSION['user_mobile']);
		echo "<script>window.location.href='login.php';</script>";
	}
	else{
		echo "<script>alert('密码修改错误!');</script>";
		echo "<script>window.history.back();</script>";
	}
}
	else{
		echo "<script>alert('旧密码输入错误!');</script>";
		echo "<script>window.history.back();</script>";
	}

?>
</body>
</html>