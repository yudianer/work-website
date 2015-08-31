<?php
// 本类由系统自动生成，仅供测试用途
class ConfirmAction extends Action {
    public function login(){

       $data0 = I('name','','htmlspecialchars');   //用户输入的用户名
       $data1 = I('pwd','','htmlspecialchars');    //用户输入的密码
       //var_dump($data);

       $m = new Model('admin_user');
		$arr = $m->select();
		//var_dump($arr);
		$user_name = $arr[0]['user_name'];    //数据库中的用户名
		$password = $arr[0]['password'];      //数据库中的密码 
		//var_dump($user_name);
		if( $data0 != $user_name ) { //判断用户名是否正确
			session_start();           
			// header("Content-Type:text/html;charset=utf-8");
			$_SESSION['name_wrong']=1;
			$this->redirect('Index/index');
			// echo "<script>alert('用户名错误，请重新输入');</script>";
		}
		else if( md5($data1) != $password ) {
			session_start();           
			// header("Content-Type:text/html;charset=utf-8");
			$_SESSION['pwd_wrong']=1;
			$this->redirect('Index/index');

		}
		else {
			session_start();
			$_SESSION['user_name'] = $data0;
			$this->redirect('Index/login');
		} 
		
	
    }
    
}