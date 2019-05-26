<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kanye west--跳出腐朽的条框做作品的艺术家</title>
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/form.css" rel="stylesheet" type="text/css">
<script language="javascript" src="JS/vali.js"></script>
</head>

<body>
<div id="top_menu">
	<ul>
		<li><a href="index.php">首页</a></li>  
        <li><a href="music/music.html">专辑</a></li>
        <li><a href="brand/brand.html">品牌</a></li>
        <li>
        	<a href="login.php">会员</a>
        		<ul>
       			  <li><a href="registe.html">注册</a></li>
        			<li><a href="login.php">登陆</a></li>
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
			<li><a href="login.php"  class="selected">会员</a></li>
			<li><a href="massage board/massage.html">留言板</a></li>
		</ul>
  </nav>
	<div id="banner_box">
    <img src="images/banner_box1.JPG" width="980" height="280" alt="banner_box1"/> 
    </div>
	<div id="center">
		<aside id="center_left">
	    	 <img src="images/ibanner1.jpg" width="310" height="430" alt=""/>
		</aside>
		<main>
                <h3>修改账号密码</h3>
  <?
    session_start(); 
  ?> 
       <form name="change_user_password" action="update_user_password.php" method="post" class="registe" onSubmit="return validate_change_user_password()">
       		<div class="row2">
 				<label class="txt">手机号</label><input name="user_mobile" class="input" type="tel" value="<? SESSION_start();echo $_SESSION['user_mobile'] ?>" readonly>
                <span id="span_user_mobile" class="prompt"></span>                
            </div>  
            <div class="row2">
                <label for="user_old_password" class="txt">旧密码</label><input name="user_old_password" id="user_old_password" type="password" placeholder="请输入旧密码" required class="input" pattern="^.{6,}$" >                
            </div>
             <div class="row2">
                <label for="user_password" class="txt">新密码</label><input name="user_password" id="user_password" type="password" placeholder="请输入新密码" required class="input" onFocus="focus_user_password()" onBlur="blur_change_user_password()">
                <span id="span_user_password" class="prompt"></span>
            </div>
            <div class="row2">
                <label for="user_repassword" class="txt">确认新密码</label><input name="user_repassword" id="user_repassword" type="password" placeholder="请确认新密码" required class="input" onFocus="focus_user_repassword()" onBlur="blur_change_user_repassword()">
                <span id="span_user_repassword" class="prompt"></span>
            </div>
            <div class="row2">               
                <input type="submit" value="修改密码" name="reg" class="btn">
                <input type="reset" value="重置" name="bt" class="btn" style="background-color:#E7FFAE; color:#666;">
            </div>
            </form>

           
			 
			
		</main>
		
	</div>
				
	</div>	

<footer id="index_bottom">
	 版权所有©1997-2018 <br>运营：浙网文[2018]3506-263号<br>

违法和不良信息举报电话：0571-89853516<br> 举报邮箱：892156972@qq.com
</footer>
</body>
</html>
