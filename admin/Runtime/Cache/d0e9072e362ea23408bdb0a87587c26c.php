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
<form enctype="multipart/form-data" action="__URL__/addAction/" method="post" id="u">

    <table id="customers" align="center">
        <tr>
            <th width="30%" style="text-align:right">品牌名称</th>
            <th style="text-align:left"><input type="text" name="addname"> </th>
        </tr>
        <tr>
            <th width="30%" style="text-align:right">品牌logo</th>
            <th style="text-align:left"><input type="file" name="addpic"></th>
        </tr>
        <tr>
            <th>

            </th>
            <th>
                <input type="submit" value="添加">
            </th>
        </tr>
    </table>
</form>
</body>
</html>
</body>
</html>