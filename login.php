<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kanye west--跳出腐朽的条框做作品的艺术家</title>
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/form.css" rel="stylesheet" type="text/css">
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
        <?
		session_start();
		if(isset($_SESSION['user_name']))
		{
			echo "您已经登陆,请登出后再来!";
			}
			else
			{
        ?>
       
		  <form name="login" action="check_login.php" method="post" class="login">
		  <? if(isset($_COOKIE['user_name']))
		{ ?>
			<div class="row1">
				<label class="label" for="user_name">用户名</label><input name="user_name" id="user_name" type="text" placeholder="请输入用户名" autofocus required class="input" value="<? echo $_COOKIE['user_name']?>">
			</div>
			<div class="row1">
				<label class="label" for="user_password">密码</label><input name="user_password" id="user_password" type="password" placeholder="请输入密码"  required class="input" value="<? echo $_COOKIE['user_password']?>"> 
			</div>
			<? }
				else { ?>
			<div class="row1">
				<label class="label" for="user_name">用户名</label><input name="user_name" id="user_name" type="text" placeholder="请输入用户名" autofocus required class="input" value="">
			</div>
			<div class="row1">
				<label class="label" for="user_password">密码</label><input name="user_password" id="user_password" type="password" placeholder="请输入密码"  required class="input" value=""> 
				
			</div>
			<? } ?>
				<input type="checkbox" name="cookie" id="cookie" value="on" style="margin: 20px 10px 10px 120px;"><label  for="cookie" style="font-size: 25px">十天内免登陆</label>
			
          		<a href="nocookie.php">清除cookie</a>
          	<div class="row1">
           		<input type="submit" value="登陆" name="login" class="btn">
           		<input type="button" value="去注册" name="bt" class="btn" style="background-color: #D99282 ; color:#25261E" onClick="window.location.href='registe.html'"> 
			</div>
            </form>
			 <? } ?>
			
		</main>
		
	</div>
				
	</div>	

<footer id="index_bottom">
	 版权所有©1997-2018 <br>运营：浙网文[2018]3506-263号<br>

违法和不良信息举报电话：0571-89853516<br> 举报邮箱：892156972@qq.com
</footer>
</body>
</html>
