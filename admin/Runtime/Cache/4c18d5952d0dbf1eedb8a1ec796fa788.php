<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>登录界面</title>

    <link rel="stylesheet" href="__PUBLIC__/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="__PUBLIC__/css/loginMy.css"/>

    <style>
        html,body{width:100%;}
    </style>

</head>
<body>

<div class="main">

    <div class="center">
        <form action="__URL__/checklogin" id="formOne" method="post" onsubmit="return submitB()" name="loginform">
            <i class="fa fa-user Cone">  | </i>
            <input type="text" name="uer" id="user" placeholder="用户名"onblur="checkUser()"/>
            <span id="user_pass"></span>
            <br/>
            <i class="fa fa-key Cone">  | </i>
            <input type="password" name="pwd" id="pwd" placeholder="密码"onblur="checkUser1()"/>
            <span id="pwd_pass"></span>
            <br/>
            <i class="fa fa-folder-open Cone">  | </i>
            <input type="text" name="surePwd" id="surePwd" placeholder="验证码"onblur="checkUser2()"/>
            <img src="__APP__/Common/verify" onclick="this.src='__APP__/Common/verify/random/'+Math.random();">
            <span id="surePwd_pass" ></span><br/>
            <i class="fa fa-android Cone">  | </i>
            <input type="submit" value="登录" align="bottom" >
            <br/>

        </form>
    </div>

</div>


<script type="text/javascript" src="__PUBLIC__/js/loginMy.js"></script>

</body>
</html>