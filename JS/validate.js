// JavaScript Document
/*电子邮箱框获取光标，显示输入的提示信息*/

function prompt_email()
{
	document.getElementById("err_email").innerHTML="请输入正确的邮箱地址！";
	document.getElementById("err_email").style.color="blue";
	}
	//检验邮箱地址是否符合正则表达式

function chkemail()
{

var email=reg.email.value;
if(email=="")
{
	document.getElementById("err_email").innerHTML="邮箱地址不能为空！";
	document.getElementById("err_email").style.color="red";
	return false;
}

if (email.indexOf("@",0)==-1)
{
	document.getElementById("err_email").innerHTML="邮箱地址不正确！\n 必须包含\" @ \"符号！";
	document.getElementById("err_email").style.color="red";
	return false;
	}

if (email.indexOf(".",0)==-1)
{
	document.getElementById("err_email").innerHTML="邮箱地址不正确！\n 必须包含 \" . \" 符号！";
	document.getElementById("err_email").style.color="red";	
	return false;
}
if (email.search (/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) == -1)
{
	document.getElementById("err_email").innerHTML="邮箱地址不正确！";
	document.getElementById("err_email").style.color="red";	
return false;
}
	document.getElementById("err_email").innerHTML="√";
	document.getElementById("err_email").style.color="green";	
	return true;

}

//点击提交按钮的时候检验各必填项是否都填写正确并获取填写项内容并输出，之后提交注册表单

function focus_user_mobile()
{
	document.getElementById("prompt_user_mobile").innerHTML="请输入11位手机号码";
	document.getElementById("prompt_user_mobile").style.color="blue";
}
function blur_user_moile()
{
	var user_mobile=reg.user_mobile.value;
	if(user_mobile.length==0)
	{
		document.getElementById("prompt_user_mobile").innerHTML="手机号码不能为空！";
		document.getElementById("prompt_user_mobile").style.color="red";
		return false;
		}
	else if(user_mobile.search(/^1(3\d|47|5((?!4)\d)|7(0|1|[6-8])|8\d)\d{8,8}$/) == -1) 
	{
		document.getElementById("prompt_user_mobile").innerHTML="不是合法的手机号码";
		document.getElementById("prompt_user_mobile").style.color="red";
		return false;
		}
	else
	{
		document.getElementById("prompt_user_mobile").innerHTML="√";
		document.getElementById("prompt_user_mobile").style.color="green";
		return true;
		}
	}
function prompt_user_name()
{
	document.getElementById("err_user_name").innerHTML="请输入3~20位的用户名！";
	document.getElementById("err_user_name").style.color="blue";
}
function blur_user_name()
{
var user_name=reg.user_name.value;
if (user_name.length==0)
{
	document.getElementById("err_user_name").innerHTML="用户名不能为空！";
 	document.getElementById("err_user_name").style.color="red";
	reg.user_name.focus();
	return false;
}
else if (user_name.length>20 || user_name.length<3)
{ 
	document.getElementById("err_user_name").innerHTML="用户名过短或过长！";
 	document.getElementById("err_user_name").style.color="red";
 	return false;
}
	document.getElementById("err_user_name").innerHTML="√";
	document.getElementById("err_user_name").style.color="green"; 
	return true;
}
function prompt_user_password()
{
	document.getElementById("err_user_password").innerHTML="请输入不少于6位的密码！";
	document.getElementById("err_user_password").style.color="blue";
}
function blur_user_password()
{
var user_password=reg.user_password.value;

if (user_password.length==0)
{
	document.getElementById("err_user_password").innerHTML="密码不能为空！";
 	document.getElementById("err_user_password").style.color="red";
	reg.user_password.focus();
	return false;
}
else if (user_password.length<6)
{ 
	document.getElementById("err_user_password").innerHTML="密码不够6位！";
 	document.getElementById("err_user_password").style.color="red";
	 return false;
}
	document.getElementById("err_user_password").innerHTML="√";
	document.getElementById("err_user_password").style.color="green";
	return true;
}
function prompt_user_repassword()
{
	document.getElementById("err_user_repassword").innerHTML="请再次输入密码！";
	document.getElementById("err_user_repassword").style.color="blue";
}
function blur_user_repassword()
{
var user_password=reg.user_password.value;
var user_repassword=reg.user_repassword.value;
if (user_repassword.length<6)
{ 
	document.getElementById("err_user_repassword").innerHTML="确认密码不够6位！";
 	document.getElementById("err_user_repassword").style.color="red";
	 return false;
}
if (user_password!=user_repassword)
{
	document.getElementById("err_user_repassword").innerHTML="两次密码不一致！请重新输入！";
	document.getElementById("err_user_repassword").style.color="red";	
	return false;
}
	document.getElementById("err_user_repassword").innerHTML="√";
	document.getElementById("err_user_repassword").style.color="green";
	return true;

}

