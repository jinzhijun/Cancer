<?php
        //命名空间
	namespace Admin\Controller;
	//use Think\Controller;
use Tools\AdminController;
        use Think\Verify;

        class ManagerController extends AdminController{
		//管理员登录系统
		function login(){
                    
                    
			//两个逻辑：展示 收集
                        if(!empty($_POST)){
                            $vry=new \Think\Verify();
                            if($vry->check( $_POST['captcha'])){
                                //用户名和密码校验
                                $manager=new \Model\ManagerModel();
                                //在ManageModel里边丰富一个checkNamePwd方法，用户校验用户名和密码
                                //校验成功后把当前管理员的一条记录信息都返回
                                //校验失败返回null
                                $info=$manager->checkNamePwd($_POST[admin_user],$_POST[admin_psd]);
                                if($info){
                                    //session持久化用户信息，页面跳转到后台
                                    session('admin_id',$info['mg_id']);
                                    session('admin_name',$info['mg_name']);
                                    $this->redirect('Index/index');   //页面跳转
                                }else
                                echo "用户名或密码错误";
                                 
                                
                            }else
                            echo "验证码错误";
                            
                            
                        }
			$this->display();
                    
		}
                
         //退出系统
        function logout(){
             session(null);
             $this->redirect('Manager/login');
        }
            
        //输出验证码
                function verifyImg(){
                    
                    //给验证码做配置
                    $cfg=  array(
                         'imageH'  => 45,   //验证码图片的高度
                         'imageW'  => 100,  //验证码图片宽度
                         'fontSize' =>15,   //验证码字体大小
                         'length' => 4,      //验证码位数
                         'fontttf'=>'4.ttf',         //验证码字体，不设置随机获取
                    );
                    
                    //实例化Verify类
                    $very=new Verify($cfg);
                    $very->entry(); //输出验证码
                 }
            
                //修改密码界面
                function changepassword(){
                    
                    $this->display();   
                
                }
                //修改密码逻辑实现
                function updatepassword(){
                    session_start();
                    if($_SESSION['admin_name']){
                        $oldpassword=$_POST['oldpassword'];
                        $password=$_POST['password'];
                        $repassword=$_POST['repassword'];
                        $data['mg_id']=$_SESSION['admin_id'];
                        $manager=new \Model\ManagerModel();
                        //$sql="select * from sw_manager where (mg_pwd='".$oldpassword."' and mg_id='".$_SESSION['admin_id']."')";
                        if($password!=$repassword||strlen($password)<6||strlen($repassword)>12){
                            echo "<script>alert('两次输入的新密码不正确，请重新输入！');</script>";
                        }else{
                            $info=$manager->where($data)->find();
                            //dump($info);
//                            $info=mysql_fetch_object(mysql_query($sql));
                            if($info){
                               $z= $manager->where($data)->setField('mg_pwd',$password); 
                             
                                if($z){
                                    echo "<script>alert('密码修改成功！');</script>";
                                    $this->display(changepassword);
                                }else{
                                     echo "<script>alert('密码修改失败！');</script>";
                                }
                            }
//                                $sql="update sw_manager set mg_pwd='".$password."'where mg_id='".$_SESSION['admin_id']."'";
//                                mysql_query($sql) or die(mysql_error());
//                                
//                                
                           else{
                               //dump("mysql_num_rows(mysql_query($sql))");
                                echo "<script>alert('旧密码不正确，请重新输入！');</script>";
                            }
                            
                        }
                        
                    }else{
                        echo "<script>window.top.location.href='../Manager/login.html';</script>";
                    }
                }
        
        //后台管理员列表显示    
        function showlist(){
            
            //
            $info=D('Manager')->select();
            $this->assign('info',$info);
            $this->display();
        }      
}
        
        
