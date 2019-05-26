<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kanye west--跳出腐朽的条框做作品的艺术家</title>
<link href="css/main.css" rel="stylesheet" type="text/css">
<script language="javascript" src="JS/time.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.cycle.js"></script>
<script type="text/javascript">
	$(function(){
		$('#banner').cycle({ 
				fx:'scrollLeft',
				pager:'#btn'
		});
	})
</script>
</head>
<style type="text/css">
	#banner
	{
		width:310px;
		margin:0px auto;
		height:460px;
		overflow:hidden;
		z-index:-1;
	}
	#btn
	{	display: inline;
		width:110px;
		hegiht:18px;
		float:left;
		margin:-30px 0px 0px 200px;
		position:absolute;
		z-index:1;
	}
	#btn a
	{
		color:#36f;
		font:700 11px "Arial";
		background:url(images/ibbtn.gif) no-repeat;
		float:left;
		width:18px;
		height:18px;
		line-height:18px;
		text-align:center;
		text-decoration:none;
		margin-left:5px;
	}
	#btn a.activeSlide
	{	
		color:#fff;
		background:url(images/ibhbtn.gif) no-repeat;
	}
	#btn a:hover
	{	
		color:#fff;
		background:url(images/ibhbtn.gif) no-repeat;
	}
</style>

