<?php
/**
* 关于面单部分的处理
* table:demo;
*/
class FreeLunchAction extends Action
{
		public function index(){

		}
		/**
		 * [saveDemo description]
		 * @return [type] [description]
		 * 作用：存储demo
		 * 要做的工作：将对应的picture后缀改掉成jpg,
		 * 				将出事的后缀名、topic、description存到数据库
		 */
		public function saveDemo()
		{
			$description=trim($_POST['description']);
			$topic=trim($_POST['topic']);
			$imageInfo=$_FILES['picture'];
			$imageName=$imageInfo['name'];
			if (!$description&&!$topic&&!$imageName) {
				$this->error('图片、主题、描述至少填写一个，请重新填写后再次提交');
			}else{
				$area=$_POST['area'];//1-9中的1
				$demo=$_POST['demo'];//1-9中的9
				$demoTable=M('demo');
				$picAlter="";
				$topicAlter="";
				$descriptionAlter="";
				$deletedString="主题评论保留<br>";
				if ($imageName) {
					/**
					 * [$file_type description]
					 * @var [type]
					 * 1、更改图片的名称为1-9.jpg的形式，并传到网站根目录的uploads目录下面
					 * 2、将图片的名称、主题、描述存到数据库
					 */
					$allowedType=array('jpg', 'gif', 'png', 'jpeg');
					//$upload->allowExts=array('jpg', 'gif', 'png', 'jpeg');//设置上传类型
					//$upload->savePath=array('./Uploads/freeLunch');
					$tmpName=$imageInfo['tmp_name'];
					$file_type=strstr($imageName,'.');
					if (!in_array($file_type, $allowedType)) {
						$this->error('图片格式有误，请上传jpg、gif、png、jpeg格式的文件！');
						exit();
					}
					$modifiedImage="$area-$demo$file_type";
					$finalPath='Uploads/freeLunch/'.$modifiedImage;//
					if(!move_uploaded_file($tmpName, $finalPath))
					{
						echo"图片替换失败";

					}else{
						//$picAlter="picture='$modifiedImage'";//修改表设置图片名称
						$demoTable->picture="$modifiedImage";
					}
					//mkdir('./del');说明./是网站根目录
				}
				if ($topic) {
					//$topicAlter="topic='$topic'";
					$demoTable->topic="$topic";
				}
				if ($description) {
					//$descriptionAlter="description='$description'";
					$demoTable->description=$description;
				}
				$demo="$area-$demo";
				$condition="demo='$demo'";
				$demoTable->where($condition)->save();//更改demo数据库成功
				$del=$_POST['del'];
				$commentTable=M('comment');
				$demoTable=M('demo');
				if ($del=='1') {
					$commentTable->where("demo='$demo'")->delete();//从comment数据库中删除相关的数据
					$demoTable->where("demo='$demo'")->delete();//从demo数据库中删除相关的数据
					$deletedString="与前主题相关的评论删除成功";
				}
				echo $deletedString;
				echo "操作成功!";
				$this->redirect('Redirect/location',array('url'=>'43_list'),1,"页面跳转...");

			}
		}
}
?>