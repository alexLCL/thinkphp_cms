<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML><html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="__PUBLIC__/css/dpl-min.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/css/bui-min.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/css/main-min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="__PUBLIC__/js/jquery-1.8.1.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $("#bFid").change(function(){
                $.ajax({
                    type:"get",
                    url:"__URL__/selSon/random/"+Math.random()+"/cId/"+$("#bFid option:selected").val(),
                    dataType:"html",
                    success:function(data){
                        $("#bSid").html(data);
                    }

                })
            })
        })
    </script>
</head>
<body>
<style type="text/css">
    textarea
    {
        height:200px;
        width:200px;
    }
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

<form enctype="multipart/form-data" action="__URL__/addAction" method="post" id="u">

    <table id="customers" align="center">
        <tr>
            <th width="30%" style="text-align:right">商品名称</th>
            <th style="text-align:left"><input type="text" name="iName"> </th>
        </tr>
        <tr>
            <th width="30%" style="text-align:right">主类型名称</th>
            <th style="text-align:left">
                <select  name="bFid" id="bFid">
                     <option value="-1">请选择主类型</option>
                    <?php if(is_array($zhu)): $i = 0; $__LIST__ = $zhu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["cId"]); ?>"><?php echo ($vo["cName"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                 </select>
            </th>
        </tr>
        <tr>
            <th width="30%" style="text-align:right">子类型名称</th>
            <th style="text-align:left">
                <select name="bSid" id="bSid">

                </select>
            </th>
        </tr>
        <tr>
            <th width="30%" style="text-align:right">品牌</th>
            <th style="text-align:left">
                <select name="iBid" id="pp">
                    <option selected>请选择品牌</option>
                    <?php if(is_array($bs)): foreach($bs as $key=>$bf): ?><option value="<?php echo ($bf["bId"]); ?>"><?php echo ($bf["bName"]); ?></option><?php endforeach; endif; ?>
                </select></th>
        </tr>
        <tr>
            <th width="30%" style="text-align:right">商品编号</th>
            <th style="text-align:left"><input type="text" name="iCode"> </th>
        </tr>
        <tr>
            <th width="30%" style="text-align:right">商品图片</th>
            <th style="text-align:left"><input type="file" name="iImg"> </th>
        </tr>
        <tr>
            <th width="30%" style="text-align:right">商品规格(尺寸)</th>
            <th style="text-align:left"><input type="text" name="iSize"> </th>
        </tr>
        <tr>
            <th width="30%" style="text-align:right">商品颜色</th>
            <th style="text-align:left"><input type="text" name="iColor"> </th>
        </tr>
        <tr>
            <th width="30%" style="text-align:right">商品风格</th>
            <th style="text-align:left"><input type="text" name="iStyle"> </th>
        </tr>

        <tr>
            <th width="30%" style="text-align:right">商品价格</th>
            <th style="text-align:left"><input type="text" name="iPrice"></th>
        </tr>
        <tr>
            <th width="30%" style="text-align:right">商品介绍</th>
            <th style="text-align:left"><textarea height="200px" name="iCont"></textarea> </th>
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