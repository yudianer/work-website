<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {

    public function index(){

      session_start();
      if (isset($_SESSION['name_wrong'])) {
        //unset($_SESSION('name_wrong'));
        $this->name_wrong="用户名错误!";
        
      }
      if (isset($_SESSION['pwd_wrong'])) {
        $this->name_wrong="密码错误!";
        //unset($_SESSION('pwd_wrong'));
      }
      session_destroy();
    $this->display();
  }

    public function login(){
     // session_start();
      if(isset($_SESSION['user_name']) ) {
        $this->assign('admin',$_SESSION['user_name']);
      }
      else {
       $this->redirect('Index/index');
      }
      $this->display();
    
    }

    
		
   
		
}