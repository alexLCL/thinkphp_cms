<?php
class ClassifyAction extends Action{
    function classList(){
        header('content-type:text/html;charset=utf8');
        import('ORG.Util.Page');//



        $cl= new Model('classify');

        $count = $cl->count();
        $Page=new Page($count,20);
        $show = $Page->show();

        $rs = $cl->limit($Page->firstRow.','.$Page->listRows)->where("fId=1")->select();

        foreach($rs as $key=>$val){

                $str .= "<tr>";
                $str .= "<th align='center' width='10'>" . $val["cName"] . "</th>";
                $str .= "<th width=‘10%’>";
                $str .= "<a href='__URL__/delClass/cId/" . $val["cId"] . "'>删除</a>  |";
                $str .= "<a href='__URL__/updClass/cId/" . $val["cId"] . "/cName/" . $val["cName"] . "'>修改</a>  |";
                $str .= "<a href='__URL__/addSon/cId/" . $val["cId"] . "/cName/" . $val["cName"] . "'>添加子类型</a>";
                $str .= "</th>";
                $str .= "<th width=‘10%’>";
                $str .= "<table cellpadding='0' border='0' cellspacing='0'>";
                $sql_1="select * from tp_classify where fId='{$val["cId"]}'";
                $rs_1=$cl->query($sql_1);
                foreach ($rs_1 as $key_1 => $val_1) {

                        $str .= "<tr>";
                        $str .= "<th width='20%'>".$val_1["cName"]."</th>";
                        $str .= "<th width='20%'spellcheck='0'>";
                        $str .= "<a href='delClass/cId/".$val_1["cId"]."'>删除</a>  |";
                        $str .= "<a href='updClass/cId/".$val_1["cId"]."'>修改</a>  |";
                        $str .= "</tr>";

                }
                $str .= "</table>";
                $str .= "</th>";
                $str .= "</tr>";

        }
        $this->assign('str',$str);
        $this->assign('show',$show);
        $this->display();
    }

    function addClass(){
        header("content-type:text/html;charset=utf-8");
        $this->display();
    }

    function delClass(){
        $cId=$_GET["cId"];
        $cl= new Model('classify');
        $sql_de="delete from tp_classify WHERE cId={$cId}";
        $cl->execute($sql_de);
       $this->success("删除成功","__URL__/classList");
    }

    function updClass(){
        $cId=$_GET["cId"];
        $cName=$_GET["cName"];
        $this->assign("cId",$cId);
        $this->assign("cName",$cName);

        $this->display();
    }

    function updAction(){
        $cId=$_GET["cId"];
        $cName=$_POST["cName"];
        $cl= new Model('classify');

        $sql_uC="update tp_classify set cName='{$cName}' where cId='{$cId}'";
        $cl->execute($sql_uC);
        $this->success("修改成功","__URL__/classList");
    }

    function addClassAction(){
        header('content-type:text/html;charset=utf8');

        $addcName=$_POST["addcName"];
        $cl= new Model('classify');
        $sql="insert into tp_classify(cName,fId) VALUES('{$addcName}',1)";
        $cl->execute($sql);
        $this->success("添加主类型成功","__URL__/classList");
    }

    function addSon(){
        $cId=$_GET["cId"];
        $cName=$_GET["cName"];
        $this->assign("cId",$cId);
        $this->assign("cName",$cName);

        $this->display();
    }

    function addSonAction(){
        $sId=$_GET["cId"];
        $sName=$_POST["addSname"];

        $cl= new Model('classify');
        $sql_addSon="insert into tp_classify(cName,fId) VALUES ('{$sName}','{$sId}')";
        $cl->execute($sql_addSon);
        $this->success("添加子类型成功","__URL__/classList");
    }
}