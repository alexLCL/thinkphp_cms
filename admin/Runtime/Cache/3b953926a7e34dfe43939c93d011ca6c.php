<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML><html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="__PUBLIC__/css/dpl-min.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/css/bui-min.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/css/main-min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<style type="text/css">
    #customers
    {
        font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
        width:100%;
        border-collapse:collapse;
    }

    #customers td, #customers th
    {
        font-size:1em;
        border:1px solid #98bf21;
        padding:3px 7px 2px 7px;
    }

    #customers th
    {
        font-size:1.1em;
        text-align:left;
        padding-top:5px;
        padding-bottom:4px;
        background-color:#A7C942;
        color:#ffffff;
    }

    #customers tr.alt td
    {
        color:#000000;
        background-color:#EAF2D3;
    }
</style>
<form action="" method="get">

    <table id="customers" align="center">
        <tr>
            <th align="center" width="15%">会员名称</th>
            <th width="10%">会员id</th>
            <th width="30%">会员头像</th>
            <th width="10%">操作</th>
        </tr>

        <?php if(is_array($rs)): $i = 0; $__LIST__ = $rs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="alt">
                <td><?php echo ($vo["uName"]); ?></td>
                <td><?php echo ($vo["uId"]); ?></td>
                <td><img src="__ROOT__/<?php echo ($vo["uPic"]); ?>" width="80" height="60"></td>
                <td>
                    <a href="__URL__/upduser/id/<?php echo ($vo["uId"]); ?>">修改</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="__URL__/del/id/<?php echo ($vo["uId"]); ?>">删除</a>
                </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>

    </table>

</form>
<table>
    <tr class="alt" align="center">
        <th><?php echo ($show); ?></th>
    </tr>
</table>
</body>
</html>
</body>
</html>