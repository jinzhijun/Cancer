<?php
    namespace Home\Controller;
    use Think\Controller;
    use Think\Verify;
    
    class UserController extends Controller {
            function login(){
                session_start();
                //接收errno
                if(!empty($_GET['errno'])){
                        //接收错误编码
                        $errno=$_GET['errno'];
                        if($errno==1){
                            echo "<script>window.alert('你的用户名或者密码错误！')</script>";
                               
                        }else if($errno==2){
                            echo "<script>window.alert('你的验证码错误！')</script>";
                                //echo "<br/><font color='red' size='3'>你的验证码错误！</font>";
                        }
                        echo '<script type="text/javascript">location.href="login.html";</script>';        
                }
                $this->display();
                
            }
            //用户登入系统
            function checklogin(){

                    //获取用户的别名和密码
                    $username=$_POST["username"];
                    $password=$_POST["password"];
                    $checkCode=$_POST['checkcode'];
                    //看看验证码是否OK
                    if(!empty($_POST)){
                       $vry=new \Think\Verify();
                       if($vry->check($checkCode)){
                              //用户和密码检验
                              $user=new \Model\UserModel();
                              $info=$user->checkNamePwd($username,$password);
                              if($info){
                                    
                                  //session持久化用户信息，页面跳转到后台
                                    session('user_id',$info['user_id']);
                                    session('user_name',$info['username']);
                                    header("Location:/Cancer/hospital/index.php/Home/Index/index.html");
                                  
                                   
                              }else{
                                    header("Location:login.html?errno=1");
                              }
                       }else{
                             header("Location:login.html?errno=2");
                             /*echo '<script type="text/javascript">top.location.href="login.php?errno=2";</script>';*/
                             
                       }
                    }else{
                        echo"<script>alert'发生未知错误！请重新登录';</script>";
                    }
            }
            function logout(){
                    session_start();
                    session(null);   
                    window.open('User/login','_parent','',false);
                    //$this->redirect('User/login');
                    exit();
            }
            function register(){
                
               $user=D('User');
                //$user=new \Model\UserModel(); 这个方法没用
		//两个逻辑：展示  收集
                if(!empty($_POST)){
                   // $_POST['user_hobby']=implode(',',$_POST['user_hobby']);//把爱好的信息由array变为string
                   
                     //收集表单信息[$_POST]并返回,同时促发自动表单验证 ,过滤非法字段
                    $shuju=$user->create();  //返回是在数据的时候才进行添加
                    
                    if($shuju){
                       if($user -> add($shuju)){
                             echo "存入数据成功";
                            }
                    }else{
                        dump($user->getError());  //返回错误的信息
                    }
                }
                    
                $this->display(); 
                    
                
		
		
	}
        
        
            //用户名的校验
            function checkNM($name){
                $info=D('User')->where("username='$name'")->find();
                if($info){
                    echo "<font color=red>用户名已经存在，请换一个!</font>";
                }else{
                    echo "<font color=blue>可以使用此名字!</font>";
                }
                exit;
            }
            
             //邮箱的的校验
            function checkEmail($email){
                $info=D('User')->where("user_email='$email'")->find();
                if($info){
                    echo "<font color=red>邮箱已经被注册!</font>";
                }else{
                    echo "<font color=blue>可以使用此邮箱!</font>";
                }
                exit;
            }
            
             //手机号的校验
            function checkPhone($phone){
                $info=D('User')->where("user_tel='$phone'")->find();
                if($info){
                    echo "<font color=red>手机号已经被注册!</font>";
                }else{
                    echo "<font color=blue>可以使用此手机号!</font>";
                }
                exit;
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
}