<?php

namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
       
     function index(){
         //session(null);
         session_start();
        if($_SESSION['user_name']){
              $this->display();
	}else{
            echo '<script type=text/javascript>location.href="../User/login.html";</script>';
            
        }
    }


    function head(){
         session_start();
         if($_SESSION['user_name']){
              $this->display();
	}else{
            echo '<script type=text/javascript>location.href="../User/login.html";</script>';
            
        }
        
    }

    
    //如果这个函数不创建 直接饮用html文件也可以显示，但是如果创建了就要写$this->display()不然模板不显示
    function medicalrecordmanagement(){
         session_start();
         if($_SESSION['user_name']){
              $this->display();
	}else{
            echo '<script type=text/javascript>location.href="../User/login.html";</script>';
            
        }
    }
}