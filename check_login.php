<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?	
	$user_name=$_POST['user_name'];
	$user_password=$_POST['user_password'];
	include "conn.php";
	$sql_select="select * from user_reg where user_name='".$user_name."' and user_password='".$user_password."'";
	$result_select=$conn->query($sql_select);
	$row_select=mysqli_num_rows($result_select);
	
	if($row_select)	
	{
		$sql_bch="select user_mobile from user_reg where user_name='".$user_name."' ";
		$sel_dhk=$conn->query($sql_bch);
		$res_njdbc=$sel_dhk->fetch_row();
		session_start();
		$_SESSION['user_name']=$user_name;
		$_SESSION['user_mobile']=$res_njdbc[0];
		if($_POST['cookie']=="on")
		{
			setcookie("user_name",$user_name,time()+50*60*24*10);
			setcookie("user_password",$user_password,time()+60*60*24*10);
		}
		echo"<script>alert('登陆成功!');</script>";
		echo"<script>window.location.href='index.php';</script>";
	}
	else{
		echo"<script>alert('账号信息错误!');</script>";
		echo"<script>window.location.href='login.php';</script>";
	}
?>
</body>
</html>