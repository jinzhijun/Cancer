<?php

namespace Home\Controller;
use Think\Controller;
class WorkflowController extends Controller {

	function handle_step1(){
        session_start();
            if($_SESSION['user_name']){
           		$illnumber=$_POST['illnumber'];
//              $illhistory=$_POST['illhistory'];
//              $illreport=$_POST['illreport'];
            
                $arr=array(
                	'illnumber' => I('illnumber'),
                	'illhistory'=> I('illhistory'),
                	'illreport' => I('illreport')
                );
            	F('step1',$arr,'./Data/');
            	echo "<script>window.location.href='./step2.html/';</script>";
            	//$this->display();
            }else{
                 echo "<script>window.top.location.href='../User/login.html';</script>";    
            }         
    }
    
     function handle_step2(){
        session_start();
            if($_SESSION['user_name']){
            $diseasename=$_POST['diseasename'];
//            $diseasestage1=$_POST['diseasestage1'];
//            $diseasestage2=$_POST['diseasestage2'];
           
             $arr=array(
                'diseasename' => I('diseasename'),
                'diseasestage1'=> I('diseasestage1'),
                'diseasestage2' => I('disasetage2')
                 
            );
            F('step2',$arr,'./Data/');
            echo "<script>window.location.href='./step3.html';</script>";
            //$this->display();
            }else{
                 echo "<script>window.top.location.href='../User/login.html';</script>";    
            }         
    }
    
    function handle_step3(){
        session_start();
            if($_SESSION['user_name']){
            $diseasename=$_POST['diseasename'];
            $diseasestage1=$_POST['diseasestage1'];
            $diseasestage2=$_POST['diseasestage2'];
           
            echo "<script>window.location.href='./step4.html';</script>";
            //$this->display();
            }else{
                 echo "<script>window.top.location.href='../User/login.html';</script>";    
            }         
    }
    
    function handle_step4(){
        session_start();
            if($_SESSION['user_name']){
            $diseasename=$_POST['diseasename'];
            $diseasestage1=$_POST['diseasestage1'];
            $diseasestage2=$_POST['diseasestage2'];
           
            echo "<script>window.location.href='./step5.html';</script>";
            //$this->display();
            }else{
                 echo "<script>window.top.location.href='../User/login.html';</script>";    
            }         
    }
    
    
    function step5(){
        session_start();
            if($_SESSION['user_name']){
            $json=F('step1','','./Data/');
            dump($json);
            //$arr=(Array)json_decode($json, true);
            //dump($arr);
            echo "<h1>最终结果如下：</h1>";
            echo "<table border=1px>";
            foreach($json as $item){
                echo "<tr><td>".$item."</td></tr>";
                //echo "<br/>";
            }
            echo "</table>";
           // $this->assign('info',$arr);
            
            //echo "$arr.illnumber";
            //echo "<script>window.location.href='./step5.html';</script>";
           // $this->display();
            }else{
                 echo "<script>window.top.location.href='../User/login.html';</script>";    
            }         
    }


















}