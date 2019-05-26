<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>无标题文档</title>
</head>

<body>
<?
session_start();
unset($_SESSION['user_name']);
echo "<script>window.location.href='index.php';</script>";
?>
</body>
</html>