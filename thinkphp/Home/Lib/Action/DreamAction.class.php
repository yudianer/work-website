<?php
	/**
	* 记录前台的梦想板块的数据
	*/
	class DreamAction extends Action
	{
		public function addComment(){
			/**
			 * 添加新的评论并且返回它对应的评论的ID
			 * table:dream_comment
			 * id,user_name,user_image,comment,approving_num
			 */
			$user_name=$_GET['user_name'];
			$user_image=$_GET['user_image'];
			$comment=$_GET['content'];
			$approving_num=0;
			$commentTable=M('dream_comment');
			//插入评论
			//用户-评论内容-板块
			$data['user_name']=$user_name;
			$data['user_image']=$user_image;
			$data['comment']=$comment;
			$data['approving_num']=0;
			$commentTable->add($data);
			$id=$commentTable->where("user_name='$user_name' and comment='$comment' and approving_num='0'")->order('id desc')->limit(1)->getField('id');
			$idJson=array();
			$idJson['id']=$id[0]['id'];
			echo json_encode($idJson);
		}
		public function signTimesPP(){
			/**
			 * 1、用户的签到数加1
			 * 2、存储签到时间(Unix时间戳)
			 */
			if (!isset($_SESSION)&&$_SESSION['username']) {
            	$username=$_SESSION['username'];
            	//testing,delete it when runing
            	///$username='jack';
            	$dreamSignTable=M('dream_sign');
            	$signTimes=$dreamSignTable->where("user_name='$username'")->getField('sign_num');
            	$signTimes=$signTimes[0]['sign_num'];
            	$signTimes++;
            	//获取当前时间time(void)返回自从 Unix 纪元（格林威治时间 1970 年 1 月 1 日 00:00:00）到当前时间的秒数。
            	$signTime=time();
            	$dreamSignTable->sign_time=$signTime;
            	$dreamSignTable->sign_num=$signTimes;
            	$dreamSignTable->where("user_name='$username'")->save();
	        }
		}
	}
?>