<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kanye west--跳出腐朽的条框做作品的艺术家</title>
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/form.css" rel="stylesheet" type="text/css">
<script language="javascript" src="JS/validate.js"></script>
</head>

<body>
<div id="top_menu">
	<ul>
		<li><a href="index.php">首页</a></li>  
        <li><a href="music/music.html">专辑</a></li>
        <li><a href="brand/brand.html">品牌</a></li>
        <li>
        	<a href="login/login.php">会员</a>
        		<ul>
       			  <li><a href="login/registe.html">注册</a></li>
        			<li><a href="login/login.php">登陆</a></li>
   		  </ul>  
      </li>
        <li><a href="massage board/massage.html">留言板</a></li>  
    </ul>
</div>
<div id="wrap">
	<header id="index_top">
    	<img src="images/logo.png" width="240" height="150" alt="logo"/> 
    	<h1>Kanye west-------说唱艺术家</h1>
    	<form name="search" action="#" method="get">
    		<input type="search" name="keywords" placeholder="搜音乐">
    		<input type="submit" name="tj" value="搜音乐">
    	</form>
    </header>
	<nav>
		<ul>
			<li><a href="index.php">首页</a></li>
			<li><a href="music/music.html">专辑</a></li>
			<li><a href="brand/brand.html" >品牌</a></li>
			<li><a href="login/login.html"  class="selected">会员</a></li>
			<li><a href="massage board/massage.html">留言板</a></li>
		</ul>
  </nav>
	<div id="banner_box">
    <img src="images/banner_box1.JPG" width="980" height="280" alt="banner_box1"/> 
    </div>
	<div id="center">
		<aside id="center_left">
	    	 <img src="images/ibanner1.jpg" width="310" height="430" alt="ibanner1"/> 
		</aside>
		<main>
		  	<h2>您填写的注册信息是：</h2>
		  	<?
			echo"手机号:".$_POST['user_mobile'];
			echo"邮箱:".$_POST['email'];
			echo"用户名:".$_POST['user_name'];
			echo"密码:".$_POST['user_password'];
			$user_mobile=$_POST['user_mobile'];
			$email=$_POST['email'];
			$user_name=$_POST['user_name'];
			$user_password=$_POST['user_password'];
			include "conn.php";
			$sql_select_user_mobile="select * from user_reg where user_mobile='".$user_mobile."'";
			$result_select_user_mobile=$conn->query($sql_select_user_mobile);
			$row_num_select_user_mobile=mysqli_num_rows($result_select_user_mobile);
			if($row_num_select_user_mobile)
			{
				echo "<div style='color:red; font-size:30px;'>";
				echo "手机号被占用！<br>";
				echo "<a style='cursor:pointer;' onClick='window.history.go(-1)'>点击返回修改手机号！</a></div>";
			}
			
			else
			{
			$sql_select_user_name="select * from user_reg where user_name='".$user_name."'";
			$result_select_user_name=$conn->query($sql_select_user_name);
			$row_num_select_user_name=mysqli_num_rows($result_select_user_name);
			if($row_num_select_user_name)
			{
				echo "<div style='color:red; font-size:30px;'>";
				echo "用户名被占用！<br>";
				echo "<a style='cursor:pointer;' onClick='window.history.go(-1)'>点击返回修改用户名！</a></div>";
			}}
			{
			$sql_insert="insert into user_reg (user_mobile, email, user_name, user_password) values ('".$user_mobile."', '".$email."', '".$user_name."', '".$user_password."')";
			$result_insert=$conn->query($sql_insert);
			if($result_insert)
			{
				session_start();
				$_SESSION['user_name']=$user_name;
				echo "注册成功！";
				echo "<span id='s'></span>秒以后跳转到首页";
			}
			else
			{
				echo "失败！";
			}
			}
			mysqli_close($conn);
			
	
			?>
<script type="text/javascript">  
    //设定倒数秒数  
    var t = 6;  
    //显示倒数秒数  
    function showTime(){  
        t -= 1;  
        document.getElementById('s').innerHTML= t;  
        if(t==0){  
            location.href='index.php';  //倒数为零时跳转到首页
        }  
        //每秒执行一次,showTime()  
        setTimeout("showTime()",1000);  
    }  
            
    //执行showTime()  
    showTime();  
</script> 
			
			
			
		</main>
		
	</div>
				
	</div>	

<footer id="index_bottom">
	 版权所有©1997-2018 <br>运营：浙网文[2018]3506-263号<br>

违法和不良信息举报电话：0571-89853516<br> 举报邮箱：892156972@qq.com
</footer>
</body>
</html>

</body>
</html>