<?php
    //命名空间
    namespace Admin\Controller;
    //use Think\Controller;
use Tools\AdminController;
    
    class BiomarkerController  extends AdminController{
        
        //列表展示
        function search(){
            //数据查询操作
               $biomarker=new \Model\BiomarkerModel();
               $info=$biomarker->select();
               $total=sizeof($info);
               $per=7;
            //2.实例化分页对象
                $page_obj=new \Tools\Page($total,$per);
            //3.自定义sql语句，获得每页信息
                $sql=" select * from sw_biomarker ".$page_obj->limit;
                $info=$biomarker->query($sql);
                //dump($info);
            //4.获得页码列表
                $pagelist=$page_obj->fpage();
                //把获得的信息传递给模板使用
                $this->assign('pagelist',$pagelist);
                $this->assign('info',$info);
                $this->display();
        }

        //数据查询
        function search_handle(){
            $genesymbol=$_POST['genesymbol'];
            $synonyms=$_POST['synonyms'];
            $biomarker=new \Model\BiomarkerModel();
            $where['GeneSymbol']=array('like',$genesymbol.'%');
            $where['Synonyms']=array('like',$synonyms.'%');
            $info=$biomarker->where($where)->select();
            $this->assign('info',$info);
            $this->display();
        }

        //数据添加
        function tianjia(){
           $biomarker=new \Model\BiomarkerModel();
            //两个逻辑：显示、收集
            if(!empty($_POST)){
                    //$category=$_POST['Category'];
                   // dump($category); 
                    $z=$biomarker->add($_POST); 
                    if($z){
                         $this->redirect('search',array(),2,'添加数据成功！');
                     }else{
                        $this->redirect('tianjia',array(),2,'添加数据失败！');
                     }
            }else{
                $info=$biomarker->where('ID>0')->select();
                 $info_A=$biomarker->Distinct(true)->field('Category')->select();
                //dump($info);
                $this->assign('info',$info);
                 $this->assign('info_A',$info_A);
                $this->display();    
            }
        }
    
        //修改数据展示并修改
        function xiugai($id){
            $biomarker=D('Biomarker');
            //两个逻辑:展示、收集
            if(!empty($_POST)){
            $id=$_POST['id'];
            $z= $biomarker->where('ID='.$id)->save($_POST);
            if($z){
                //页面跳转 用redirect()方法进行添加
                //$this->redirect(操作方法，参数，延迟时间，提示信息);
                $this->redirect('search',array(),3,'修改数据成功');
            }else {
                $this->redirect('tianjia',array('ID'=>$genes_id),3,'修改数据失败');
                }
            }else{
                    //根据$id获得被修改的数据信息，并给模板展示
                    //find()方法值负责给返回一条记录结果，并且是[一维]数组返回
                    $where['ID']=array('eq',$id);
                    $info=$biomarker->where($where)->find();
                    //dump($info);
                     $info_A=$biomarker->Distinct(true)->field('Category')->select();
                   // dump($info_A);
                      $info_B=$biomarker->Distinct(true)->field('Strand')->select();
                    $this->assign('info_A',$info_A);
                    $this->assign('info_B',$info_B);
                    $this->assign('info',$info);
                    
                    $this->display();
            }
        }

        //删除数据      
        function delete(){
                    $string=$_GET['newIdDelet'];
                    //dump($string);
                    $biomarker=new \Model\BiomarkerModel();
                    $info=$biomarker->where('ID='.$string)->delete();
                    if($info!=false){

                           $this->redirect('search','',2,删除数据成功);
                    }else{
                            echo "<script>alert(失败);</script>";
                    }
            
        }

    }