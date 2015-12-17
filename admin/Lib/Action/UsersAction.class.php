<?php
class UsersAction extends Action{

    public function userlist(){
        header("content-type:text/html;charset=utf-8");
        import('ORG.Util.Page');// 导入分页类



        $users = new Model('users');

        $count = $users->count();
        $Page=new Page($count,10);
        $show = $Page->show();
        $rs = $users->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('rs',$rs);
        $this->assign('show',$show);

        $this->display();
    }

    public function adduser(){
        header('content-type:text/html;charset=utf8');
        $this->display();
    }

    public function add(){
        header('content-type:text/html;charset=utf8');
        import('ORG.Net.UploadFile');//导入上传文件类

        $users = M('users');
        $aname = $_POST['addname'];
        $apass = $_POST['addpass'];
        $up = new UploadFile();

        $up->maxSize  = 3145728 ;// 设置附件上传大小
        $up->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $up->savePath =  'Public/Uploads/users/';// 设置附件上传目录

        if(!$up->upload()){
            $this->error($up->getErrorMsg());
            exti;
        }else{
            $info=$up->getUploadFileInfo();
            $filepath=$up->savePath.$info[0]['savename'];
        }

        $sql = "insert into tp_users(uName,uPass,uPic) values('{$aname}','{$apass}','{$filepath}')";
        $users->query($sql);

        ?>
        <script type="text/javascript">
            alert("添加成功");
            window.location.href = "userlist"
        </script>
        <?php
    }

    public function del(){
        header('content-type:text/html;charset=utf-8');
        $users = M('users');
        $id = $_GET["id"];

        //删除本地图片
        $sql="select * from tp_users WHERE uId={$id}";
        $rs=$users->query($sql);
        $filepath=$rs[0]["uPic"];
        unlink($filepath);

        //删除数据库
        $users->query("delete from tp_users where uId = {$id}");

        $this->success("删除成功","__URL__/userlist");
    }

    public function upduser(){
        header("Content-Type:text/html;charset=utf-8");

        $users = M('users');

        $id = $_GET["id"];
        $sql = "select * from tp_users where uId = '{$id}'";
        $rs = $users->query($sql);

        $this->assign('rs',$rs);
        $this->display();

    }

    public function upd(){
        header('content-type:text/html;charset=utf8');

        $users = M('users');
        $id = $_GET["id"];
        $uname = $_POST['updname'];
        $upass = $_POST['updpass'];
        $upic = $_FILES['updpic'];

        if($upic["name"]!=""){

            import('ORG.Net.UploadFile');
            $up = new UploadFile();
            $up->maxSize  = 3145728 ;// 设置附件上传大小
            $up->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $up->savePath =  'Public/Uploads/users/';// 设置附件上传目录

            if(!$up->upload()){
                $this->error($up->getErrorMsg());
            }else{
                $info = $up->getUploadFileInfo();
                $filepath = $up->savePath.$info[0]['savename'];

                $old_path=$users->query("select uPic from tp_users where uId = '{$id}'");
                $fiel_paht=$old_path[0]['uPic'];
                unlink($fiel_paht);
            }
        }else{
            $sql = "select * from tp_users where uId = '{$id}'";
            $rs = $users->query($sql);
            $filepath=$rs[0]["uPic"];
        }



        $usql = "update tp_users set uName='{$uname}',uPass='{$upass}',uPic='{$filepath}'where uId='{$id}'";
        $users->execute($usql);
        $this->success("修改成功","__URL__/userlist");
    }

    function exitLogin(){
        header('content-type:text/html;charset=utf8');
        session(null);
        ?>
        <script type="text/javascript">
            alert("退出成功")
            window.location.href = "../Index/index"
        </script>
        <?php
        exit;
    }
}