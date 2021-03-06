<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>后台管理系统</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="__PUBLIC__/css/dpl-min.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/css/bui-min.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/css/main-min.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="header">

    <div class="dl-title">
        <span class="lp-title-port">后台</span><span class="dl-title-text">管理系统</span>
    </div>

    <div class="dl-log"><span class="dl-log-user">

    </span><a href="__URL__/exitLogin" title="退出系统" class="dl-log-quit">[退出]</a>
    </div>
</div>
<div class="content">
    <div class="dl-main-nav">
    </div>
    <ul id="J_Nav"  class="nav-list ks-clear">
        <!-- <li class="nav-item dl-selected"><div class="nav-item-inner nav-home">首页</div></li>
               <li class="nav-item"><div class="nav-item-inner nav-order"></div></li>
                <li class="nav-item"><div class="nav-item-inner nav-inventory"></div></li>
                <li class="nav-item"><div class="nav-item-inner nav-supplier"></div></li>-->
    </ul>
</div>
<ul id="J_NavContent" class="dl-tab-conten">

</ul>
</div>
<script type="text/javascript" src="__PUBLIC__/js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/bui.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/config.js"></script>

<script>
    BUI.use('common/main',function(){
        var config = [{
            id:'menu',
            homePage : 'code',
            menu:[{
                text:'会员管理',
                items:[
                    {id:'code',text:'会员列表',href:'__URL__/userlist',closeable : false},
                    {id:'main-menu',text:'添加会员',href:'../Users/adduser.html'},

                ]
            },{
                text:'分类管理',
                items:[
                    {id:'resource',text:'分类列表',href:'__APP__/Classify/classList'},
                    {id:'loader',text:'添加主分类',href:'__APP__/Classify/addClass'}
                ]
            },{
                text:'品牌管理',
                items:[
                    {id:'resource',text:'品牌列表',href:'__APP__/Brand/brandList'},
                    {id:'loader',text:'添加品牌',href:'__APP__/Brand/addBrand.html'}
                ]
            },{
                text:'商品管理',
                items:[
                    {id:'resource',text:'商品列表',href:'__APP__/Items/itemList'},
                    {id:'loader',text:'添加商品',href:'__APP__/Items/addItem'}
                ]
            }
            ]
        }];
        new PageUtil.MainPage({
            modulesConfig : config
        });
    });
</script>
</body>
</html>