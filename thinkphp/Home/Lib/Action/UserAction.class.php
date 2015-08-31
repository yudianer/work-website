<?php
// 本类由系统自动生成，仅供测试用途
header("Content-Type:text/html;charset=utf-8");
class UserAction extends Action {
    public function user(){
    	
		if(isset($_POST["submit"]) && $_POST["submit"] == "登录")  
    {  
        $user = $_POST["username"];  
        $psw = md5($_POST["password"]);  
        if($user == "" || $psw == "")  
        {  
            echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";  
        }  
        else  
        {  
            $m = M("user");
            $result = $m -> where( "username = '$user' and password = '$psw' ") -> select();
            if($result)  
            {  
               echo "恭喜您，登录成功，正在进入首页...";  
               $this->redirect('Index/index');
            }  
            else  
            {  
                echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";  
            }  
        }  
    }  
    else  
    {  
        echo "<script>alert('提交未成功！'); history.go(-1);</script>";  
    }






    }


}
?>