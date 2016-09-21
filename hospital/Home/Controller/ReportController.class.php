<?php

namespace Home\Controller;
use Think\Controller;
class ReportController extends Controller {


    function search(){
             
            session_start();
            if($_SESSION['user_name']){
               //数据查询操作
               $report=new \Model\ReportModel();
               $info=$report->table('sw_binli')->select();
               $total=sizeof($info);
               $per=7;
               //2.实例化分页对象
                $page_obj=new \Tools\Page($total,$per);
               //3.自定义sql语句，获得每页信息
                $sql=" select * from sw_binli ".$page_obj->limit;
                $info=$report->query($sql);
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
            $medicalid=$_POST['medicalid'];
            $name1=$_POST['name1'];
            $report=new \Model\ReportModel();
            $where['MedicalID']=array('like',$medicalid.'%');
            $where['Name']=array('like',$name1.'%');
            $info=$report->table('sw_binli')->where($where)->select();
            
            $this->assign('info',$info);
            $this->display();
            }else{
                 echo "<script>window.top.location.href='../User/login.html';</script>";    
            }    
        }














}