<?php
/**
* 处理梦想的标题和图片的后台存储
*/
class DreamAction extends Action
{
	public function saveDream(){
		/**
		 * 后台添加完图片和主题时这里将其存进数据库的Dream表中
		 * table：Dream
		 * Fileds:topic(存储主题)、image(存储图像的地址)
		 */
		$topic=trim($_POST['topic']);
		$imageInfo=$_FILES['image'];
		$imageName=$imageInfo['name'];
		$dreamTable=M('dream');
		if (!$topic&&!$imageName) {
			$this->error('提交的收据有错，请重新填写后再次提交');
		}else{
			if ($imageName) {
				/**
				 * [$file_type description]
				 * @var [type]
				 * 1、更改图片的名称为dream_topic.jpg的形式，并传到网站根目录的uploads目录下面
				 * 2、将图片的名称、主题、描述存到数据库
				 */
				$allowedType=array('.jpg', '.gif', '.png', '.jpeg');
				$tmpName=$imageInfo['tmp_name'];
				$file_type=strstr($imageName,'.');
				if (!in_array($file_type, $allowedType)) {
					$this->error('图片格式有误，请上传.jpg、.gif、.png、.jpeg格式的文件.');
					exit();
				}
				$modifiedImage="dream_topic{$file_type}";
				$finalPath='./Uploads/dream/'.$modifiedImage;//
				$data=array();
				if(!move_uploaded_file($tmpName, $finalPath))
				{
					echo"图片替换失败";
				}else{
					$dreamTable->where('1')->delete();//清除dream表中的主题
					$data['image']=$modifiedImage;
				}
				//mkdir('./del');说明./是网站根目录
			}
			if ($topic) {
				$data['topic']=$topic;
			}
			$dreamTable->add($data);
			echo "操作成功!";
			$this->redirect('Redirect/location',array('url'=>'44_list'),1,"页面跳转...");
		}
	}
}
?>