<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?
	setcookie("user_name","",time()-60*60*24*10);
	setcookie("user_password","",time()-60*60*24*10);
	echo "<script>window.location.href='login.php';</script>";
?>
</body>
</html>