<body onLoad="reloop()">
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
        <li id="t" style="color:#A4715A "></li>
  <?
  session_start();
  if(isset($_SESSION['user_name']))
  {
  echo "<span style='color:red'>欢迎用户: ".$_SESSION['user_name']."你好！</span> ";
  echo "<a href='logout.php'>登出</a>";
  echo "&nbsp;&nbsp;";
  echo "<a href='change_user_password.php'>修改密码</a>"; 	  
  }
  else
  {

  ?>
  
<? } ?>  
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
			<li><a href="index.php" class="selected">首页</a></li>
			<li><a href="music/music.html">专辑</a></li>
			<li><a href="brand/brand.html">品牌</a></li>
			<li><a href="login.php">会员</a></li>
			<li><a href="massage board/massage.html">留言板</a></li>
		</ul>
  </nav>
	<div id="banner_box">
    <img src= "images/banner_box1.JPG" width="980" height="280" alt="banner_box1"/> 
    </div>
	<div id="center">
		<aside id="center_left">
	    	<div id="banner">
    	<img  src="images/ibanner1.jpg" width="310" height="460">
        <img  src="images/ibanner2.jpg" width="310" height="460">
        <img  src="images/ibanner3.jpg" width="310" height="460">
        <img  src="images/ibanner4.jpg" width="310" height="460">
			</div>
			<div id="btn"></div>	
	    	
		</aside>
		<main>
		  <div id="left">
		  	<h2>热门文章<span>|Kanye west:门徒</span></h2>
		  	<article class="hot">
		  		<figure><img src="images/center1.jpg" width="280" height="200" alt="center1"/>
		  			<figcaption>Kanye和他的品牌</figcaption>
		  		</figure>
	  		  <section class="text">
		  			<h3>Kanye west:门徒</h3>
		  			<p>如果你想认真的概括阿迪达斯当代（2014-2020），可以很简单：运动休闲，Boost，Kanye。再简单一点：Kanye。关于Kanye，有这样一个段子：年初的时候，著名的脱口秀主持人，非裔美国人大嘴Steve Harvey，在艾伦秀夸耀他的节目如何成功的时候,如是说：Kanye在上我的节目的时候，他笑了！他喜欢这个节目，你看看我在介绍他，跟他聊天的时候，他笑了！然后他顿了顿：Kanye的人很高兴，在后台，他们告诉我Kanye现在很难笑一次了。Kanye West，侃爷，除去早年在芝加哥的艺术，他的人生有几折，我们都看到了。第一折，便是他早年打出名包括和陈冠希，Jayz等人在各个领域的小动作之后，被耐克招揽终做出了不朽的两代Air Yeezy，成实际上的王的时代....<a href="#">详情</a></p>
		  		</section>
		  	</article>
		  </div>
			<aside id="right">
				<div class= " b">
					<h3>Kanye west热门歌单</h3>
					<ol>
						<li>I like it</li>
						<li>Ni**as In Paris</li>
						<li>FourFiveSeconds</li>
						<li>One Man Can Change The World</li>
						<li>Stronger - Album Version </li>
						<li>Amazing</li>
						<li>Monster</li>
						<li>Power游戏《黑道圣徒3》主题曲</li>
						<li>All Of The Lights</li>
						&nbsp;
					</ol>
				</div>
				<div class= " b">
					<h3>Kanye west最新歌单</h3>
					<ol>
						<li>XTCY</li>
						<li>I Love It</li>
						<li>FI Thought About Killing You</li>
						<li>Yikes</li>
						<li>All Mine </li>
						<li>Wouldn't Leave</li>
						<li>No Mistakes</li>
						<li>Ghost Town</li>
						<li>Violent Crimes</li>
					</ol>
				</div>
			</aside>
		</main>
		
	</div>
	<div id="mid">
		<h2>----------Yeezy season资讯----------</h2>
	</div>
	<div id="bottom">
		<div id="l">
			<article class="h">
				<figure><img src="images/bottom1.jpg" width="200" height="180" alt="bottom1"/></figure>
				<section class="text1">
				  <h4>Yeezy 350 V2</h4>
				  <p>Yeezy 系列今年正在进入关键时期，侃爷最近也开始坐不住了，自他的推特复活之后不断的曝光今年即将推出的新款式，为自己的品牌造势！从现在曝光的鞋款来看，从 6 月开始几乎每月都有 Yeezy 鞋款发售，囊括了 Yeezy 350 V2、Yeezy 500 以及 Yeezy 700 Wave Runner，一场 Yeezy 的盛宴正向 Sneakerhead 们缓缓走来！<br>➨➨➨➨<a href="#">详情</a></p>
				</section>
			</article>
		</div>
		<div id="m">
			<article class="h2">
				<figure><img src="images/bottom2.jpg" width="200" height="180" alt="bottom2"/></figure>
				<section class="text2">
					<h4>Yeezy 500</h4>
				  <p>Yeezy 500 凭借其独特的鞋型与侃爷自身的号召力，自发售后着实圈了不少粉，有不少非球鞋圈的朋友也对其倍加关注！与首发配色颇为相似的 “Salt”，自曝光后就已获得相当人气的最新配色，在等待近两个月后，终于有官图释出。配色方面继承了 Kanye West 一直推崇的大地色系风格，与 Yeezy 350 的月光灰类似。<br>➨➨➨➨<a href="#">详情</a></p>
				</section>
			</article>
		</div>
		<div id="r">
			<article class="h3">
				<figure><img src="images/bottom3.jpg" width="200" height="180" alt="bottom3"/></figure>
				<section class="text3">
					<h4>Yeezy 700</h4>
				  <p>Yeezy Boost 700 Wave Runner 终于要在国内发售了！！！！在听到这个消息之后，相信大家和小编一样兴奋，因为我们终于有机会买到原价的 Yeezy Boost 700！从侃爷第一次上脚之后已经过去了近两年的时间，本周 adidas 官方终于正式确认 Yeezy Boost 700 将于 9 月 15 日在国内发售。早在去年 1 月，复古老爹鞋风潮尚未兴起。<br>➨➨➨➨<a href="#">详情</a></p>
				</section>
			</article>
		</div>
	  <div id="tig">
	  	<article class="h4">
				<figure><img src="images/bottom4.jpg" width="200" height="180" alt="bottom4"/></figure>
				<section class="text4">
					<h4>Yeezy 750</h4>
				  <p>Kanye West在打了一场激烈的口舌仗之后，于2013年底转投新东家adidas，当曾经缔造的经典成为了绝唱，对于全新的合作大家的期盼值愈发高涨。Kanye West的每一个动向都可以成为Hot News，从不停变动的发布传闻到新生代Yeezy谍照的一步步曝光，以及前几日Grammy亲身演绎的adidas 750 Yeezy Boost，一旦有消息放出。<br>➨➨➨➨<a href="#">详情</a></p>
				</section>
			</article>
	  </div>			
	</div>	
</div>
<footer id="index_bottom">
	 版权所有©1997-2018 <br>运营：浙网文[2018]3506-263号<br>

违法和不良信息举报电话：0571-89853516<br> 举报邮箱：892156972@qq.com
</footer>
</body>
</html>
