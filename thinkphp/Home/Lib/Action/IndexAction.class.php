<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	//通过na这个参数来获取要显示的页面的url
    	if ($_GET['na']=='index'||!$_GET['na']) {
    		$assign=array();
    		$tableD1 = M("d1");
    		$res=$tableD1->where('location=1')->select('txtarea');
    		$assign['location1']=$res[0]['txtarea'];
    		$res=$tableD1->where('location=2')->select('txtarea');
    		$assign['location2']=$res[0]['txtarea'];
    		$res=$tableD1->where('location=3')->select('txtarea');
    		$assign['location3']=$res[0]['txtarea'];
    		$res=$tableD1->where('location=4')->select('txtarea');
    		$assign['location4']=$res[0]['txtarea'];
    		$res=$tableD1->where('location=5')->select('txtarea');
    		$assign['location5']=$res[0]['txtarea'];
    		$this->assign($assign);
    		$this->display();
    	}else if($_GET['na']=='miandan'){
            /**
             * 若要显示面单页面，则赋值模板变量；
             */
            $demoTable=M('demo');
            //-------------------------------------------------------------------------------------------
            $demo1Res=$demoTable->where(array('demo'=>array('like','1-%')))->field(array('picture','demo'))->select();
            // foreach ($demo1Res as $key => $value) {
            //    // $demo1Res[$key]=$value[$];
            // }
            $this->area1=$demo1Res;
            //-------------------------------------------------------------------------------------------------
            $demo2Res=$demoTable->where(array('demo'=>array('like','2-%')))->field(array('picture','demo'))->select();
            // foreach ($demo2Res as $key => $value) {
            //    $demo2Res[$key]=$value['picture'];
            // }
            $this->area2=$demo2Res;
            //---------------------------------------------------------------------------------------
            $demo3Res=$demoTable->where(array('demo'=>array('like','3-%')))->field(array('picture','demo'))->select();
            // foreach ($demo3Res as $key => $value) {
            //    $demo3Res[$key]=$value['picture'];
            // }
            $this->area3=$demo3Res;
            //-------------------------------------------------------------------------------------------
            //var_dump($demo1Res);
            if (!isset($_SESSION)&&$_SESSION['username']) {
                $username=$_SESSION['username'];
                /**
                 * userTable:nick_name,portrait
                 * find the information
                 */
                $userTable=M('user');
                $userInfo=$userTable->where("nick_name='$username'")->select();
                $userInfo=$userInfo[0];
                $this->logIn='yes';
                $this->userName=$username;
                //$this->userName='用户名';
                $this->userImage=$userInfo['portrait'];
             }else{
                 $this->logIn="no";
             }
    		$this->display('miandan');
    	}elseif($_GET['na']=='mengxiang'){
            /**
             * [$dreamTable description]
             * @var [type]
             * -------------------------------如果是梦想板块，
             * ------------------------------1、此处从dream表中选出topic和image
             * ------------------------------2、是否可以点赞
             */
            if (!isset($_SESSION)&&$_SESSION['username']) {
                $username=$_SESSION['username'];
                /**
                 * --------------------------------whether user logged in
                 * userTable:nick_name,portrait
                 * find the information
                 */
                $userTable=M('user');
                $userInfo=$userTable->where("nick_name='$username'")->select();
                $userInfo=$userInfo[0];
                $this->logIn='yes';
                $this->userName=$username;
                //$this->userName='用户名';
                $this->userImage=$userInfo['portrait'];
             }else{
                 $this->logIn="no";
             }

            //-----------------------------------选出评论begin-----------------------------
            $dreamTable=M('dream');
            $res=$dreamTable->limit(1)->select();
            $res=$res[0];
            $this->topic=$res['topic'];
            $this->image=$res['image'];
            /**
             * 从此处开始从dream_comment中选出最高点击指数的三个评论
             */
            $dreamComment=M('dream_comment');
            $comments=$dreamComment->order('approving_num desc')->limit(3)->select();
            $this->comments=$comments;
            //-----------------------------------选出评论end-----------------------------
            //-------------------------------------是否可以点赞begin-------------------------
            $dreamZanTable=M('dream_zan');
            if (!isset($_SESSION)&&$_SESSION['username']) {
                    $username=$_SESSION['username'];
                    $zaned=array();
                    foreach ($comments as $key => $value) {
                        $commentId=$value['id'];
                        $res=$dreamZanTable->where("id='$commentId' and user_name='$username'");
                        if ($res) {
                            $zaned[$key]='n';
                        }else{
                            $zaned[$key]='c';
                        }
                    }
                 $this->zaned=$zaned;
                 //-------------------------------是否可以签到begin-------------------------
                 //如果上次签到的时间跟今天的00点差24小时，那么签到数为零
                 //如果上次的签到时间大于今天的00点则说明已经签到不可再签
                 //剩下的说明今天没有签到，可以签到
                $dreamSignTable=M('dream_sign');
                $signTime=$dreamSignTable->where("user_name='$username'")->getField('sign_time');
                $signTime=$signTime[0]['sign_time'];//这里是上次签到的时间，$timeNow=time();现在的时间 
                $zTime=strtotime("today");//今天00点的时间unix时间戳
                $timeDiff=$zTime-$signTime;
                $seconds=24*60*60;
                if ($timeDiff>$seconds) {
                    //**上次签到的时间距现在超出了24小时，设置其签到次数为0,可以点赞
                    $dreamSignTable->signTimes=0;
                    $dreamSignTable->where("user_name='$username'")->save();
                    $this->canSign='yes';
                    //如果上次的签到时间大于今天的00点则说明已经签到不可再签
                }elseif($signTime>$zTime){
                    $this->canSign='no';
                }else{//否则可以签到
                    $this->canSign='yes';
                }
                //签到次数
                $signNum=$dreamSignTable->where("user_name='$username'")->getField('sign_num');
                $this->signTimes=$signNum;
            }else{
                for ($i=0; $i <3 ; $i++) {
                    $zaned[$i]='n';
                }
            }
            $this->zanded=$zaned;
             //-------------------------------------是否可以点赞end-------------------------
             
            $this->display('mengxiang');
        }elseif($_GET['na']=='zhishang'){
            /**
             * 输出模板为zhishang
             * 变量：图片，topic1，topic2，问题的题目、选项、正确答案、
             */
            $wisdomTable=M('wisdom');
            $res=$wisdomTable->limit(1)->select();
            $res=$res[0];
            $topic1=$res['topic1'];
            $topic2=$res['topic2'];
            $image=$res['image'];
            $question=$res['question'];
            $choice1=$res['choice1'];
            $choice2=$res['choice2'];
            $choice3=$res['choice3'];
            $choice4=$res['choice4'];
            $anser=$res['anser'];

            $this->topic1=$res['topic1'];
            $this->topic2=$res['topic2'];
            $this->image=$res['image'];
            $this->question=$res['question'];
            $this->choice1=$res['choice1'];
            $this->choice2=$res['choice2'];
            $this->choice3=$res['choice3'];
            $this->choice4=$res['choice4'];
            if (!isset($_SESSION)) {
                session_start();
            }
            //将正确答案放到session中
            $_SESSION['anser']=$anser;
            $this->anser=$res['anser'];
            //从数据库中筛选出最近的五名用户，按照today字段倒叙排列
            $anserTable=M('anser');
            $luckyUsers=$anserTable->order('today desc')->limit(5)->select();
            if (!$luckyUsers) {
                //如果没有用户则显示快来参与吧
                $this->hasUser='no';
            }else{
                //有用户显示用户
                $this->hasUsers='yes';
                $this->luckyUsers=$luckyUsers;
                // var_dump($luckyUsers);
            }
            $this->display('zhishang');
        }elseif($_GET['na']=='yuehui'){
            if (!isset($_SESSION)&&$_SESSION['username']) {
                $username=$_SESSION['username'];
                /**
                 * --------------------------------whether user logged in
                 * userTable:nick_name,portrait
                 * find the information
                 */
                $userTable=M('user');
                $userInfo=$userTable->where("nick_name='$username'")->select();
                $userInfo=$userInfo[0];
                $this->logIn='yes';
                $this->userName=$username;
                //$this->userName='用户名';
                $this->userImage=$userInfo['portrait'];
                $sweetSignTable=M('sweet_sign');
                $sweetSignInfo=$sweetSignTable->where("user_name='$username'")->limit(1)->select();
                $this->signCount=$sweetSignInfo[0]['sign_count'];
             }else{
                 $this->logIn="no";
             }
            $romaticTable=M('romantic');
            //显示左侧的最浪漫的事的内容
            $content=$romaticTable->limit(1)->select();
            $content=$content[0]['content'];
            $this->content=$content;

            //从sweet_image中选出四个祝福指数最高的照片
            $sweetImageTable=M('sweet_image');
            $sweetImageInfo=$sweetImageTable->limit(4)->order('approving_num desc')->select();
            // var_dump($sweetImageTable);
            $this->sweetImageInfo=$sweetImageInfo;
            //签到数最多的显示在最右边显示内容用户名--签到天数--幸福指数；对应的表为sweet_sign
            $sweetSignTable=M('sweet_sign');
            $sweetSignInfo=$sweetSignTable->order('sign_count desc')->limit(8)->select();
            $this->sweetSignInfo=$sweetSignInfo;
            // var_dump($sweetSignInfo);


            $this->display($_GET['na']);
        }else{
            $this->display($_GET['na']);
        }
    }
}
?>