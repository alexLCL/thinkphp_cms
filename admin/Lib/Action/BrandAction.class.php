<?php
class BrandAction extends Action{
    function brandList(){
        header("content-type:text/html;charset=utf-8");
        import('ORG.Util.Page');// 导入分页类

        $brand=M("brand");
        $count=$brand->count();
        $Page=new Page($count,10);
        $show=$Page->show();
        $this->assign("show",$show);//页数
        $rs=$brand->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign("rs",$rs);

        $this->display();
    }

    function addBrand(){

        $this->display();
    }

    function addAction(){
        header('content-type:text/html;charset=utf8');
        import('ORG.Net.UploadFile');//导入上传文件类

        $brand = M('brand');
        $aname = $_POST['addname'];
        $up = new UploadFile();

        $up->maxSize  = 3145728 ;// 设置附件上传大小
        $up->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $up->savePath =  'Public/Uploads/brand/';// 设置附件上传目录

        if(!$up->upload()){
            $this->error($up->getErrorMsg());
            exti;
        }else{
            $info=$up->getUploadFileInfo();
            $filepath=$up->savePath.$info[0]['savename'];
        }

        $sql = "insert into tp_brand(bName,bLogo) values('{$aname}','{$filepath}')";
        $brand->execute($sql);
        $this->success("添加成功","__URL__/brandList");

    }

    function upBrand(){
        header('content-type:text/html;charset=utf8');
        $brand = M('brand');

        $id=$_GET["id"];
        $rs=$brand->where("bId='{$id}'")->select();

        $this->assign("rs",$rs);
        $this->display();
    }

    function upAction(){
        header('content-type:text/html;charset=utf8');

        $brand = M('brand');
        $uname=$_POST["upName"];
        $id = $_GET["id"];
        $ulogo = $_FILES['uplogo'];


        if(count($ulogo)>0){

            import('ORG.Net.UploadFile');
            $up = new UploadFile();
            $up->maxSize  = 3145728 ;// 设置附件上传大小
            $up->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $up->savePath =  'Public/Uploads/brand/';// 设置附件上传目录

            if(!$up->upload()){
                $this->error($up->getErrorMsg());
            }else{
                $info = $up->getUploadFileInfo();
                $nfilepath = $up->savePath.$info[0]['savename'];

                $old_path=$brand->query("select * from tp_brand where bId = '{$id}'");
                $fiel_paht=$old_path[0]['bLogo'];
                unlink($fiel_paht);
            }
        }else{
            $sql = "select * from tp_brand where bId = '{$id}'";
            $rs = $brand->query($sql);
            $filepath=$rs[0]["bLogo"];
        }



        $usql = "update tp_brand set bName='{$uname}',bLogo='{$nfilepath}'where bId='{$id}'";
        $brand->execute($usql);
        $this->success("修改成功","__URL__/brandList");
    }


    function delBrand(){
        header('content-type:text/html;charset=utf8');

        $id=$_GET["id"];
        $brand=M("brand");

        //删除本地图片文件
        $sql="select * from tp_brand where bId={$id}";
        $rs=$brand->query($sql);
        $filepath=$rs[0]["bLogo"];
        unlink($filepath);

        //删除数据库信息
        $sql1="delete from tp_brand where bId={$id}";
        $brand->execute($sql1);


        $this->success("删除成功","__URL__/brandList");

    }
}