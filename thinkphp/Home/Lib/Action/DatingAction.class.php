<?php
    /**
    * 处理约会版块前台的数据
    */
    class DatingAction extends Action
    {
        public function uploadimages(){
        //$date = time();
        $targetFolder = './Uploads/dating/'; // Relative to the root
        // if(I('action')=='del'){//判断是否删除图片
        //     $img = I('img');
        //     if(in_array($img,$_SESSION['uploadimages'])){//检查提交的图片是否存在session
        //         unset($_SESSION['uploadimages'][array_search($img,$_SESSION['uploadimages'])]);//删除对应的图片
        //         unlink($targetFolder.'s_'.$img); 
        //         unlink($targetFolder.'m_'.$img);
        //         unlink($targetFolder.'b_'.$img);
        //     }
        //     foreach($_SESSION['uploadimages'] as $key => $value){
        //         echo '<img src="'.$targetFolder.'m_'.$value.'" width="300" height="300" /><br />';
        //         echo '<a href="javascript:void(0);" id="'.$value.'" class="mylink">删除</a><br />';
 
 
        //     }
        //     //session('uploadimages',NULL);
        // }else{
            //上传图片
            import("ORG.Net.UploadFile");
            $upload = new UploadFile();
            $upload->maxSize  = 10485760 ;
            $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');
            $upload->savePath =  $targetFolder;
            $upload->thumb = true;
            $upload->thumbPrefix='s_,m_,b_';
            $upload->thumbMaxWidth='200,300,620';
            $upload->thumbMaxHeight='120,180,300';
            $upload->thumbRemoveOrigin=true;
            if(!$upload->upload()) {
                echo $upload->getErrorMsg();
            }else{
                $info =  $upload->getUploadFileInfo();
            }
            // $_SESSION['uploadimages'][] = $info[0]['savename'];//将图片放进session，并以数组形式保存
            // foreach($_SESSION['uploadimages'] as $key => $value){
            //     echo '<img src="'.$targetFolder.'m_'.$value.'" width="300" height="300" /><br />';
            //     echo '<a href="javascript:void(0);" id="'.$value.'" class="mylink">删除</a><br />';
            // }
       // }
    }
     public function uploadImage(){
        /**
         * 上传照片做的后台处理:上传图片到指定路径 2、将图片信息放到数据库中
         * 1、 user_name 2、sub_time(Y-m-j) 3、path:sub_time+用户名 4、words 5、approving_num:0
         */
         $userName=$_SESSION['user_name'];
         $subTime=date('Y-m-j');
         $imageInfo=$_FILES['file_upload'];
         $imageName=$imageInfo['name'];
         $imageType=strstr($imageName,'.');
         $path=$userName.$subTime.$imageType;
         $words=$_GET['words'];
         $data['user_name']=$userName;
         $data['sub_time']=$subTime;
         $data['path']=$path;
         $data['words']=$words;
         $sweetImageTable=M('sweet_image');
         $sweetImageTable->add($data);
         // echo $words;
         // 上传图片到指定目录
         $destination='./Uploads/sweet_images/$path';
         move_uploaded_file($userName['tmp_name'], $destination);
        
     }
     public function signIn(){
        /**
         * [$userName description]
         * @var [type]
         */
        $userName=$_GET['user_name'];
        $signCount=$_GET['sign_count'];
        $sweetSignTable=M('sweet_sign');
        $signDate=date('Y-m-j');
        $sweetSignTable->sign_date=$signDate;
        $sweetSignTable->sign_count=$signCount;
        $sweetSignTable->where("user_name='$userName'")->save();
     }
     public function searchImage(){
        $nameSearch=$_GET['user_name'];
        $sweetImageTable=M('sweet_image');
        $imagePathes=$sweetImageTable->where("user_name='$nameSearch'")->order('sub_time desc')->limit(4)->select();
        // echo json_encode($imagePathes);
        if(!$imagePathes){
            $imagePathes=array();
            echo json_encode($imagePathes);
        }else{
            echo  json_encode($imagePathes);
        }
        
     }
    }
?>