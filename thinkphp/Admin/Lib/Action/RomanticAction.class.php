<?php
    /**
    * 出来约会后台要添加的数据
    */
    class RomanticAction extends Action
    {
        public function saveData(){
            $romantic=$_POST['romantic'];
            $romanticTable=M('romantic');
            $romanticTable->content=$romantic;

            $romanticTable->where('1')->save();
            // var_dump($_POST);
            // echo $romanticTable->getLastSql();
            $this->redirect('Redirect/location',array('url'=>'46_list'),1,"页面跳转...");
        }
    }
?>