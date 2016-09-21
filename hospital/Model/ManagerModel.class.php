<?php

	namespace Model;
	use Think\Model;

	//为sw_manager数据表创建一个Model模型类
	//父类Model :ThinkPHP/Library/Think/Model.class.php
	class ManagerModel extends Model {
		
            //用户名和密码校验
            function checkNamePwd($nm,$pwd){
                //第一种方法
                
                //1. 根据$nm判断名字是否存在
               $info=$this->where("mg_name='$nm'")->find();
               //dump($info);   //有结果返回结果的记录信息，否则返回null
                //2. 如果$nm的记录存在，就让记录的密码和$pwd作比较
                if($info['mg_pwd']===$pwd){
                        return $info;
                    
                    
                }
                return null;
                
                //第二种方法
                //getByMg_name()  是父类Model利用__call()封装的方法
                //$info=$this->getByMg_name($nm);
                //$info=null 说明用户名错误
                //$info =一维数组 用户名正确
                //$info 不为null 就可以继续验证密码
                
                //if($info != null){
                    //验证密码
                   // if($info['mg_pwd'] != $pwd){
                     //   return false;
                   // }else{
                      //  return $info;
                  //  }
                    
                    
                    
               // }else{
                   // return false;
                
                
            }
		
	
        }

