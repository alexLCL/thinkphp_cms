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
        text-align: center;
        font-size:1.1em;

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

    <table id="customers" >
        <tr bgcolor="A7C942" align="center">
            <td width="8%"><font size="3" color="#ffffff"><b>商品名称</b></font></td>
            <td width="8%"><font size="3" color="#ffffff"><b>商品图片</b></font></td>
            <td width="5%"><font size="3" color="#ffffff"><b>商品id</b></font></td>
            <td width="8%"><font size="3" color="#ffffff"><b>所属子类型</b></font></td>
            <td width="8%"><font size="3" color="#ffffff"><b>所属主类型</b></font></td>
            <td width="8%"><font size="3" color="#ffffff"><b>品牌</b></font></td>
            <td width="8%"><font size="3" color="#ffffff"><b>商品编号</b></font></td>
            <td width="8%"><font size="3" color="#ffffff"><b>商品规格</b></font></td>
            <td width="8%"><font size="3" color="#ffffff"><b>所属风格</b></font></td>
            <td width="8%"><font size="3" color="#ffffff"><b>商品颜色</b></font></td>
            <td width="8%"><font size="3" color="#ffffff"><b>上架时间</b></font></td>
            <td width="8%"><font size="3" color="#ffffff"><b>商品介绍</b></font></td>
            <td width="15%"><font size="3" color="#ffffff"><b>商品操作</b></font></td>
        </tr>

        <?php if(is_array($rs)): $i = 0; $__LIST__ = $rs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="alt">
                <th><?php echo ($vo["iName"]); ?></th>
                <th><img src="__ROOT__/<?php echo ($vo["iImg"]); ?>" width="80" height="60"></th>
                <th><?php echo ($vo["iId"]); ?></th>
                <th><?php echo ($vo["zname"]); ?></th>
                <th><?php echo ($vo["fname"]); ?></th>
                <th><?php echo ($vo["bname"]); ?></th>
                <th><?php echo ($vo["iCode"]); ?></th>
                <th><?php echo ($vo["iSize"]); ?></th>
                <th><?php echo ($vo["iStyle"]); ?></th>
                <th><?php echo ($vo["iColor"]); ?></th>
                <th><?php echo ($vo["iDate"]); ?></th>
                <th><?php echo ($vo["iCont"]); ?></th>

                <th>
                    <a href="__URL__/upItem/iId/<?php echo ($vo["iId"]); ?>">修改</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="__URL__/delItem/iId/<?php echo ($vo["iId"]); ?>">删除</a>
                </th>
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