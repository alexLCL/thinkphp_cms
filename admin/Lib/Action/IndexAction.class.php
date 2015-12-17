<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
	$this->display();
    }


    public function checklogin()
    {
        header('content-type:text/html;charset=utf8');
        $news = M('users');


        $uname = $_POST['uer'];
        $upass = $_POST['pwd'];
        $spass = $_POST['surePwd'];

        if (md5($spass) !== session("verify")) {
            ?>
            <script type="text/javascript">
                alert("验证码错误")
                window.location.href = "index"
            </script>
            <?php
            exit;
        }

        $ckn = $news->where("uName='{$uname}'")->find();
        if (count($ckn) > 0) {

            $ckp = $news->where("uPass='{$upass}'")->find();
            if (count($ckp) > 0) {

                session('uName', $ckn['name']);
                session('uId', $ckn['id']);

                ?>
                <script type="text/javascript">
                    window.location.href = "../Users/main"
                </script>
                <?php
                exit;
            } else {
                ?>
                <script type="text/javascript">
                    alert("密码错误")
                    document.history.back();
                </script>
                <?php
                exit;
            }

        } else {
            ?>
            <script type="text/javascript">
                alert("用户不存在")
                document.history.back();
            </script>
            <?php
            exit;
        }
    }
}