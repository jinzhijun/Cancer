<?php
    //命名空间
    namespace Admin\Controller;
    //use Think\Controller;
use Tools\AdminController;
    
    class ReferenceController  extends AdminController{

        function search(){
            
                //数据查询操作
                $reference=new \Model\ReferenceModel();
                $info=$reference->select();
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
           
        }

        function search_handle(){
            
                $id=$_POST['id'];
                $articletitle=$_POST['articletitle'];
                $reference=new \Model\ReferenceModel();
                $where['GeneSymbol']=array('like',$id.'%');
                $where['ArticleTitle']=array('like',$articletitle.'%');
                $info=$reference->where($where)->select();

                $this->assign('info',$info);
                $this->display();
            

        }

       
       //数据添加
        function tianjia(){
           $reference=new \Model\ReferenceModel();
            //两个逻辑：显示、收集
            if(!empty($_POST)){
                    //dump($_POST); 
                    $z=$reference->add($_POST); 
                    if($z){
                         $this->redirect('search',array(),2,'添加数据成功！');
                     }else{
                        $this->redirect('tianjia',array(),2,'添加数据失败！');
                     }
            }else{
                $info=$reference->where('ID>0')->select();
                //dump($info);
                $this->assign('info',$info);
                $this->display();    
            }
        }

        function xiugai($id){
            
             $reference=D('Reference');
               //两个逻辑:展示、收集
                if(!empty($_POST)){
                	 $id=$_POST['id'];
                     $z= $reference->where('ID='.$id)->save($_POST);
                     if($z){
                       //页面跳转 用redirect()方法进行添加
                       //$this->redirect(操作方法，参数，延迟时间，提示信息);
                       $this->redirect('search',array(),3,'修改数据成功');
                   }  else {
                       $this->redirect('tianjia',array('ArticleTitle'=>$genes_id),3,'修改数据失败');
                   }

                }else{
                 //根据$goods_id获得被修改的商品信息，并给模板展示
                //find()方法值负责给返回一条记录结果，并且是[一维]数组返回
                $where['ID']=array('eq',$id);
                $info=$reference->where($where)->find();
                 $info_A=$reference->where('ID>0')->select();
                   // dump($info_A);
                    $this->assign('info_A',$info_A);
                $this->assign('info',$info);
                $this->display();
                 }
           
        }

        function delete(){
          
                $string=$_GET['newIdDelet'];
                //dump($string);
                $reference=new \Model\ReferenceModel();
                $info=$reference->where('ID='.$string)->delete();
                if($info!=false){

                       $this->redirect('search','',2,删除数据成功);
                }else{
                        echo "<script>alert(失败);</script>";
                }   
           
        }
    }