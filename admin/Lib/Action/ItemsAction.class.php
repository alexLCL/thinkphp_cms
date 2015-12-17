<?php
class ItemsAction extends Action{

    function itemList(){
        header("content-type:text/html;charset=utf-8");
        import('ORG.Util.Page');// 导入分页类

        $item=M("items");
        $count=$item->count();
        $page=new Page($count,10);
        $show=$page->show();
        $sql.="select ti.iId,ti.iName,ti.iCode,ti.iImg,ti.iSize,ti.iColor,";
        $sql.="ti.iPrice,ti.iStyle,ti.iDate,ti.iCont,tb.bName as bname,tc.cName as zname,tc1.cName as fname";
        $sql.=" from tp_items as ti";
        $sql.=" left join tp_brand as tb on ti.iBid=tb.bId";
        $sql.=" left join tp_classify as tc on ti.iCid=tc.cId";
        $sql.=" left join tp_classify as tc1 on tc1.cId=ti.iFid";

        $rs=$item->limit($page->firstRow.','.$page->listRows)->query($sql);

        $this->assign("rs",$rs);
        $this->assign("show",$show);


        $this->display();
    }

    function addItem(){
        header("content-type:text/html;charset=utf-8");

        $cl=M("classify");
        $zhu=$cl->where("fId=1")->select();
        $br=M("brand");
        $bs=$br->select();

        $this->assign("bs",$bs);

        $this->assign("zhu",$zhu);
        $this->display();
    }

    function selSon(){//二级联动，选择完主类，显示子类
        $iCid=$_GET["cId"];
        $cl=M("classify");
        $zi=$cl->where("fId={$iCid}")->select();
        $str="";
        $str.="<option value='-1'>请选择子类型</option>";
            foreach($zi as $key=>$val){
                $str.="<option value='".$val["cId"]."'>".$val["cName"]."</option>";
            }
        echo $str;



    }

    function addAction(){
        header("content-type:text/html;charset=utf-8");

        import('ORG.Net.UploadFile');//导入上传文件类
        $up = new UploadFile();
        $up->maxSize  = 3145728 ;// 设置附件上传大小
        $up->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $up->savePath =  'Public/Uploads/item/';// 设置附件上传目录

        $iName=$_POST["iName"];
        $iCode=$_POST["iCode"];
        $iSize=$_POST["iSize"];
        $iColor=$_POST["iColor"];
        $iStyle=$_POST["iStyle"];
        $iPrice=$_POST["iPrice"];
        $iCont=$_POST["iCont"];
        $bFid=$_POST["bFid"];
        $bSid=$_POST["bSid"];
        $iBid=$_POST["iBid"];
        $iDate=date("Y-m-d");


        $iImg=$_FILES["iImg"];

        $it=M("items");
        if(!$up->upload()){
            $this->error($up->getErrorMsg());
            exti;
        }else{
            $info=$up->getUploadFileInfo();
            $filepath=$up->savePath.$info[0]['savename'];
        }
        $sql.="insert into tp_items(iCid, iFid, iBid, iCode, iName, iImg, iSize, iColor,";
        $sql.=" iPrice, iStyle, iDate, iCont)";
        $sql.=" values('{$bSid}', '{$bFid}', '{$iBid}', '{$iCode}', '{$iName}', '{$filepath}',";
        $sql.="'{$iSize}','{$iColor}','{$iPrice}','{$iStyle}','{$iDate}','{$iCont}')";

        $it->execute($sql);

       $this->success("修改成功","__URL__/itemList");


    }

    function upItem(){

        $iId=$_GET["iId"];
        $it=M("items");
        //关联数据库其他表单
        $sql.="select ti.iId,ti.iName,ti.iCode,ti.iImg,ti.iSize,ti.iColor,";
        $sql.="ti.iPrice,ti.iStyle,ti.iDate,ti.iCont,tb.bName,tc.cName as zname,tc1.cName as fname";
        $sql.=" from tp_items as ti";
        $sql.=" left join tp_brand as tb on ti.iBid=tb.bId";
        $sql.=" left join tp_classify as tc on ti.iCid=tc.cId";
        $sql.=" left join tp_classify as tc1 on tc1.cId=ti.iFid where iId='{$iId}'";


        $rs=$it->query($sql);

        $this->assign("rs",$rs);

        //遍历主类型名称
        $cl=M("classify");
        $zhu=$cl->where("fId=1")->select();
        $this->assign("zhu",$zhu);

       //遍历品牌名称
        $br=M("brand");
        $bs=$br->select();

        $this->assign("bs",$bs);




        $this->display();
    }
    function upAction(){

        $iId=$_GET["iId"];
        $upic = $_FILES['upIimg'];

        $iName=$_POST["iName"];
        $iCode=$_POST["iCode"];
        $iSize=$_POST["iSize"];
        $iColor=$_POST["iColor"];
        $iStyle=$_POST["iStyle"];
        $iPrice=$_POST["iPrice"];
        $iCont=$_POST["iCont"];
        $bFid=$_POST["bFid"];
        $bSid=$_POST["bSid"];
        $iBid=$_POST["iBid"];
        $iDate=date("Y-m-d");

        $iImg=$_FILES["upIimg"];
        $it=M("items");
        print_r($_POST);

//        if($iImg["name"]!=""){
//
//            import('ORG.Net.UploadFile');
//            $up = new UploadFile();
//            $up->maxSize  = 3145728 ;// 设置附件上传大小
//            $up->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
//            $up->savePath =  'Public/Uploads/item/';// 设置附件上传目录
//
//            if(!$up->upload()){
//                $this->error($up->getErrorMsg());
//            }else{
//                $info = $up->getUploadFileInfo();
//                $filepath = $up->savePath.$info[0]['savename'];
//
//                $old_path=$it->query("select * from tp_items where uId = '{$iId}'");
//                $fiel_paht=$old_path[0]['iImg'];
//                unlink($fiel_paht);
//            }
//        }else{
//            $sql = "select * from tp_items where iId = '{$iId}'";
//            $rs = $it->query($sql);
//            $filepath=$rs[0]["iImg"];
//
//        }
//
//            $sql1 .= "update tp_items set iCid='{$bSid}', iFid='{$bFid}', iBid='{$iBid}', iCode='{$iCode}',";
//            $sql1 .= "iName='{$iName}', iImg='{$filepath}', iSize='{$iSize}', iColor='{$iColor}',";
//            $sql1 .= "iPrice='{$iPrice}', iStyle='{$iStyle}', iDate='{$iDate}', iCont='{$iCont}' where iId='$iId'";
//
//
//            $it->execute($sql1);
//
//        $this->success("修改成功","__URL__/itemList");



    }
    function delItem(){
        $it=M("items");
        $iId=$_GET["iId"];

        //删除本地图片
        $rs=$it->where("iId=$iId")->select();
        $filepath=$rs[0]["iImg"];
        unlink($filepath);

        //删除数据库
        $sql="delete from tp_items where iId='{$iId}'";
        $it->execute($sql);

        $this->success("删除成功","__URL__/itemList");

    }
}