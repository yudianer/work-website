<?php
	/**
	* 负责相应根据前台想要哪一个模块的具体的信息
	*/
	class FreeLunchAction extends Action
	{	
		/**
		 * [demoDetail description]
		 * @return [type] [description]
		 * 模板文件为：mdxq.html
		 * 内容包括：图片，主题，描述，评论
		 *  there are --picture,topic,description,demo,id-- in table demo;
		 */
		public function demoDetail(){
			$demo=$_GET['demo'];
			$demoTable=M('demo');
			$demoContent=$demoTable->where("demo='$demo'")->limit(1)->select();//从demo表中找出1-1的有关信息
			$demoContent=$demoContent[0];
			$this->picture=$demoContent['picture'];
			$this->topic=$demoContent['topic'];
			$this->description=$demoContent['description'];
			$this->demo=$demo;
			//------------------------------------------------------------
			//-----------------------judge whether user logged in?????----------------
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
             //-----------------------------judgement ends--------------------------------
             //-------------------comments begin--------------------------------
             /**
              * [$commentTable description]
              * @var [type]
              * select all the records from comment corresponding to this(1-4) demo 
              */
	            $commentTable=M('comment');
	            $comments=$commentTable->where("demo='$demo'")->order('approving_num desc')->limit(3)->select();//2-d array
	            if (!isset($_SESSION)&&$_SESSION['username']) {
	            	$username=$_SESSION['username'];
	            	$zanedTable=M('zaned');
	            	$zaned=array();
		            foreach ($comments as $key => $value) {
		            	$commentId=$value['id'];
		            	$res=$zanedTable->where("id='$commentId' and user_name='$username'");
		            	if ($res) {
		            		$zaned[$key]='n';
		            	}else{
		            		$zaned[$key]='c';
		            	}
		            }
		            // $this->zaned=$zaned;
	            }else{
	            	for ($i=0; $i <3 ; $i++) { 
	            		$zaned[$i]='n';
	            	}
	            }
	            $this->zanded=$zaned;
	            /**
	             * [$this->zaned description]
	             * @var [type]
	             * record whether these comments have been approved by this user;
	             * property:zaned;
	             * have not:value=c;have done:value=n;
	             */
	        $this->zaned=$zaned;
	        $this->comments=$comments;
			$this->display('mdxq');
		}
		public function addCommentIdUser(){
			/**
			 * [$zanedTable description]
			 * @var [type]
			 * 处理当用户点过赞之后的事情
			 * 1、将该用户和评论id绑定，防止其下次登录时再次点赞
			 * 2、将赞数加1
			 */
			$zanedTable=M('zaned');
			$commentId=$_GET['comment_id'];
			$userName=$_GET['user_name'];
			$date['comment_id']=$_GET['comment_id'];
			$data['user_name']=$_GET['user_name'];
			$date['demo']=$_GET['demo'];
			$zanedTable->add($data);
			//赞数加1
			$commentTable=M('comment');
			$approvingNum=$commentTable->where("comment_id='$commentId'")->field('approving_num')->select();
			$approvingNum=$approvingNum[0]['approving_num'];
			$approvingNum++;
			$commentTable->approving_num=$approvingNum;
			$commentTable->where("comment_id='$commentId'")->save();
		}
		public function addComment(){
			/**
			 * 添加新的评论并且返回它对应的评论的ID
			 * table:comment
			 * id,user_name,user_image,comment,approving_num,demo
			 */
			$user_name=$_GET['user_name'];
			$user_image=$_GET['user_image'];
			$comment=$_GET['content'];
			$approving_num=0;
			$demo=$_GET['demo'];
			$commentTable=M('comment');
			//插入评论
			//用户-评论内容-板块
			$data['user_name']=$user_name;
			$data['user_image']=$user_image;
			$data['comment']=$comment;
			$data['approving_num']=0;
			$data['demo']=$demo;
			$commentTable->add($data);
			$id=$commentTable->where("user_name='$user_name' and comment='$comment' and demo='$demo' and approving_num='0'")->order('id desc')->limit(1)->getField('id');
			$idJson=array();
			$idJson['id']=$id[0]['id'];
			echo json_encode($idJson);
		}
	}
?>