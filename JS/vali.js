// JavaScript Document
/*修改密码表单验证*/
function focus_user_password()
{
	document.getElementById("span_user_password").innerHTML="请输入不少于6位的密码！";
	document.getElementById("span_user_password").style.color="blue";
}
function blur_change_user_password()
{
var user_password=change_user_password.user_password.value;

if (user_password.length==0)
{
	document.getElementById("span_user_password").innerHTML="密码不能为空！";
 	document.getElementById("span_user_password").style.color="red";
	change_user_password.user_password.focus();
	return false;
}
else if (user_password.length<6)
{ 
	document.getElementById("span_user_password").innerHTML="密码不够6位！";
 	document.getElementById("span_user_password").style.color="red";
	 return false;
}
	document.getElementById("span_user_password").innerHTML="√";
	document.getElementById("span_user_password").style.color="green";
	return true;
}
function focus_user_password()
{
	document.getElementById("span_user_repassword").innerHTML="请再次输入密码！";
	document.getElementById("span_user_repassword").style.color="blue";
}
function blur_change_user_repassword()
{
var user_password=change_user_password.user_password.value;
var user_repassword=change_user_password.user_repassword.value;
if (user_repassword.length<6)
{ 
	document.getElementById("span_user_repassword").innerHTML="确认密码不够6位！";
 	document.getElementById("span_user_repassword").style.color="red";
	 return false;
}
if (user_password!=user_repassword)
{
	document.getElementById("span_user_repassword").innerHTML="两次密码不一致！请重新输入！";
	document.getElementById("span_user_repassword").style.color="red";	
	return false;
}
	document.getElementById("span_user_repassword").innerHTML="√";
	document.getElementById("span_user_repassword").style.color="green";
	return true;

}
function validate_change_user_password()
{
	if(blur_change_user_password()&&blur_change_user_repassword())
	{
		if(confirm("修改密码?"))
		{ return true; }		
	   else
	   { return false; }
	  }
	else    
	 { return false; }
	
}
