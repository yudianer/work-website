<?php
/**
* 处理前台答题情况，录入数据库
*/
class WisdomAction extends Action
{
    public function saveAnser(){
        $today=date('Y-m-d');//表明是今天的活动
        $subTime=time();//提交答案的时间
        $subAnser=$_GET['sub_anser'];//提交的答
        $userName=$_SESSION['username'];//提交的用户
        $rightAnser=$_SESSION['anser']; //正确的答案
        if ($rightAnser==$subAnser) {
            //答案正确时才插入数据库anser表中
            $anserTable=M('anser');
            $data['user_name']=$userName;
            $data['sub_time']=$subTime;
            $data['today']=$today;
            $anserTable->add($data);
        }
    }
}
?>