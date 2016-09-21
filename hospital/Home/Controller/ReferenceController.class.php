<?php

namespace Home\Controller;
use Think\Controller;
class ReferenceController extends Controller {

    function search(){
             
            session_start();
            if($_SESSION['user_name']){
               //数据查询操作
               $reference=new \Model\ReferenceModel();
               $info=$reference->table('sw_reference')->select();
               $total=sizeof($info);
               $per=7;
               //2.实例化分页对象
                $page_obj=new \Tools\Page($total,$per);
               //3.自定义sql语句，获得每页信息
                $sql=" select * from sw_reference ".$page_obj->limit;
                $info=$reference->query($sql);
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


    function search_handle(){
            session_start();
            if($_SESSION['user_name']){
            $title=$_POST['title'];
            $diseaseclass=$_POST['diseaseclass'];
            $keyword=$_POST['keyword'];
            $reference=new \Model\ReferenceModel();
            $where['ArticleTitle']=array('like',$title.'%');
            $where['DiseaseType']=array('like',$diseaseclass.'%');
            //$where['Name']=array('like',$keyword.'%');
            $info=$reference->table('sw_reference')->where($where)->select();
            
            $this->assign('info',$info);
            $this->display();
            }else{
                 echo "<script>window.top.location.href='../User/login.html';</script>";    
            }    
        }















}