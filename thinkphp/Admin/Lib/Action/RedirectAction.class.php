<?php
// 本类由系统自动生成，仅供测试用途
class RedirectAction extends Action {

    public function redirect(){
      //通过na这个参数来获取要显示的页面的url
      $this->display($_GET['na']);
    }

    //用于后台系统管理模块中各页面的显示
    public function location(){
    	$this->display($_GET['url']);
    }
    //处理首页图片、内容的方法
    public function imedit1(){
    	$img = $_FILES['file'];
		if ($img)
		{

			//目标路径	
			
			$dir = "Home/Tpl/Public/images"; 
			$i   = 0;

		foreach ($img['tmp_name'] as $value)

		{

			$filename  = $img['name'][$i]; //var_dump("需要上传图片的名称为".$filename); echo "<br />";//d1.jpg

			//$filetype  = substr(strrchr($filename,"."),1); //获取文件后缀名

			//$filename1 = basename($filename,".jpg"); //获取文件名称(不包括后缀名)

			//$newname   = $filename1.$area.".".$filetype; //组合成文件新名字
			$newname = $filename;


			if ($value)

			{

				$savepath = "$dir/$newname"; 

				//var_dump("最终上传路径".$savepath); echo "<br />";

				$state = move_uploaded_file($value, $savepath);

				//如果上传成功，预览

				if($state)

				{

					echo "图片上传结果：上传成功";

				}
				else{
					echo "图片上传结果：上传失败";
				}

			}

				$i++;

		}

		}
//*********************文字替换*************************************
		 $User = M("d1"); 

		if($_POST['submit']) {

			//第一组文字

			$name1 = $_POST['name1'];
			if($name1!='免') {
				$data['txtarea'] = $name1;
				$User->where('location=1')->save($data); 
			}
			
			//第二组文字

			$name2 = $_POST['name2'];
			if($name2!='梦') {
				$data['txtarea'] = $name2;
				$User->where('location=2')->save($data); 
			}

			//第三组文字

			$name3 = $_POST['name3'];
			if($name3!='智') {
				$data['txtarea'] = $name3;
				$User->where('location=3')->save($data); 
			}

			//第四组文字

			$name4 = $_POST['name4'];
			if($name4!='约') {
				$data['txtarea'] = $name4;
				$User->where('location=4')->save($data); 
			}

			//第五组文字
			$name5 = $_POST['name5'];
			if($name5!='影') {
				$data['txtarea'] = $name5;
				$User->where('location=5')->save($data); 
			}

		}
		$this->display('Admin/Tpl/Redirect/41_list.html');

    	}


//********玩乐之免单图片的编辑***************************************************
    	public function imedit2(){

    	$turn = $_POST['area'];	
    	$img = $_FILES['file'];
		if ($img)
		{
			//目标路径	
			$dir = "Home/Tpl/Public/images/$turn"; var_dump($dir);
			$i   = 0;

		foreach ($img['tmp_name'] as $value)

		{

			$filename  = $img['name'][$i]; //var_dump("需要上传图片的名称为".$filename); echo "<br />";//d1.jpg

			//$filetype  = substr(strrchr($filename,"."),1); //获取文件后缀名

			//$filename1 = basename($filename,".jpg"); //获取文件名称(不包括后缀名)

			//$newname   = $filename1.$area.".".$filetype; //组合成文件新名字
			$newname = $filename;


			if ($value)

			{

				$savepath = "$dir/$newname"; 

				//var_dump("最终上传路径".$savepath); echo "<br />";

				$state = move_uploaded_file($value, $savepath);

				//如果上传成功，预览

				if($state)

				{

					echo "图片上传结果：上传成功";

				}
				else{
					echo "图片上传结果：上传失败";
				}

			}

				$i++;

		}

		}
		$this->display("Admin/Tpl/Redirect/42_list.html");
    	}	
   

}