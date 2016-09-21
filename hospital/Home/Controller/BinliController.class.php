<?php

namespace Home\Controller;
use Think\Controller;
class BinliController extends Controller {
        //病历信息查询
        function chakanbinli_search(){
             session_start();
            if($_SESSION['user_name']){
               //数据查询操作
               $binli=new \Model\BinliModel();
               $info=$binli->select();
               $total=sizeof($info);
               $per=7;
               //2.实例化分页对象
                $page_obj=new \Tools\Page($total,$per);
               //3.自定义sql语句，获得每页信息
                $sql=" select * from sw_binli ".$page_obj->limit;
                $info=$binli->query($sql);
                //dump($info);
               //4.获得页码列表
                $pagelist=$page_obj->fpage();
              //把获得的信息传递给模板使用
                $this->assign('pagelist',$pagelist);
                $this->assign('info',$info);
                $this->display();
             }else{
                echo "<script>window.top.location.href='../User/login.html';</script>";
            }
          }

          //病历信息检索
          function chakanbinli_search_handle(){
            session_start();
            if($_SESSION['user_name']){
                $medicalid=$_POST['medicalid'];
                $name1=$_POST['name1'];
                $medicalname=$_POST['medicalname'];
                $gene=$_POST['gene'];
                $binli=new \Model\BinliModel();
                $where['MedicalID']=array('like',$medicalid.'%');
                $where['Name']=array('like',$name1.'%');
                $where['MedicalName']=array('like',$medicalname.'%');
                //$where['Synonyms']=array('like',$gene.'%');
                $info=$binli->where($where)->select();
            
                $this->assign('info',$info);
                $this->display();
            }else{
                 echo "<script>window.top.location.href='../User/login.html';</script>";    
            }    
        }

         //数据添加
        function chakanbinli_tianjia(){
           $binli=new \Model\BinliModel();
            //两个逻辑：显示、收集
            if(!empty($_POST)){
                    //dump($_POST); 
                    $z=$binli->add($_POST); 
                    if($z){
                         $this->redirect('chakanbinli_search',array(),2,'添加数据成功！');
                     }else{
                        $this->redirect('chakanbinli_tianjia',array(),2,'添加数据失败！');
                     }
            }else{
                $info=$binli->where('ID>0')->select();
                //dump($info);
                $this->assign('info',$info);
                $this->display();    
            }
        }

        //查看病历
        function chakanbinli_chakan($id){
            session_start();
            if($_SESSION['user_name']){
                    $binli=D('Binli');
                     //根据$goods_id获得被修改的商品信息，并给模板展示
                    //find()方法值负责给返回一条记录结果，并且是[一维]数组返回
                    $where['ID']=array('eq',$id);
                    $info=$binli->where($where)->find();
                    
                    $this->assign('info',$info);
                    $this->display();
            }else{
                echo "<script>window.top.location.href='../User/login.html';</script>";
            }
        }

        //修改病历
        function chakanbinli_xiugai($id){
            session_start();
            if($_SESSION['user_name']){
                    $binli=D('Binli');
                    //两个逻辑:展示、收集
                    if(!empty($_POST)){
                         $z= $binli->save($_POST);
                         if($z){
                           //页面跳转 用redirect()方法进行添加
                           //$this->redirect(操作方法，参数，延迟时间，提示信息);
                           $this->redirect('chakanbinli_search',array(),3,'修改信息成功');
                       }  else {
                           $this->redirect('chakanbinli_xiugai',array('ID'=>$id),3,'修改信息失败');
                       }
                        
                    }else{
                     //根据$goods_id获得被修改的商品信息，并给模板展示
                    //find()方法值负责给返回一条记录结果，并且是[一维]数组返回
                    $where['ID']=array('eq',$id);
                    $info=$binli->where($where)->find();
                    
                    $this->assign('info',$info);
                    $this->display();
                    }
            }else{
                echo "<script>window.top.location.href='../User/login.html';</script>";
            }
        }

        //随诊记录查询
        function suizhenjilu_search(){
             
            session_start();
            if($_SESSION['user_name']){
               //数据查询操作
               $binli=new \Model\BinliModel();
               $info=$binli->select();
               $total=sizeof($info);
               $per=7;
               //2.实例化分页对象
                $page_obj=new \Tools\Page($total,$per);
               //3.自定义sql语句，获得每页信息
                $sql=" select * from sw_binli ".$page_obj->limit;
                $info=$binli->query($sql);
                //dump($info);
               //4.获得页码列表
                $pagelist=$page_obj->fpage();
              //把获得的信息传递给模板使用
                $this->assign('pagelist',$pagelist);
                $this->assign('info',$info);
                $this->display();
             }else{
                echo "<script>window.top.location.href='../User/login.html';</script>";
            }
          }

          //随诊记录查询数据
          function suizhenjilu_search_handle(){
            session_start();
            if($_SESSION['user_name']){
                $medicalid=$_POST['medicalid'];
                $name1=$_POST['name1'];         
                $binli=new \Model\BinliModel();
                $where['MedicalID']=array('like',$medicalid.'%');
                $where['Name']=array('like',$name1.'%');
                $info=$binli->where($where)->select();
                $this->assign('info',$info);
                $this->display();
            }else{
                 echo "<script>window.top.location.href='../User/login.html';</script>";    
            }    
        }
    









}