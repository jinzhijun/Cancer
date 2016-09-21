<?php

namespace Home\Controller;
use Think\Controller;
class WorksController extends Controller {
    
    function medicalrecordmanagement(){
        session_start();
            if($_SESSION['user_name']){
                $this->display();
            }else{
                echo "<script>window.top.location.href='../User/login.html';</script>";
            }
        
    }
    
    //①病理管理---查看病历
    function chakanbinli_search(){
             
            session_start();
            if($_SESSION['user_name']){
               //数据查询操作
               $works=new \Model\WorksModel();
               $info=$works->table('sw_binli')->select();
               $total=sizeof($info);
               $per=7;
               //2.实例化分页对象
                $page_obj=new \Tools\Page($total,$per);
               //3.自定义sql语句，获得每页信息
                $sql=" select * from sw_binli ".$page_obj->limit;
                $info=$works->query($sql);
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
    function chakanbinli_search1(){
            session_start();
            if($_SESSION['user_name']){
            $medicalid=$_POST['medicalid'];
            $name1=$_POST['name1'];
            $medicalname=$_POST['medicalname'];
            $gene=$_POST['gene'];
            $works=new \Model\WorksModel();
            $where['MedicalID']=array('like',$medicalid.'%');
            $where['Name']=array('like',$name1.'%');
            $where['MedicalName']=array('like',$medicalname.'%');
            //$where['Synonyms']=array('like',$gene.'%');
            $info=$works->table('sw_binli')->where($where)->select();
            
            $this->assign('info',$info);
            $this->display();
            }else{
                 echo "<script>window.top.location.href='../User/login.html';</script>";    
            }    
        }
    function chakanbinli_add1(){
            session_start();
            if($_SESSION['user_name']){
                    $name=$_POST['name']; 
                    $old=$_POST['old'];
                    $sex=$_POST['sex'];
                    $phonenumber=$_POST['phonenumber'];
                    $smoking=$_POST['smoking'];
                    $where=$_POST['where'];
                    $doctor=$_POST['doctor'];
                    $jiancejigou=$_POST['jiancejigou'];
                    $shiyanshi=$_POST['shiyanshi'];
                    $note=$_POST['note'];
                    $illhistory=$_POST['illhistory'];
                    $jiwangshi=$_POST['jiwangshi'];
                    $jiasushi=$_POST['jiasushi'];
                    $jiyinjianceshi=$_POST['jiyinnjianceshi'];
                    $quyangweizhi=$_POST['quyangweizhi'];
                    $quyangyisheng=$_POST['quyangyisheng'];
                    $time=$_POST['time'];
                    
                    $genes=new \Model\WorksModel();
                    $genes->GeneID=$geneid;
                    $genes->GeneSymbol=$genesymbol;
                    $genes->Synonyms=$synonyms;
                    $genes->GeneType=$genetype;
                    $genes->Chromosome=$chromosome;
                    $genes->Strand=$strand;
                    $genes->Start=$start;
                    $genes->End=$end;
                    $genes->Category=$category;

                    $z=$genes->table('sw_binli')->add();
                    if($z){
                       $this->redirect('chakanbinli_add',array('MedicalID'=>$works_id),2,添加数据成功);

                    }else{
                       echo "<font color='red'>添加数据失败！</font>";
                       $this->display();
                    }
            }else{
                echo "<script>window.top.location.href='../User/login.html';</script>";
            }
           
        }   
    function chakanbinli_xiugai($works_id){
        session_start();
            if($_SESSION['user_name']){
                    $works=D('Works');
                    //两个逻辑:展示、收集
                    if(!empty($_POST)){
                         $z= $works->talbe('sw_binli')->save($_POST);
                         if($z){
                           //页面跳转 用redirect()方法进行添加
                           //$this->redirect(操作方法，参数，延迟时间，提示信息);
                           $this->redirect('chakanbinli_search',array(),3,'修改信息成功');
                       }  else {
                           $this->redirect('chakanbinli_add',array('ID'=>$genes_id),3,'修改信息失败');
                       }
                        
                    }else{
                     //根据$goods_id获得被修改的商品信息，并给模板展示
                    //find()方法值负责给返回一条记录结果，并且是[一维]数组返回
                    $where['ID']=array('eq',$works_id);
                    $info=$works->table('sw_binli')->where($where)->find();
                    
                    $this->assign('info',$info);
                    $this->display('chakanbinli_add');
                    }
            }else{
                echo "<script>window.top.location.href='../User/login.html';</script>";
            }
        
        
    }
    
    //①病理管理---随诊记录
    function suizhenjilu_search(){
             
            session_start();
            if($_SESSION['user_name']){
               //数据查询操作
               $works=new \Model\WorksModel();
               $info=$works->table('sw_binli')->select();
               $total=sizeof($info);
               $per=7;
               //2.实例化分页对象
                $page_obj=new \Tools\Page($total,$per);
               //3.自定义sql语句，获得每页信息
                $sql=" select * from sw_binli ".$page_obj->limit;
                $info=$works->query($sql);
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
    function suizhenjilu_search1(){
            session_start();
            if($_SESSION['user_name']){
            $medicalid=$_POST['medicalid'];
            $name1=$_POST['name1'];         
            $works=new \Model\WorksModel();
            $where['MedicalID']=array('like',$medicalid.'%');
            $where['Name']=array('like',$name1.'%');
            $info=$works->table('sw_binli')->where($where)->select();
            
            $this->assign('info',$info);
            $this->display();
            }else{
                 echo "<script>window.top.location.href='../User/login.html';</script>";    
            }    
        }
    
    //③治疗方案建议
    function treatmentproposal_search(){
             
            session_start();
            if($_SESSION['user_name']){
               //数据查询操作
               $works=new \Model\WorksModel();
               $info=$works->table('sw_binli')->select();
               $total=sizeof($info);
               $per=7;
               //2.实例化分页对象
                $page_obj=new \Tools\Page($total,$per);
               //3.自定义sql语句，获得每页信息
                $sql=" select * from sw_binli ".$page_obj->limit;
                $info=$works->query($sql);
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
    function treatmentproposal_search1(){
            session_start();
            if($_SESSION['user_name']){
            $medicalid=$_POST['medicalid'];
            $name=$_POST['name'];
            $works=new \Model\WorksModel();
            $where['MedicalID']=array('like',$medicalid.'%');
            $where['Name']=array('like',$name.'%');
            $info=$works->table('sw_binli')->where($where)->select();
            
            $this->assign('info',$info);
            $this->display();
            }else{
                 echo "<script>window.top.location.href='../User/login.html';</script>";    
            }    
        }
        
    //④查看报告
    function viewreport_search(){
             
            session_start();
            if($_SESSION['user_name']){
               //数据查询操作
               $works=new \Model\WorksModel();
               $info=$works->table('sw_binli')->select();
               $total=sizeof($info);
               $per=7;
               //2.实例化分页对象
                $page_obj=new \Tools\Page($total,$per);
               //3.自定义sql语句，获得每页信息
                $sql=" select * from sw_binli ".$page_obj->limit;
                $info=$works->query($sql);
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
    function viewreport_search1(){
            session_start();
            if($_SESSION['user_name']){
            $medicalid=$_POST['medicalid'];
            $name1=$_POST['name1'];
            $works=new \Model\WorksModel();
            $where['MedicalID']=array('like',$medicalid.'%');
            $where['Name']=array('like',$name1.'%');
            $info=$works->table('sw_binli')->where($where)->select();
            
            $this->assign('info',$info);
            $this->display();
            }else{
                 echo "<script>window.top.location.href='../User/login.html';</script>";    
            }    
        }
        
    //⑥查看参考文献
    function queryreferencedata_search(){
             
            session_start();
            if($_SESSION['user_name']){
               //数据查询操作
               $works=new \Model\WorksModel();
               $info=$works->table('sw_reference')->select();
               $total=sizeof($info);
               $per=7;
               //2.实例化分页对象
                $page_obj=new \Tools\Page($total,$per);
               //3.自定义sql语句，获得每页信息
                $sql=" select * from sw_reference ".$page_obj->limit;
                $info=$works->query($sql);
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
    function queryreferencedata_search1(){
            session_start();
            if($_SESSION['user_name']){
            $title=$_POST['title'];
            $diseaseclass=$_POST['diseaseclass'];
            $keyword=$_POST['keyword'];
            $works=new \Model\WorksModel();
            $where['ArticleTitle']=array('like',$title.'%');
            $where['DiseaseType']=array('like',$diseaseclass.'%');
            //$where['Name']=array('like',$keyword.'%');
            $info=$works->table('sw_reference')->where($where)->select();
            
            $this->assign('info',$info);
            $this->display();
            }else{
                 echo "<script>window.top.location.href='../User/login.html';</script>";    
            }    
        }
      
    function handle_step1(){
        session_start();
            if($_SESSION['user_name']){
           $illnumber=$_POST['illnumber'];
//            $illhistory=$_POST['illhistory'];
//            $illreport=$_POST['illreport'];
            
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