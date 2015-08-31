<?php
    /**
    * 处理智商版块数据
    */
    class WisdomAction extends Action
    {
        public function saveData(){
            /**
             * 1、存储照片
             * 2、存储两个主题
             * 3、存储问题题目
             * 4、存储选项
             * 5、存储正确答案
             */
            //1、照片
            $topic1=trim($_POST['topic1']);
            $topic2=trim($_POST['topic2']);
            $question=trim($_POST['question']);
            $choices=$_POST['choice'];//一个数组
            $anser=$_POST['anser'];
            $imageInfo=$_FILES['image'];
            $imageName=$imageInfo['name'];

            $dreamTable=M('dream');
            if (!$anser&&!$choices&&!$question&&!$topic2&&!$topic1&&!$imageName) {
                $this->error('提交的收据有错，请重新填写后再次提交');
            }else{
                $wisdomTable=M('wisdom');
                $allowedType=array('.jpg', '.gif', '.png', '.jpeg');
                $tmpName=$imageInfo['tmp_name'];
                $file_type=strstr($imageName,'.');
                if (!in_array($file_type, $allowedType)) {
                    $this->error('图片格式有误，请上传.jpg、.gif、.png、.jpeg格式的文件.');
                    exit();
                }
                $modifiedImage="wisdom_demo{$file_type}";
                $imagePre="__ROOT__/Uploads/wisdom/";
                $finalPath='Uploads/wisdom/'.$modifiedImage;//
                if(!move_uploaded_file($tmpName, $finalPath))
                {
                    // var_dump(is_dir($finalPath));
                    // echo "$tmpName<br>";
                    // echo "$finalPath";
                    die();
                    // $this->error('图片格式有误.');

                }
                $wisdomTable->image=$imagePre.$modifiedImage;
                $wisdomTable->topic1=$topic1;
                $wisdomTable->topic2=$topic2;
                $wisdomTable->question=$question;
                $wisdomTable->choice1=$choices[0];
                $wisdomTable->choice2=$choices[1];
                $wisdomTable->choice3=$choices[2];
                $wisdomTable->choice4=$choices[3];
                $wisdomTable->anser=$anser;
                
                
                $wisdomTable->where('1')->save();
                //echo $wisdomTable->getLastSql();
                $this->redirect('Redirect/location',array('url'=>'45_list'),1,"操作成功页面跳转...");
            }
        }
    }
?>