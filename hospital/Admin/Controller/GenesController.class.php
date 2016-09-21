<?php
    //命名空间
    namespace Admin\Controller;
    use Think\Controller;
    
    class GenesController  extends Controller{
        
        
        //①生物标记
        function biomarker_search(){
             
            session_start();
            if($_SESSION['admin_name']){
               //数据查询操作
               $genes=new \Model\GenesModel();
               $info=$genes->table('sw_biomarker')->select();
               $total=sizeof($info);
               $per=7;
               //2.实例化分页对象
                $page_obj=new \Tools\Page($total,$per);
               //3.自定义sql语句，获得每页信息
                $sql=" select * from sw_biomarker ".$page_obj->limit;
                $info=$genes->query($sql);
                //dump($info);
               //4.获得页码列表
                $pagelist=$page_obj->fpage();
              //把获得的信息传递给模板使用
                $this->assign('pagelist',$pagelist);
                $this->assign('info',$info);
                $this->display();
             }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
          }
        function biomarker_search1(){
            session_start();
            if($_SESSION['admin_name']){
            $genesymbol=$_POST['genesymbol'];
            $synonyms=$_POST['synonyms'];
            $genes=new \Model\GenesModel();
            $where['GeneSymbol']=array('like',$genesymbol.'%');
            $where['Synonyms']=array('like',$synonyms.'%');
            $info=$genes->table('sw_biomarker')->where($where)->select();
            
            $this->assign('info',$info);
            $this->display();
            }else{
                 echo "<script>window.top.location.href='../Manager/login.html';</script>";
                
            }
            
        }
        function biomarker_add(){
            session_start();
            if($_SESSION['admin_name']){
            	 // $this->info=M('Genes')->table('sw_biomarker')->select();
            		$genes=new \Model\GenesModel();
            		$info=$genes->table('sw_biomarker')->getField('ID,Category');
            		//dump($info);
                $this->assign('info',$info);
                $this->display();
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
        function biomarker_add1(){
            session_start();
            if($_SESSION['admin_name']){
                    $geneid=$_POST['geneid']; $genesymbol=$_POST['genesymbol'];
                    $synonyms=$_POST['synonyms'];

                    $genetype=$_POST['genetype'];
                    $chromosome=$_POST['chromosome'];$strand=$_POST['strand'];
                    $start=$_POST['start'];$end=$_POST['end'];
                    $category=$_POST['category'];

                    $genes=new \Model\GenesModel();
                    $genes->GeneID=$geneid;
                    $genes->GeneSymbol=$genesymbol;
                    $genes->Synonyms=$synonyms;
                    $genes->GeneType=$genetype;
                    $genes->Chromosome=$chromosome;
                    $genes->Strand=$strand;
                    $genes->Start=$start;
                    $genes->End=$end;
                    $genes->Category=$category;

                    $z=$genes->table('sw_biomarker')->add();
                    if($z){
                       $this->redirect('biomarker_add',array('GeneID'=>$genes_id),2,添加数据成功);

                    }else{
                       echo "<font color='red'>添加数据失败！</font>";
                       $this->display();
                    }
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
           
        }
		function biomarker_update(){
            session_start();
            if($_SESSION['admin_name']){
				$id=$_POST['id'];
                    $geneid=$_POST['geneid']; $genesymbol=$_POST['genesymbol'];
                    $synonyms=$_POST['synonyms'];

                    $genetype=$_POST['genetype'];
                    $chromosome=$_POST['chromosome'];$strand=$_POST['strand'];
                    $start=$_POST['start'];$end=$_POST['end'];
                    $category=$_POST['category'];

                    $genes=new \Model\GenesModel();
                    $genes->GeneID=$geneid;
                    $genes->GeneSymbol=$genesymbol;
                    $genes->Synonyms=$synonyms;
                    $genes->GeneType=$genetype;
                    $genes->Chromosome=$chromosome;
                    $genes->Strand=$strand;
                    $genes->Start=$start;
                    $genes->End=$end;
                    $genes->Category=$category;
					
					//$where['GeneID']=array('eq',$genes_id);
					
                    $z=$genes->table('sw_biomarker')->where('ID='.$id)->save();
					
					//dump($z);
                    if($z){
                       $this->redirect('biomarker_search',array('ID'=>$genes_id),2,修改数据成功);

                    }else{
                       echo "<font color='red'>修改数据失败！</font>";
                       //$this->display();
                    }
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
           
        }
        function biomarker_xiugai($id){
            session_start();
            if($_SESSION['admin_name']){
				//$string=$_GET['newIdDelet'];
                    //$genes=D('Genes');
					$genes=new \Model\GenesModel();
                    //两个逻辑:展示、收集
                    // if(!empty($_POST)){
						 // $where['GeneID']=array('eq',$genes_id);
						// $z=$genes->table('sw_biomarker')->where($where)->save($_POST);
						 // dump($z);
                         // if($z){
                          //页面跳转 用redirect()方法进行添加
                          //$this->redirect(操作方法，参数，延迟时间，提示信息);
                           // $this->redirect('biomarker_search',array(),3,'修改数据成功');
                       // }  else {
                           // $this->redirect('biomarker_add',array('ID'=>$genes_id),3,'修改数据失败');
                       // }
                        
                    // }else{
                    // 根据$goods_id获得被修改的商品信息，并给模板展示
                   // find()方法值负责给返回一条记录结果，并且是[一维]数组返回
                    $where['ID']=array('eq',$id);
                    $info=$genes->table('sw_biomarker')->where($where)->find();
                    
                    $this->assign('info',$info);
                    $this->display();
                   //}
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
                
                
            
        }    
        function biomarker_delete(){
            session_start();
            if($_SESSION['admin_name']){
                    $string=$_GET['newIdDelet'];
                    //dump($string);
                    $genes=new \Model\GenesModel();
                    $info=$genes->table('sw_biomarker')->where('ID='.$string)->delete();
                    if($info!=false){

                           $this->redirect('biomarker_search','',2,删除数据成功);
                    }else{
                            echo "<script>alert(失败);</script>";
                    }
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
            
        }
        
        
        
        //②生物标记引物
        function biomarkerprimer_search(){
            session_start();
            if($_SESSION['admin_name']){
                       //数据查询操作
                   $genes=new \Model\GenesModel();
                   $info=$genes->table('sw_biomarkerprimer')->select();
                   $total=sizeof($info);
                   $per=7;
                   //2.实例化分页对象
                    $page_obj=new \Tools\Page($total,$per);
                   //3.自定义sql语句，获得每页信息
                    $sql=" select * from sw_biomarkerprimer ".$page_obj->limit;
                    $info=$genes->query($sql);
                    //dump($info);
                   //4.获得页码列表
                    $pagelist=$page_obj->fpage();
                  //把获得的信息传递给模板使用
                    $this->assign('pagelist',$pagelist);
                    $this->assign('info',$info);
                    $this->display();
            }else{
                 echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
            
        }
        function biomarkerprimer_search1(){
            session_start();
            if($_SESSION['admin_name']){
                $diseasename=$_POST['diseasename'];
                $genesymbol=$_POST['genesymbol'];
                $genes=new \Model\GenesModel();
                $where['DiseaseName']=array('like',$diseasename.'%');
                $where['GeneSymbol']=array('like',$genesymbol.'%');
                $info=$genes->table('sw_biomarkerprimer')->where($where)->select();
                //dump($info);
                $this->assign('info',$info);
                $this->display();
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
            
            
        }
        function biomarkerprimer_add(){
            session_start();
            if($_SESSION['admin_name']){
                $this->display();
            }else{
                 echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
        function biomarkerprimer_add1(){
            session_start();
            if($_SESSION['admin_name']){
                    $diseasename=$_POST['diseasename']; 
                    $productlength=$_POST['productlength'];
                    $genesymbol=$_POST['genesymbol'];
					$geneid=$_POST['geneid'];

                    $primerdescription=$_POST['primerdescription'];
                    $fortemplatestrand=$_POST['fortemplatestrand'];
                    $forstart=$_POST['forstart'];$forstop=$_POST['forstop'];
                    $fortim=$_POST['fortim'];$forgc=$_POST['forgc'];
                    $forprimersequence=$_POST['forprimersequence'];

                    $revtemplatestrand=$_POST['revtemplatestrand'];
                    $revstart=$_POST['revstart'];$revstop=$_POST['revstop'];
                    $revtim=$_POST['revtim'];$revgc=$_POST['revgc'];
                    $revprimersequence=$_POST['revprimersequence'];

                    $genes=new \Model\GenesModel();
                    $genes->DiseaseName=$diseasename;
                    $genes->ProductLength=$productlength;
                    $genes->GeneSymbol=$genesymbol;
					$genes->GeneID=$geneid;
                    $genes->PrimerDescription= $primerdescription;
                    $genes->For_TemplateStrand=$fortemplatestrand;
                    $genes->For_Start=$forstart;
                    $genes->For_Stop=$forstop;
                    $genes->For_Tm=$fortim;
                    $genes->For_GC=$forgc;
                    $genes->For_PrimerSequence=$forprimersequence;
                    $genes->Rev_TemplateStrand=$revtemplatestrand;
                    $genes->Rev_Start=$revstart;
                    $genes->Rev_Stop=$revstop;
                    $genes->Rev_Tm=$revtim;
                    $genes->Rev_GC=$revgc;
                    $genes->Rev_PrimerSequence=$revprimersequence;

                    $z=$genes->table('sw_biomarkerprimer')->add();
                    if($z){
                       $this->redirect('biomarkerprimer_add',array('DiseaseName'=>$diseasename),添加数据成功);

                    }else{
                       echo "<font color='red'>添加数据失败！</font>";
                       $this->display();
                    }
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
            
        }
		function biomarkerprimer_update(){
            session_start();
            if($_SESSION['admin_name']){
				$id=$_POST['id'];
                    $diseasename=$_POST['diseasename']; 
                    $productlength=$_POST['productlength'];
                    $genesymbol=$_POST['genesymbol'];
					$geneid=$_POST['geneid'];

                    $primerdescription=$_POST['primerdescription'];
                    $fortemplatestrand=$_POST['fortemplatestrand'];
                    $forstart=$_POST['forstart'];$forstop=$_POST['forstop'];
                    $fortim=$_POST['fortim'];$forgc=$_POST['forgc'];
                    $forprimersequence=$_POST['forprimersequence'];

                    $revtemplatestrand=$_POST['revtemplatestrand'];
                    $revstart=$_POST['revstart'];$revstop=$_POST['revstop'];
                    $revtim=$_POST['revtim'];$revgc=$_POST['revgc'];
                    $revprimersequence=$_POST['revprimersequence'];

                    $genes=new \Model\GenesModel();
                    $genes->DiseaseName=$diseasename;
                    $genes->ProductLength=$productlength;
                    $genes->GeneSymbol=$genesymbol;
					$genes->GeneID=$geneid;
                    $genes->PrimerDescription= $primerdescription;
                    $genes->For_TemplateStrand=$fortemplatestrand;
                    $genes->For_Start=$forstart;
                    $genes->For_Stop=$forstop;
                    $genes->For_Tm=$fortim;
                    $genes->For_GC=$forgc;
                    $genes->For_PrimerSequence=$forprimersequence;
                    $genes->Rev_TemplateStrand=$revtemplatestrand;
                    $genes->Rev_Start=$revstart;
                    $genes->Rev_Stop=$revstop;
                    $genes->Rev_Tm=$revtim;
                    $genes->Rev_GC=$revgc;
                    $genes->Rev_PrimerSequence=$revprimersequence;

                    $z=$genes->table('sw_biomarkerprimer')->where('ID='.$id)->save();
                    if($z){
                       $this->redirect('biomarkerprimer_search',array('DiseaseName'=>$diseasename),2,修改数据成功);

                    }else{
                       echo "<font color='red'>修改数据失败！</font>";
                       //$this->display();
                    }
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
            
        }
        function biomarkerprimer_xiugai($id){
            session_start();
            if($_SESSION['admin_name']){
                 $genes=D('Genes');
                     /*    两个逻辑:展示、收集
                        // if(!empty($_POST)){
                             // $z= $genes->talbe('sw_biomarkerprimer')->save($_POST);
                             // if($z){
                               页面跳转 用redirect()方法进行添加
                               $this->redirect(操作方法，参数，延迟时间，提示信息);
                               // $this->redirect('biomarker_search',array(),3,'修改数据成功');
                           // }  else {
                               // $this->redirect('biomarker_add',array('GeneID'=>$genes_id),3,'修改数据失败');
                           // }

                        // }else{ */
                         //根据$goods_id获得被修改的商品信息，并给模板展示
                        //find()方法值负责给返回一条记录结果，并且是[一维]数组返回
                        $where['ID']=array('eq',$id);
                        $info=$genes->table('sw_biomarkerprimer')->where($where)->find();

                        $this->assign('info',$info);

                        $this->display();
                         // }
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
            
            
            
        }
        function biomarkerprimer_delete(){
            session_start();
            if($_SESSION['admin_name']){
                $string=$_GET['newIdDelet'];
                //dump($string);
                $genes=new \Model\GenesModel();
                $info=$genes->table('sw_biomarkerprimer')->where('ID='.$string)->delete();
                if($info!=false){

                       $this->redirect('biomarkerprimer_search','',2,删除数据成功);
                }else{
                        echo "<script>alert(失败);</script>";
                }
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
            
        }
        
        
        
        //③突变
        function mutation_search(){
            session_start();
            if($_SESSION['admin_name']){
                //数据查询操作
                $genes=new \Model\GenesModel();
                $info=$genes->table('sw_mutation')->select();
                $total=sizeof($info);
                $per=7;
                //2.实例化分页对象
                $page_obj=new \Tools\Page($total,$per);
                //3.自定义sql语句，获得每页信息
                $sql=" select * from sw_mutation ".$page_obj->limit;
                $info=$genes->query($sql);
                //dump($info);
                //4.获得页码列表
                $pagelist=$page_obj->fpage();
                //把获得的信息传递给模板使用
                $this->assign('pagelist',$pagelist);
                $this->assign('info',$info);
                $this->display();
         }else{
              echo "<script>window.top.location.href='../Manager/login.html';</script>";
         }
        }
        function mutation_search1(){
            session_start();
            if($_SESSION['admin_name']){
                if($_SESSION['admin_name']){
                $genename=$_POST['genename'];

                $genes=new \Model\GenesModel();
                $where['GeneName']=array('like',$genename.'%');

                $info=$genes->table('sw_mutation')->where($where)->select();

                $this->assign('info',$info);
                $this->display();
            
        }else{
             echo "<script>window.top.location.href='../Manager/login.html';</script>";
        }
    }
   }  
        function mutation_add(){
            session_start();
            if($_SESSION['admin_name']){
            $this->display();
            }else{
                 echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
        function mutation_add1(){
            session_start();
            if($_SESSION['admin_name']){
				$geneid=$_POST['geneid'];
                $gene=$_POST['gene']; 
                $category=$_POST['category'];
                $accession=$_POST['accession'];

                $accessionversion=$_POST['accessionversion'];
                $description=$_POST['description'];
                $operator=$_POST['operator'];
                $lastupdated=$_POST['lastupdated'];
                

                $genes=new \Model\GenesModel();
				$genes->GeneID=$geneid;
                $genes->Gene=$gene;
                $genes->Category=$category;
                $genes->Accession=$accession;
                $genes->AccessionVersion=$accessionversion;
                $genes->Description=$description;
                $genes->Operator=$operator;
                $genes->LastUpdated=$lastupdated;
                

                $z=$genes->table('sw_mutation')->add();
                if($z){
                   $this->redirect('mutation_add',array('Gene'=>$genes_id),2,添加数据成功);

                }else{
                   echo "<font color='red'>添加数据失败！</font>";
                   $this->display();
                }
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
		
		function mutation_update(){
            session_start();
            if($_SESSION['admin_name']){
				
				$id=$_POST['id'];
				$geneid=$_POST['geneid'];
                $gene=$_POST['gene']; 
                $category=$_POST['category'];
                $accession=$_POST['accession'];

                $accessionversion=$_POST['accessionversion'];
                $description=$_POST['description'];
                $operator=$_POST['operator'];
                $lastupdated=$_POST['lastupdated'];
                

                $genes=new \Model\GenesModel();
				$genes->GeneID=$geneid;
                $genes->Gene=$gene;
                $genes->Category=$category;
                $genes->Accession=$accession;
                $genes->AccessionVersion=$accessionversion;
                $genes->Description=$description;
                $genes->Operator=$operator;
                $genes->LastUpdated=$lastupdated;
                

                $z=$genes->table('sw_mutation')->where('ID='.$id)->save();
                if($z){
                   $this->redirect('mutation_add',array('Gene'=>$genes_id),2,添加数据成功);

                }else{
                   echo "<font color='red'>添加数据失败！</font>";
                   //$this->display();
                }
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
		
        function mutation_xiugai($id){
            session_start();
            if($_SESSION['admin_name']){
             $genes=D('Genes');
                //两个逻辑:展示、收集
                // if(!empty($_POST)){
                     // $z= $genes->talbe('sw_mutation')->save($_POST);
                     // if($z){
                       //页面跳转 用redirect()方法进行添加
                       //$this->redirect(操作方法，参数，延迟时间，提示信息);
                       // $this->redirect('mutation_search',array(),3,'修改商品成功');
                   // }  else {
                       // $this->redirect('mutation_add',array('GeneID'=>$genes_id),3,'修改商品失败');
                   // }

                // }else{
                 //根据$goods_id获得被修改的商品信息，并给模板展示
                //find()方法值负责给返回一条记录结果，并且是[一维]数组返回
                $where['ID']=array('eq',$id);
                $info=$genes->table('sw_mutation')->where($where)->find();

                $this->assign('info',$info);
                $this->display();
                  //}
            
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
            
        }
        function mutation_delete(){
            session_start();
            if($_SESSION['admin_name']){
                    $string=$_GET['newIdDelet'];
                    //dump($string);
                    $genes=new \Model\GenesModel();
                    $info=$genes->table('sw_mutation')->where('ID='.$string)->delete();
                    if($info!=false){

                           $this->redirect('mutation_search','',2,删除数据成功);
                    }else{
                            echo "<script>alert(失败);</script>";
                    }
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
            
        }
        
        
        
        
        //④参考序列
        function refseqs_search(){
            session_start();
            if($_SESSION['admin_name']){
                //数据查询操作
                $genes=new \Model\GenesModel();
                $info=$genes->table('sw_refseqs')->select();
                $total=sizeof($info);
                $per=7;
                //2.实例化分页对象
                $page_obj=new \Tools\Page($total,$per);
                //3.自定义sql语句，获得每页信息
                $sql=" select * from sw_refseqs ".$page_obj->limit;
                $info=$genes->query($sql);
                //dump($info);
                //4.获得页码列表
                $pagelist=$page_obj->fpage();
                //把获得的信息传递给模板使用
                $this->assign('pagelist',$pagelist);
                $this->assign('info',$info);
                $this->display();
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
            
        }
        function refseqs_search1(){
            session_start();
            if($_SESSION['admin_name']){
                $accession=$_POST['accession'];
                $sequence=$_POST['sequence'];
                $cdsstart=$_POST['cdsstart'];
                $cdsend=$_POST['cdsend'];
                $genes=new \Model\GenesModel();
                $where['Accession']=array('like',$accession.'%');
                $where['Sequence']=array('like',$sequence.'%');
                $where['CDSstart']=array('like',$cdsstart.'%');
                $where['CDSend']=array('like', $cdsend.'%');
                $info=$genes->table('sw_refseqs')->where($where)->select();

                $this->assign('info',$info);
                $this->display();
            }else{
                 echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
        function refseqs_add(){
            session_start();
            if($_SESSION['admin_name']){
                $this->display();
            }else{
                 echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
        function refseqs_add1(){
            session_start();
            if($_SESSION['admin_name']){
				
                $gene=$_POST['gene']; 
                $accession=$_POST['accession'];
                $accessionversion=$_POST['accessionversion'];
                $exonsstart=$_POST['exonsstart'];
               // $exonsstartaminoacid=$_POST['exonsstartaminoacid'];
                $exonsend=$_POST['exonsend'];
                $cdsstart=$_POST['cdsstart'];
                $cdsend=$_POST['cdsend'];
                $sequence=$_POST['sequence'];

                $genes=new \Model\GenesModel();
                $genes->Gene=$gene;
                $genes->Accession=$accession;
                $genes->AccessionVersion=$accessionversion;
                $genes->ExonsStart=$exonsstart;
                $genes->ExonsEnd=$exonsend;
                
                $genes->CDSstart=$cdsstart;
                $genes->CDSend=$cdsend;
                $genes->Sequence=$sequence;

                $z=$genes->table('sw_refseqs')->add();
                if($z){
                   $this->redirect('refseqs_add',array('Gene'=>$gene),2,添加数据成功);

                }else{
                   echo "<font color='red'>添加数据失败！</font>";
                   $this->display();
                }
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
            
            
        }
		function refseqs_update(){
            session_start();
            if($_SESSION['admin_name']){
				$id=$_POST['id'];
                $gene=$_POST['gene']; 
                $accession=$_POST['accession'];
                $accessionversion=$_POST['accessionversion'];
                $exonsstart=$_POST['exonsstart'];
               // $exonsstartaminoacid=$_POST['exonsstartaminoacid'];
                $exonsend=$_POST['exonsend'];
                $cdsstart=$_POST['cdsstart'];
                $cdsend=$_POST['cdsend'];
                $sequence=$_POST['sequence'];

                $genes=new \Model\GenesModel();
                $genes->Gene=$gene;
                $genes->Accession=$accession;
                $genes->AccessionVersion=$accessionversion;
                $genes->ExonsStart=$exonsstart;
                $genes->ExonsEnd=$exonsend;
                
                $genes->CDSstart=$cdsstart;
                $genes->CDSend=$cdsend;
                $genes->Sequence=$sequence;

                $z=$genes->table('sw_refseqs')->where('ID='.$id)->save();
                if($z){
                   $this->redirect('refseqs_search',array('Gene'=>$gene),2,添加数据成功);

                }else{
                   echo "<font color='red'>添加数据失败！</font>";
                   //$this->display();
                }
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
            
            
        }
        function refseqs_xiugai($id){
            session_start();
            if($_SESSION['admin_name']){
             $genes=D('Genes');
               /*  //两个逻辑:展示、收集
                if(!empty($_POST)){
                     $z= $genes->talbe('sw_refseqs')->save($_POST);
                     if($z){
                       //页面跳转 用redirect()方法进行添加
                       //$this->redirect(操作方法，参数，延迟时间，提示信息);
                       $this->redirect('refseqs_search',array(),3,'修改商品成功');
                   }  else {
                       $this->redirect('refseqs_add',array('Gene'=>$genes_id),3,'修改商品失败');
                   }

                }else{ */
                 //根据$goods_id获得被修改的商品信息，并给模板展示
                //find()方法值负责给返回一条记录结果，并且是[一维]数组返回
                $where['ID']=array('eq',$id);
                $info=$genes->table('sw_refseqs')->where($where)->find();

                $this->assign('info',$info);
                $this->display();
                  //}
            }else{
                 echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
            
            
            
        }
        function refseqs_delete(){
            session_start();
            if($_SESSION['admin_name']){
                $string=$_GET['newIdDelet'];
                //dump($string);
                $genes=new \Model\GenesModel();
                $info=$genes->table('sw_refseqs')->where('ID='.$string)->delete();
                if($info!=false){

                       $this->redirect('refseqs_search','',2,删除数据成功);
                }else{
                        echo "<script>alert(失败);</script>";
                }
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
            
            
            
        }
        
        
        
        
        //⑤药物
        function drug_search(){
            session_start();
            if($_SESSION['admin_name']){
                         //数据查询操作
                    $genes=new \Model\GenesModel();
                    $info=$genes->table('sw_drug')->select();
                    $total=sizeof($info);
                    $per=7;
                    //2.实例化分页对象
                    $page_obj=new \Tools\Page($total,$per);
                    //3.自定义sql语句，获得每页信息
                    $sql=" select * from sw_drug ".$page_obj->limit;
                    $info=$genes->query($sql);
                    //dump($info);
                    //4.获得页码列表
                    $pagelist=$page_obj->fpage();
                    //把获得的信息传递给模板使用
                    $this->assign('pagelist',$pagelist);
                    $this->assign('info',$info);
                    $this->display();
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
        function drug_search1(){
            session_start();
            if($_SESSION['admin_name']){
                $drugname=$_POST['drugname'];
                $synonyms=$_POST['synonyms'];
                $genes=new \Model\GenesModel();
                $where['DrugName']=array('like',$drugname.'%');
                $where['Synonyms']=array('like',$synonyms.'%');
                $info=$genes->table('sw_drug')->where($where)->select();

                $this->assign('info',$info);
                $this->display();
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
        function drug_add(){
            session_start();
            if($_SESSION['admin_name']){
                 $this->display();
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
        function drug_add1(){
            session_start();
            if($_SESSION['admin_name']){
                $drugbankid=$_POST['drugbankid']; 
                $sysnoyms=$_POST['sysnoyms'];
                $drugname=$_POST['drugname'];
                $drugchinesename=$_POST['drugchinesename'];
                $maker=$_POST['maker'];
                $makercn=$_POST['makercn'];
                $tradename=$_POST['tradename'];
                $target=$_POST['target'];
                $class=$_POST['class'];
                $chinesebrandname=$_POST['chinesebrandname']; 
                $averageprice=$_POST['averageprice'];
                $drugstage=$_POST['drugstage'];
                $drugstatus=$_POST['drugstatus'];
                $avaliableinchina=$_POST['avaliableinchina'];
                $country=$_POST['country'];
                $datastatus=$_POST['datastatus'];
                $fpi=$_POST['fpi'];
                $fpicn=$_POST['fpicn'];
                $description=$_POST['description']; 
                $description_cn=$_POST['description_cn'];
                $sideeffect=$_POST['sideeffect'];
                $mechanismofaction=$_POST['mechanismofaction'];
                $mechanismofaction_cn=$_POST['mechanismofaction_cn'];
                $contraindication=$_POST['contraindication'];
                $contraindication_cn=$_POST['contraindication_cn'];
                $attention=$_POST['attention'];
                $attention_cn=$_POST['attention_cn'];
                $untowardeffect=$_POST['untowardeffect'];
                $untowardeffect_cn=$_POST['untowardeffect_cn'];
                $pharmaeuticalcomposition=$_POST['pharmaeuticalcomposition'];
                $pharmaeuticalcomposition_cn=$_POST['pharmaeuticalcomposition_cn'];
                $druginteraction=$_POST['druginteraction'];
                $druginteraction_cn=$_POST['druginteraction_cn'];
                $event=$_POST[event];
                $event_cn=$_POST[event_cn];
                $date=$_POST[date];
                

                $genes=new \Model\GenesModel();
                $genes->DrugBankID=$drugbankid;
                $genes->DrugName=$drugname;
                $genes->Synonyms=$sysnonyms;
                $genes->DrugChineseName=$drugchinesename;
                $genes->Maker=$maker;
                $genes->Maker_CN=$makercn;
                $genes->TradeName=$tradename;
                $genes->Class=$class;
                $genes->ChineseBrandName=$chinesebrandname;
                $genes->AveragePrice=$averageprice;
                $genes->DrugStage=$drugstage;
                $genes->DrugStatus=$drugstatus;
                $genes->AvailableInChina=$avaliableinchina;
                $genes->Country=$country;
                $genes->FullPrescribingInformation=$fpi;
                $genes->FullPrescribingInformation_CN=$fpicn;
                $genes->Description=$description;
                $genes->Description_CN=$description_cn;
                $genes->SideEffect=$sideeffect;
                $genes->MechanismOfAction=$mechanismofaction;
                $genes->MechanismOfAction_CN=$mechanismofaction_cn;
                $genes->Contraindication=$contraindication;
                $genes->Contraindication_CN=$contraindication_cn;
                $genes->Attention=$attention;
                $genes->Attention_CN=$attention_cn;
                $genes->UntowardEffect=$untowardeffect;
                $genes->UntowardEffect_CN=$untowardeffect_cn;
                $genes->PharmaceuticalComposition=$pharmaeuticalcomposition;
                $genes->PharmaceuticalComposition_CN=$pharmaeuticalcomposition_cn;
                $genes->DrugInteraction=$druginteraction;
                $genes->DrugInteraction_CN=$druginteraction_cn;
                $genes->Event=$event;
                $genes->Event_CN=$event_cn;
                $genes->Date=$date;
                


                $z=$genes->table('sw_drug')->add();
                if($z){
                   $this->redirect('drug_add',array('DrugBankID'=>$genes_id),2,添加数据成功);

                }else{
                   echo "<font color='red'>添加数据失败！</font>";
                   $this->display();
                }
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
		
		function drug_update(){
            session_start();
            if($_SESSION['admin_name']){
			$id=$_POST['id'];
                $drugbankid=$_POST['drugbankid']; 
                $sysnoyms=$_POST['sysnoyms'];
                $drugname=$_POST['drugname'];
                $drugchinesename=$_POST['drugchinesename'];
                $maker=$_POST['maker'];
                $makercn=$_POST['makercn'];
                $tradename=$_POST['tradename'];
                $target=$_POST['target'];
                $class=$_POST['class'];
                $chinesebrandname=$_POST['chinesebrandname']; 
                $averageprice=$_POST['averageprice'];
                $drugstage=$_POST['drugstage'];
                $drugstatus=$_POST['drugstatus'];
                $avaliableinchina=$_POST['avaliableinchina'];
                $country=$_POST['country'];
                $datastatus=$_POST['datastatus'];
                $fpi=$_POST['fpi'];
                $fpicn=$_POST['fpicn'];
                $description=$_POST['description']; 
                $description_cn=$_POST['description_cn'];
                $sideeffect=$_POST['sideeffect'];
                $mechanismofaction=$_POST['mechanismofaction'];
                $mechanismofaction_cn=$_POST['mechanismofaction_cn'];
                $contraindication=$_POST['contraindication'];
                $contraindication_cn=$_POST['contraindication_cn'];
                $attention=$_POST['attention'];
                $attention_cn=$_POST['attention_cn'];
                $untowardeffect=$_POST['untowardeffect'];
                $untowardeffect_cn=$_POST['untowardeffect_cn'];
                $pharmaeuticalcomposition=$_POST['pharmaeuticalcomposition'];
                $pharmaeuticalcomposition_cn=$_POST['pharmaeuticalcomposition_cn'];
                $druginteraction=$_POST['druginteraction'];
                $druginteraction_cn=$_POST['druginteraction_cn'];
                $event=$_POST[event];
                $event_cn=$_POST[event_cn];
                $date=$_POST[date];
                

                $genes=new \Model\GenesModel();
                $genes->DrugBankID=$drugbankid;
                $genes->DrugName=$drugname;
                $genes->Synonyms=$sysnonyms;
                $genes->DrugChineseName=$drugchinesename;
                $genes->Maker=$maker;
                $genes->Maker_CN=$makercn;
                $genes->TradeName=$tradename;
                $genes->Class=$class;
                $genes->ChineseBrandName=$chinesebrandname;
                $genes->AveragePrice=$averageprice;
                $genes->DrugStage=$drugstage;
                $genes->DrugStatus=$drugstatus;
                $genes->AvailableInChina=$avaliableinchina;
                $genes->Country=$country;
                $genes->FullPrescribingInformation=$fpi;
                $genes->FullPrescribingInformation_CN=$fpicn;
                $genes->Description=$description;
                $genes->Description_CN=$description_cn;
                $genes->SideEffect=$sideeffect;
                $genes->MechanismOfAction=$mechanismofaction;
                $genes->MechanismOfAction_CN=$mechanismofaction_cn;
                $genes->Contraindication=$contraindication;
                $genes->Contraindication_CN=$contraindication_cn;
                $genes->Attention=$attention;
                $genes->Attention_CN=$attention_cn;
                $genes->UntowardEffect=$untowardeffect;
                $genes->UntowardEffect_CN=$untowardeffect_cn;
                $genes->PharmaceuticalComposition=$pharmaeuticalcomposition;
                $genes->PharmaceuticalComposition_CN=$pharmaeuticalcomposition_cn;
                $genes->DrugInteraction=$druginteraction;
                $genes->DrugInteraction_CN=$druginteraction_cn;
                $genes->Event=$event;
                $genes->Event_CN=$event_cn;
                $genes->Date=$date;
                


                $z=$genes->table('sw_drug')->where('ID='.$id)->save();
                if($z){
                   $this->redirect('drug_search',array('DrugBankID'=>$genes_id),2,修改数据成功);

                }else{
                   echo "<font color='red'>修改数据失败！</font>";
                  // $this->display();
                }
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
        function drug_xiugai($id){
            session_start();
            if($_SESSION['admin_name']){
             $genes=D('Genes');
                /* //两个逻辑:展示、收集
                if(!empty($_POST)){
                     $z= $genes->talbe('sw_drug')->save($_POST);
                     if($z){
                       //页面跳转 用redirect()方法进行添加
                       //$this->redirect(操作方法，参数，延迟时间，提示信息);
                       $this->redirect('drug_search',array(),3,'修改商品成功');
                   }  else {
                       $this->redirect('drug_add',array('ID'=>$genes_id),3,'修改商品失败');
                   }

                }else{
                 //根据$goods_id获得被修改的商品信息，并给模板展示
                //find()方法值负责给返回一条记录结果，并且是[一维]数组返回 */
                $where['ID']=array('eq',$id);
                $info=$genes->table('sw_drug')->where($where)->find();

                $this->assign('info',$info);
                $this->display();
                 // }
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
        function drug_delete(){
            session_start();
            if($_SESSION['admin_name']){
                 $string=$_GET['newIdDelet'];
                //dump($string);
                $genes=new \Model\GenesModel();
                $info=$genes->table('sw_drug')->where('ID='.$string)->delete();
                if($info!=false){

                       $this->redirect('drug_search','',2,删除数据成功);
                }else{
                        echo "<script>alert(失败);</script>";
                }
            }else{
                  echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
            
        }
        
        
        
        //⑥疾病
        function disease_search(){
            session_start();
            if($_SESSION['admin_name']){
                //数据查询操作
                $genes=new \Model\GenesModel();
                $info=$genes->table('sw_disease')->select();
                $total=sizeof($info);
                $per=7;
                //2.实例化分页对象
                $page_obj=new \Tools\Page($total,$per);
                //3.自定义sql语句，获得每页信息
                $sql=" select * from sw_disease ".$page_obj->limit;
                $info=$genes->query($sql);
                //dump($info);
                //4.获得页码列表
                $pagelist=$page_obj->fpage();
                //把获得的信息传递给模板使用
                $this->assign('pagelist',$pagelist);
                $this->assign('info',$info);
                $this->display();
            }else{
                 echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
            
        }
        function disease_search1(){
            session_start();
            if($_SESSION['admin_name']){
                $diseasename=$_POST['diseasename'];
                $type=$_POST['type'];
                $genes=new \Model\GenesModel();
                $where['DiseaseName']=array('like',$diseasename.'%');
                $where['Type']=array('like',$type.'%');
                $info=$genes->table('sw_disease')->where($where)->select();

                $this->assign('info',$info);
                $this->display();
            }else{
                 echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
            
        }
        function disease_add(){
            session_start();
            if($_SESSION['admin_name']){
                $this->display();
            }else{
                  echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
        function disease_add1(){
            session_start();
            if($_SESSION['admin_name']){
                $meshid=$_POST['meshid']; 
                $type=$_POST['type'];
                $subtype=$_POST['subtype'];
                $diseasename=$_POST['diseasename'];
                $alias=$_POST['alias'];
                $chinesename=$_POST['chinesename'];
                $description=$_POST['description'];

                $genes=new \Model\GenesModel();
                $genes->MeSHID=$meshid;
                $genes->Type=$type;
                $genes->SubType=$subtype;
                $genes->DiseaseName=$diseasename;
                $genes->Alias=$alias;
                $genes->ChineseName=$chinesename;
                $genes->Description=$description;


                $z=$genes->table('sw_disease')->add();
                if($z){
                   $this->redirect('disease_add',array('MeSHID'=>$genes_id),2,添加数据成功);

                }else{
                   echo "<font color='red'>添加数据失败！</font>";
                   $this->display();
                }
            }else{
                 echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
		
		function disease_update(){
            session_start();
            if($_SESSION['admin_name']){
				$id=$_POST['id'];
                $meshid=$_POST['meshid']; 
                $type=$_POST['type'];
                $subtype=$_POST['subtype'];
                $diseasename=$_POST['diseasename'];
                $alias=$_POST['alias'];
                $chinesename=$_POST['chinesename'];
                $description=$_POST['description'];

                $genes=new \Model\GenesModel();
                $genes->MeSHID=$meshid;
                $genes->Type=$type;
                $genes->SubType=$subtype;
                $genes->DiseaseName=$diseasename;
                $genes->Alias=$alias;
                $genes->ChineseName=$chinesename;
                $genes->Description=$description;


                $z=$genes->table('sw_disease')->where('ID='.$id)->save();
                if($z){
                   $this->redirect('disease_add',array('MeSHID'=>$genes_id),2,修改数据成功);

                }else{
                   echo "<font color='red'>修改数据失败！</font>";
                   $this->display();
                }
            }else{
                 echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
		
        function disease_xiugai($id){
            session_start();
            if($_SESSION['admin_name']){
                $genes=D('Genes');
               /*  //两个逻辑:展示、收集
                if(!empty($_POST)){
                     $z= $genes->talbe('sw_disease')->save($_POST);
                     if($z){
                       //页面跳转 用redirect()方法进行添加
                       //$this->redirect(操作方法，参数，延迟时间，提示信息);
                       $this->redirect('biomarker_search',array(),3,'修改商品成功');
                   }  else {
                       $this->redirect('biomarker_add',array('MeSHID'=>$genes_id),3,'修改商品失败');
                   }

                }else{ */
                 //根据$goods_id获得被修改的商品信息，并给模板展示
                //find()方法值负责给返回一条记录结果，并且是[一维]数组返回
                $where['ID']=array('eq',$id);
                $info=$genes->table('sw_disease')->where($where)->find();

                $this->assign('info',$info);
                $this->display();
                 // }
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
            
        }
        function disease_delete(){
            session_start();
            if($_SESSION['admin_name']){
                $string=$_GET['newIdDelet'];
                //dump($string);
                $genes=new \Model\GenesModel();
                $info=$genes->table('sw_disease')->where('ID='.$string)->delete();
                if($info!=false){

                       $this->redirect('disease_search','',2,删除数据成功);
                }else{
                        echo "<script>alert(失败);</script>";
                }
            }else{
                 echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
            
        }
        
        
        
        
        //⑦疾病突变关联分析
        function diseasemutationassociation_search(){
                
                session_start();
                if($_SESSION['admin_name']){
                    //数据查询操作
                    $genes=new \Model\GenesModel();
                    $info=$genes->table('sw_diseasemutationassociation')->select();
                    $total=sizeof($info);
                    $per=7;
                    //2.实例化分页对象
                    $page_obj=new \Tools\Page($total,$per);
                    //3.自定义sql语句，获得每页信息
                    $sql=" select * from sw_diseasemutationassociation ".$page_obj->limit;
                    $info=$genes->query($sql);
                    //dump($info);
                    //4.获得页码列表
                    $pagelist=$page_obj->fpage();
                    //把获得的信息传递给模板使用
                    $this->assign('pagelist',$pagelist);
                    $this->assign('info',$info);
                    $this->display();
                }else{
                    echo "<script>window.top.location.href='../Manager/login.html';</script>";
                }
        }
        function diseasemutationassociation_search1(){
            session_start();
            if($_SESSION['admin_name']){
                $diseasename=$_POST['diseasename'];

                $genes=new \Model\GenesModel();
                $where['DiseaseName']=array('like',$diseasename.'%');

                $info=$genes->table('sw_diseasemutationassociation')->where($where)->select();

                $this->assign('info',$info);
                $this->display();
            }else{
                 echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
            
        }
        function diseasemutationassociation_add(){
            session_start();
            if($_SESSION['admin_name']){
                $this->display();
            }else{
                 echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
        function diseasemutationassociation_add1(){
            session_start();
            if($_SESSION['admin_name']){
                $diseasename=$_POST['diseasename'];
                $mutation=$_POST['mutation'];
                $biomarkertype=$_POST['biomarkertype'];

                $reference=$_POST['reference'];
                $medicationguide=$_POST['medicationguide'];
                $medicationguideenglish=$_POST['medicationguideenglish'];
                $sogthchinese=$_POST['sogtchinese'];
                $description=$_POST['description'];
                $lastupdated=$_POST['lastupdated'];
                $operator=$_POST['operator'];
                

                $genes=new \Model\GenesModel();
                $genes->DiseaseName=$diseasename;
                $genes->MutationCategory=$mutation;
                $genes->BiomarkerType=$biomarkertype;
                $genes->Reference=$reference;
                $genes->MedicationGuide_CN=$medicationguide;
                $genes->MedicationGuide=$medicationguideenglish;
                $genes->SignificanceOfGeneTesting=$sogthchinese;
                $genes->Description=$description;
                $genes->LastUpdated=$lastupdated;
                $genes->Operator=$operator;

                $z=$genes->table('sw_diseasemutationassociation')->add();
                if($z){
                   $this->redirect('diseasemutationassociation_add',array('DiseaseName'=>$genes_id),2,添加数据成功);

                }else{
                   echo "<font color='red'>添加数据失败！</font>";
                   $this->display();
                }
            }else{
                 echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
            
        }
		
		function diseasemutationassociation_update(){
            session_start();
            if($_SESSION['admin_name']){
				$id=$_POST['id'];
                $diseasename=$_POST['diseasename'];
                $mutation=$_POST['mutation'];
                $biomarkertype=$_POST['biomarkertype'];

                $reference=$_POST['reference'];
                $medicationguide=$_POST['medicationguide'];
                $medicationguideenglish=$_POST['medicationguideenglish'];
                $sogthchinese=$_POST['sogtchinese'];
                $description=$_POST['description'];
                $lastupdated=$_POST['lastupdated'];
                $operator=$_POST['operator'];
                

                $genes=new \Model\GenesModel();
                $genes->DiseaseName=$diseasename;
                $genes->MutationCategory=$mutation;
                $genes->BiomarkerType=$biomarkertype;
                $genes->Reference=$reference;
                $genes->MedicationGuide_CN=$medicationguide;
                $genes->MedicationGuide=$medicationguideenglish;
                $genes->SignificanceOfGeneTesting=$sogthchinese;
                $genes->Description=$description;
                $genes->LastUpdated=$lastupdated;
                $genes->Operator=$operator;

                $z=$genes->table('sw_diseasemutationassociation')->where('ID='.$id)->save();
                if($z){
                   $this->redirect('diseasemutationassociation_add',array('DiseaseName'=>$genes_id),2,修改数据成功);

                }else{
                   echo "<font color='red'>修改数据失败！</font>";
                   $this->display();
                }
            }else{
                 echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
            
        }
		
        function diseasemutationassociation_xiugai($id){
            
            session_start();
            if($_SESSION['admin_name']){
                $genes=D('Genes');
                /* //两个逻辑:展示、收集
                if(!empty($_POST)){
                     $z= $genes->talbe('sw_diseasemuationassociation')->save($_POST);
                     if($z){
                       //页面跳转 用redirect()方法进行添加
                       //$this->redirect(操作方法，参数，延迟时间，提示信息);
                       $this->redirect('diseasemutationassociation_search',array(),3,'修改商品成功');
                   }  else {
                       $this->redirect('diseasemutationassociation_add',array('DiseaseName'=>$genes_id),3,'修改商品失败');
                   }

                }else{ */
                 //根据$goods_id获得被修改的商品信息，并给模板展示
                //find()方法值负责给返回一条记录结果，并且是[一维]数组返回
                $where['ID']=array('eq',$id);
                $info=$genes->table('sw_diseasemutationassociation')->where($where)->find();

                $this->assign('info',$info);
                $this->display();
                //}
            }else{
                 echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
        function diseasemutationassociation_delete(){
            session_start();
            if($_SESSION['admin_name']){
                $string=$_GET['newIdDelet'];
                //dump($string);
                $genes=new \Model\GenesModel();
                $info=$genes->table('sw_diseasemutationassociation')->where('ID='.$string)->delete();
                if($info!=false){

                       $this->redirect('diseasemutationassociation_search','',2,删除数据成功);
                }else{
                        echo "<script>alert(失败);</script>";
                }

            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
            
        }
        
        
        
        //⑧药物突变关联分析
        function drugmutationassociation_search(){
            session_start();
            if($_SESSION['admin_name']){
                        //数据查询操作
                    $genes=new \Model\GenesModel();
                    $info=$genes->table('sw_drugmutationassociation')->select();
                    $total=sizeof($info);
                    $per=7;
                    //2.实例化分页对象
                    $page_obj=new \Tools\Page($total,$per);
                    //3.自定义sql语句，获得每页信息
                    $sql=" select * from sw_drugmutationassociation ".$page_obj->limit;
                    $info=$genes->query($sql);
                    //dump($info);
                    //4.获得页码列表
                    $pagelist=$page_obj->fpage();
                    //把获得的信息传递给模板使用
                    $this->assign('pagelist',$pagelist);
                    $this->assign('info',$info);
                    $this->display();
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
        function drugmutationassociation_search1(){
            session_start();
            if($_SESSION['admin_name']){
                $drugname=$_POST['drugname'];

                $genes=new \Model\GenesModel();
                $where['DrugName']=array('like',$drugname.'%');

                $info=$genes->table('sw_drugmutationassociation')->where($where)->select();

                $this->assign('info',$info);
                $this->display();
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
        function drugmutationassociation_add(){
            session_start();
            if($_SESSION['admin_name']){
                $this->display();
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
        function drugmutationassociation_add1(){
            session_start();
            if($_SESSION['admin_name']){
                $drugname=$_POST['drugname']; 
                $mutation=$_POST['mutation'];
                $biomarkertype=$_POST['biomarkertype'];

                $reference=$_POST['reference'];
                $medicationguide=$_POST['medicationguide'];
                $medicationguide_en=$_POST['medicationguideenglish'];
                $sogt_chinese=$_POST['sogtchinese'];
                $description=$_POST['description'];
                $lastupdated=$_POST['lastupdated'];
                $operator=$_POST['operator'];

                $genes=new \Model\GenesModel();
                $genes->DrugName=$drugname;
                $genes->Mutation=$mutation;
                $genes->BiomarkerType=$biomarkertype;
                $genes->Reference= $reference;
                $genes->MedicationGuide=$medicationguide;
                $genes->MedicationGuide_English=$medicationguide_en;
                $genes->SignificanceOfGeneTesting_Chinese=$sogt_chinese;
                $genes->Description=$description;
                $genes->Operator=$operator;
                $genes->LastUpdate=$lastupdated;


                $z=$genes->table('sw_drugmutationassociation')->add();
                if($z){
                   $this->redirect('drugmutationassociation_add',array('ID'=>$genes_id),2,添加数据成功);

                }else{
                   echo "<font color='red'>添加数据失败！</font>";
                   $this->display();
                }
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
		
		function drugmutationassociation_update(){
            session_start();
            if($_SESSION['admin_name']){
				$id=$_POST['id'];
                $drugname=$_POST['drugname']; 
                $mutation=$_POST['mutation'];
                $biomarkertype=$_POST['biomarkertype'];

                $reference=$_POST['reference'];
                $medicationguide=$_POST['medicationguide'];
                $medicationguide_en=$_POST['medicationguideenglish'];
                $sogt_chinese=$_POST['sogtchinese'];
                $description=$_POST['description'];
                $lastupdated=$_POST['lastupdated'];
                $operator=$_POST['operator'];

                $genes=new \Model\GenesModel();
                $genes->DrugName=$drugname;
                $genes->Mutation=$mutation;
                $genes->BiomarkerType=$biomarkertype;
                $genes->Reference= $reference;
                $genes->MedicationGuide=$medicationguide;
                $genes->MedicationGuide_English=$medicationguide_en;
                $genes->SignificanceOfGeneTesting_Chinese=$sogt_chinese;
                $genes->Description=$description;
                $genes->Operator=$operator;
                $genes->LastUpdate=$lastupdated;


                $z=$genes->table('sw_drugmutationassociation')->where('ID='.$id)->save();
                if($z){
                   $this->redirect('drugmutationassociation_add',array('ID'=>$genes_id),2,修改数据成功);

                }else{
                   echo "<font color='red'>修改数据失败！</font>";
                   $this->display();
                }
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
		
        function drugmutationassociation_xiugai($id){
             session_start();
             if($_SESSION['admin_name']){
                $genes=D('Genes');
                /* //两个逻辑:展示、收集
                if(!empty($_POST)){
                     $z= $genes->talbe('sw_drugmutationassociation')->save($_POST);
                     if($z){
                       //页面跳转 用redirect()方法进行添加
                       //$this->redirect(操作方法，参数，延迟时间，提示信息);
                       $this->redirect('drugmutationassociation_search',array(),3,'修改商品成功');
                   }  else {
                       $this->redirect('drugmutationassociation_add',array('ID'=>$genes_id),3,'修改商品失败');
                   }

                }else{ */
                 //根据$goods_id获得被修改的商品信息，并给模板展示
                //find()方法值负责给返回一条记录结果，并且是[一维]数组返回
                $where['ID']=array('eq',$id);
                $info=$genes->table('sw_drugmutationassociation')->where($where)->find();

                $this->assign('info',$info);
                $this->display();
                 // }
             }else{
                 echo "<script>window.top.location.href='../Manager/login.html';</script>";
             }
        }
        function drugmutationassociation_delete(){
            session_start();
            if($_SESSION['admin_name']){
                $string=$_GET['newIdDelet'];
                //dump($string);
                $genes=new \Model\GenesModel();
                $info=$genes->table('sw_drugmutationassociation')->where('ID='.$string)->delete();
                if($info!=false){

                       $this->redirect('drugmutationassociation_search','',2,删除数据成功);
                }else{
                        echo "<script>alert(失败);</script>";
                }
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
        
        
        
        
        //⑨疾病药物关联分析
        function diseasedrugassociation_search(){
             session_start();
             if($_SESSION['admin_name']){
                    //数据查询操作
                    $genes=new \Model\GenesModel();
                    $info=$genes->table('sw_diseasedrugassociation')->select();
                    $total=sizeof($info);
                    $per=7;
                    //2.实例化分页对象
                    $page_obj=new \Tools\Page($total,$per);
                    //3.自定义sql语句，获得每页信息
                    $sql=" select * from sw_diseasedrugassociation ".$page_obj->limit;
                    $info=$genes->query($sql);
                    //dump($info);
                    //4.获得页码列表
                    $pagelist=$page_obj->fpage();
                    //把获得的信息传递给模板使用
                    $this->assign('pagelist',$pagelist);
                    $this->assign('info',$info);
                    $this->display();
             }else{
                 echo "<script>window.top.location.href='../Manager/login.html';</script>";
             }
        }
        function diseasedrugassociation_search1(){
            session_start();
            if($_SESSION['admin_name']){
                $diseasename=$_POST['diseasename'];
                $drugname=$_POST['drugname'];
                $genes=new \Model\GenesModel();
                $where['DiseaseName']=array('like',$diseasename.'%');
                $where['DrugName']=array('like',$drugname.'%');
                $info=$genes->table('sw_diseasedrugassociation')->where($where)->select();

                $this->assign('info',$info);
                $this->display();
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }

        }
        function diseasedrugassociation_add(){
            session_start();
            if($_SESSION['admin_name']){
                $this->display();
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
        function diseasedrugassociation_add1(){
            session_start();
            if($_SESSION['admin_name']){
                $diseasename=$_POST['diseasename']; 
                $diseasestage=$_POST['diseasestage'];
                $drugname=$_POST['drugname'];

                $drugstage=$_POST['drugstage'];
                $approved=$_POST['approvedyear'];
                $drugstagedescription=$_POST['drugstagedescription'];
                $associationdescription=$_POST['associationdescription'];
                $clinicalapplcationdescription=$_POST['clinicalapplicationdescription'];
                $lastupdate=$_POST['lastupdate'];
                $operator=$_POST['operator'];

                $genes=new \Model\GenesModel();
                $genes->DiseaseName= $diseasename;
                $genes->DiseaseStage=$diseasestage;
                $genes->DrugName=$drugname;
                $genes->DrugStage=$drugstage;
                $genes->ApprovedYear=$approved;
                $genes->DrugStageDescription=$drugstagedescription;
                $genes->AssociationDescription=$associationdescription;
                $genes->ClinicalApplicationDescription=$clinicalapplcationdescription;
                $genes->LastUpdate=$lastupdate;
                $genes->Operator=$operator;
                 
                $z=$genes->table('sw_diseasedrugassociation')->add();
                if($z){
                   $this->redirect('diseasedrugassociation_add',array('DiseaseName'=>$genes_id),2,添加数据成功);

                }else{
                   echo "<font color='red'>添加数据失败！</font>";
                   $this->display();
                }
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }

            
            
            
            
        }
		
		function diseasedrugassociation_update(){
            session_start();
            if($_SESSION['admin_name']){
				$id=$_POST['id'];
                $diseasename=$_POST['diseasename']; 
                $diseasestage=$_POST['diseasestage'];
                $drugname=$_POST['drugname'];

                $drugstage=$_POST['drugstage'];
                $approved=$_POST['approvedyear'];
                $drugstagedescription=$_POST['drugstagedescription'];
                $associationdescription=$_POST['associationdescription'];
                $clinicalapplcationdescription=$_POST['clinicalapplicationdescription'];
                $lastupdate=$_POST['lastupdate'];
                $operator=$_POST['operator'];

                $genes=new \Model\GenesModel();
                $genes->DiseaseName= $diseasename;
                $genes->DiseaseStage=$diseasestage;
                $genes->DrugName=$drugname;
                $genes->DrugStage=$drugstage;
                $genes->ApprovedYear=$approved;
                $genes->DrugStageDescription=$drugstagedescription;
                $genes->AssociationDescription=$associationdescription;
                $genes->ClinicalApplicationDescription=$clinicalapplcationdescription;
                $genes->LastUpdate=$lastupdate;
                $genes->Operator=$operator;
                 
                $z=$genes->table('sw_diseasedrugassociation')->where('ID='.$id)->save();
                if($z){
                   $this->redirect('diseasedrugassociation_add',array('DiseaseName'=>$genes_id),2,添加数据成功);

                }else{
                   echo "<font color='red'>添加数据失败！</font>";
                   $this->display();
                }
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }

            
            
            
            
        }
        function diseasedrugassociation_xiugai($id){
            session_start();
            if($_SESSION['admin_name']){
            $genes=D('Genes');
                //两个逻辑:展示、收集
              /*   if(!empty($_POST)){
                     $z= $genes->talbe('sw_diseasedrugassociation')->save($_POST);
                     if($z){
                       //页面跳转 用redirect()方法进行添加
                       //$this->redirect(操作方法，参数，延迟时间，提示信息);
                       $this->redirect('diseasedrugassociation_search',array(),3,'修改商品成功');
                   }  else {
                       $this->redirect('diseasedrugassociation_add',array('DiseaseName'=>$genes_id),3,'修改商品失败');
                   }

                }else{ */
                 //根据$goods_id获得被修改的商品信息，并给模板展示
                //find()方法值负责给返回一条记录结果，并且是[一维]数组返回
                $where['ID']=array('eq',$id);
                $info=$genes->table('sw_diseasedrugassociation')->where($where)->find();

                $this->assign('info',$info);
                $this->display();
                  //}
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
            
        }
        function diseasedrugassociation_delete(){
            session_start();
            if($_SESSION['admin_name']){
                $string=$_GET['newIdDelet'];
                //dump($string);
                $genes=new \Model\GenesModel();
                $info=$genes->table('sw_diseasedrugassociation')->where('ID='.$string)->delete();
                if($info!=false){

                       $this->redirect('diseasedrugassociation_search','',2,删除数据成功);
                }else{
                        echo "<script>alert(失败);</script>";
                }
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
            
        }
        
        
        
         //⑩治疗
        function treatment_search(){
            session_start();
            if($_SESSION['admin_name']){
                    //数据查询操作
                $genes=new \Model\GenesModel();
                $info=$genes->table('sw_treatment')->select();
                $total=sizeof($info);
                $per=7;
                //2.实例化分页对象
                $page_obj=new \Tools\Page($total,$per);
                //3.自定义sql语句，获得每页信息
                $sql=" select * from sw_treatment ".$page_obj->limit;
                $info=$genes->query($sql);
                //dump($info);
                //4.获得页码列表
                $pagelist=$page_obj->fpage();
                //把获得的信息传递给模板使用
                $this->assign('pagelist',$pagelist);
                $this->assign('info',$info);
                $this->display();
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
        function treatment_search1(){
            session_start();
            if($_SESSION['admin_name']){
                $diseasename=$_POST['diseasename'];

                $genes=new \Model\GenesModel();
                $where['DiseaseName']=array('like',$diseasename.'%');

                $info=$genes->table('sw_treatment')->where($where)->select();

                $this->assign('info',$info);
                $this->display();
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
        function treatment_add(){
            session_start();
            if($_SESSION['admin_name']){
                $this->display();
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
        function treatment_add1(){
            session_start();
            if($_SESSION['admin_name']){
			
                $diseasename=$_POST['diseasename']; 
                $diseasesubtype=$_POST['diseasesubtype'];
                $diseasestage=$_POST['diseasestage'];
                $drugcategory=$_POST['category'];
                $ranking=$_POST['ranking'];
                $status=$_POST['status'];
                $osmonth=$_POST['os'];
                $hazardratoos=$_POST['hazardratioos'];
                $cios=$_POST['cios'];
                $pfsmonth=$_POST['pfs'];
                $hazardratopfs=$_POST['hazardratiopfs']; 
                $cipfs=$_POST['cipfs'];
                $responserate=$_POST['responserate'];
                $comparedcontrol=$_POST['comparedcontrol'];
                $reference=$_POST['reference'];
                $whocantake=$_POST['whocantake'];
                $ebm=$_POST['ebm'];
                $evidencesource=$_POST['evidencesource'];
                $descriptioncn=$_POST['descriptionchinese'];
                $drug=$_POST['drug']; 
                $biomarker=$_POST['biomarker'];
                $clinicalinformation=$_POST['clinicalinformation'];
                $clinicalchineseinformation=$_POST['clinicalchineseinformation'];
                $sideeffects=$_POST['sideeffects'];
                $lastupdated=$_POST['lastupdated'];
                $operator=$_POST['operator'];
               
                $genes=new \Model\GenesModel();
                $genes->DiseaseName=$diseasename;
                $genes->DiseaseSubType=$diseasesubtype;
                $genes->DiseaseStage=$diseasesubtype;
                $genes->DrugCategory=$drugcategory;
                $genes->Ranking=$ranking;
                $genes->Status=$status;
                $genes->OS_month=$osmonth;
                $genes->HazardRatio_OS=$hazardratoos;
                $genes->CI_OS=$cios;
                 $genes->PFSMonth=$pfsmonth;
                $genes->HazardRatio_PFS=$hazardratopfs;
                $genes->CI_PFS=$cipfs;
                $genes->ResponseRate=$responserate;
                $genes->ComparedControl=$comparedcontrol;
                $genes->Reference=$reference;
                $genes->WhoCanTake=$whocantake;
                $genes->EBMlevels=$ebm;
                $genes->EvidenceSource=$evidencesource;
                 $genes->Description_Chinese=$descriptioncn;
                $genes->Drug=$drug;
                $genes->Biomarker=$biomarker;
//                $genes->DrugName=$genetype;
//                $genes->Ranking=$chromosome;
//                $genes->Mutation=$strand;
                $genes->ClinicalInformation=$clinicalinformation;
                $genes->ClinicalChineseInformation=$clinicalchineseinformation;
                $genes->SideEffects=$sideeffects;
                $genes->LastUpdated=$lastupdated;
                $genes->Operator=$operator;
                
                $z=$genes->table('sw_treatment')->add();
                if($z){
                   $this->redirect('treatment_add',array('DiseaseName'=>$genes_id),2,添加数据成功);

                }else{
                   echo "<font color='red'>添加数据失败！</font>";
                   $this->display();
                }
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
		
		function treatment_update(){
            session_start();
            if($_SESSION['admin_name']){
				$id=$_POST['id'];
                $diseasename=$_POST['diseasename']; 
                $diseasesubtype=$_POST['diseasesubtype'];
                $diseasestage=$_POST['diseasestage'];
                $drugcategory=$_POST['category'];
                $ranking=$_POST['ranking'];
                $status=$_POST['status'];
                $osmonth=$_POST['os'];
                $hazardratoos=$_POST['hazardratioos'];
                $cios=$_POST['cios'];
                $pfsmonth=$_POST['pfs'];
                $hazardratopfs=$_POST['hazardratiopfs']; 
                $cipfs=$_POST['cipfs'];
                $responserate=$_POST['responserate'];
                $comparedcontrol=$_POST['comparedcontrol'];
                $reference=$_POST['reference'];
                $whocantake=$_POST['whocantake'];
                $ebm=$_POST['ebm'];
                $evidencesource=$_POST['evidencesource'];
                $descriptioncn=$_POST['descriptionchinese'];
                $drug=$_POST['drug']; 
                $biomarker=$_POST['biomarker'];
                $clinicalinformation=$_POST['clinicalinformation'];
                $clinicalchineseinformation=$_POST['clinicalchineseinformation'];
                $sideeffects=$_POST['sideeffects'];
                $lastupdated=$_POST['lastupdated'];
                $operator=$_POST['operator'];
               
                $genes=new \Model\GenesModel();
                $genes->DiseaseName=$diseasename;
                $genes->DiseaseSubType=$diseasesubtype;
                $genes->DiseaseStage=$diseasesubtype;
                $genes->DrugCategory=$drugcategory;
                $genes->Ranking=$ranking;
                $genes->Status=$status;
                $genes->OS_month=$osmonth;
                $genes->HazardRatio_OS=$hazardratoos;
                $genes->CI_OS=$cios;
                 $genes->PFSMonth=$pfsmonth;
                $genes->HazardRatio_PFS=$hazardratopfs;
                $genes->CI_PFS=$cipfs;
                $genes->ResponseRate=$responserate;
                $genes->ComparedControl=$comparedcontrol;
                $genes->Reference=$reference;
                $genes->WhoCanTake=$whocantake;
                $genes->EBMlevels=$ebm;
                $genes->EvidenceSource=$evidencesource;
                 $genes->Description_Chinese=$descriptioncn;
                $genes->Drug=$drug;
                $genes->Biomarker=$biomarker;
//                $genes->DrugName=$genetype;
//                $genes->Ranking=$chromosome;
//                $genes->Mutation=$strand;
                $genes->ClinicalInformation=$clinicalinformation;
                $genes->ClinicalChineseInformation=$clinicalchineseinformation;
                $genes->SideEffects=$sideeffects;
                $genes->LastUpdated=$lastupdated;
                $genes->Operator=$operator;
                
                $z=$genes->table('sw_treatment')->where('ID='.$id)->save();
                if($z){
                   $this->redirect('treatment_add',array('DiseaseName'=>$genes_id),2,修改数据成功);

                }else{
                   echo "<font color='red'>修改数据失败！</font>";
                   $this->display();
                }
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
        function treatment_xiugai($id){
            session_start();
            if($_SESSION['admin_name']){
             $genes=D('Genes');
               /*  //两个逻辑:展示、收集
                if(!empty($_POST)){
                     $z= $genes->talbe('sw_treatment')->update($_POST);
                     if($z){
                       //页面跳转 用redirect()方法进行添加
                       //$this->redirect(操作方法，参数，延迟时间，提示信息);
                       $this->redirect('treatment_search',array(),3,'修改商品成功');
                   }  else {
                       $this->redirect('treatment_add',array('ID'=>$genes_id),3,'修改商品失败');
                   }

                }else{ */
                 //根据$goods_id获得被修改的商品信息，并给模板展示
                //find()方法值负责给返回一条记录结果，并且是[一维]数组返回
                $where['ID']=array('eq',$id);
                $info=$genes->table('sw_treatment')->where($where)->find();

                $this->assign('info',$info);
                $this->display();
                 // }
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
        function treatment_delete(){
            session_start();
            if($_SESSION['admin_name']){
                 $string=$_GET['newIdDelet'];
                //dump($string);
                $genes=new \Model\GenesModel();
                $info=$genes->table('sw_treatment')->where('ID='.$string)->delete();
                if($info!=false){

                       $this->redirect('treatment_search','',2,删除数据成功);
                }else{
                        echo "<script>alert(失败);</script>";
                }
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }



        //①③参考文献
        function reference_search(){
            session_start();
            if($_SESSION['admin_name']){
                //数据查询操作
                $genes=new \Model\GenesModel();
                $info=$genes->table('sw_reference')->select();
                $total=sizeof($info);
                $per=7;
                //2.实例化分页对象
                $page_obj=new \Tools\Page($total,$per);
                //3.自定义sql语句，获得每页信息
                $sql=" select * from sw_reference ".$page_obj->limit;
                $info=$genes->query($sql);
                //dump($info);
                //4.获得页码列表
                $pagelist=$page_obj->fpage();
                //把获得的信息传递给模板使用
                $this->assign('pagelist',$pagelist);
                $this->assign('info',$info);
                $this->display();
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
        function reference_search1(){
            session_start();
            if($_SESSION['admin_name']){
                $id=$_POST['id'];
                $articletitle=$_POST['articletitle'];
                $genes=new \Model\GenesModel();
                $where['GeneSymbol']=array('like',$id.'%');
                $where['ArticleTitle']=array('like',$articletitle.'%');
                $info=$genes->table('sw_reference')->where($where)->select();

                $this->assign('info',$info);
                $this->display();
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }

        }
        function reference_add(){
            session_start();
            if($_SESSION['admin_name']){
                $this->display();
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
        function reference_add1(){
            session_start();
            if($_SESSION['admin_name']){
                $articletitle=$_POST['articletitle'];
                $category=$_POST['category'];
                $diseasetype=$_POST['diseasetype'];
                $author=$_POST['author'];
                $drug=$_POST['drug'];
				$biomarker=$_POST['biomarker'];
                $year=$_POST['year'];
            
                $referencetype=$_POST['referencetype'];
                $pubmedid=$_POST['pubmedid'];
                $journal=$_POST['journal'];
   


                $genes=new \Model\GenesModel();
                $genes->ArticalTitle=$articletitle;
                $genes->Category=$category;
                $genes->DiseaseType=$diseasetype;
                $genes->Drug=$drug;
                $genes->Biomarker=$biomarker;
                $genes->Author=$author;
                $genes->Year=$year;
				$genes->Year=$year;
                $genes->Journal=$journal;
                $genes->PubmedID=$pubmedid;

                $z=$genes->table('sw_reference')->add();
                if($z){
                   $this->redirect('reference_add',array('ArticleTitle'=>$genes_id),2,添加数据成功);

                }else{
                   echo "<font color='red'>添加数据失败！</font>";
                   $this->display();
                }
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
            
        }
		function reference_update(){
            session_start();
            if($_SESSION['admin_name']){
				$id=$_POST['id'];
               $articletitle=$_POST['articletitle'];
                $category=$_POST['category'];
                $diseasetype=$_POST['diseasetype'];
                $author=$_POST['author'];
                $drug=$_POST['drug'];
				$biomarker=$_POST['biomarker'];
                $year=$_POST['year'];
            
                $referencetype=$_POST['referencetype'];
                $pubmedid=$_POST['pubmedid'];
                $journal=$_POST['journal'];
   


                $genes=new \Model\GenesModel();
                $genes->ArticalTitle=$articletitle;
                $genes->Category=$category;
                $genes->DiseaseType=$diseasetype;
                $genes->Drug=$drug;
                $genes->Biomarker=$biomarker;
                $genes->Author=$author;
                $genes->Year=$year;
				$genes->Year=$year;
                $genes->Journal=$journal;
                $genes->PubmedID=$pubmedid;

                $z=$genes->table('sw_reference')->where('ID='.$id)->save();
                if($z){
                   $this->redirect('reference_add',array('ArticleTitle'=>$genes_id),2,修改数据成功);

                }else{
                   echo "<font color='red'>修改数据失败！</font>";
                   $this->display();
                }
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
            
        }
        function reference_xiugai($id){
            session_start();
            if($_SESSION['admin_name']){
             $genes=D('Genes');
               /*  //两个逻辑:展示、收集
                if(!empty($_POST)){
                     $z= $genes->talbe('sw_reference')->save($_POST);
                     if($z){
                       //页面跳转 用redirect()方法进行添加
                       //$this->redirect(操作方法，参数，延迟时间，提示信息);
                       $this->redirect('reference_search',array(),3,'修改商品成功');
                   }  else {
                       $this->redirect('reference_add',array('ArticleTitle'=>$genes_id),3,'修改商品失败');
                   }

                }else{ */
                 //根据$goods_id获得被修改的商品信息，并给模板展示
                //find()方法值负责给返回一条记录结果，并且是[一维]数组返回
                $where['ID']=array('eq',$id);
                $info=$genes->table('sw_reference')->where($where)->find();

                $this->assign('info',$info);
                $this->display();
                  //}
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
            
        }
        function reference_delete(){
            session_start();
            if($_SESSION['admin_name']){
                $string=$_GET['newIdDelet'];
                //dump($string);
                $genes=new \Model\GenesModel();
                $info=$genes->table('sw_reference')->where('ID='.$string)->delete();
                if($info!=false){

                       $this->redirect('reference_search','',2,删除数据成功);
                }else{
                        echo "<script>alert(失败);</script>";
                }   
            }else{
                echo "<script>window.top.location.href='../Manager/login.html';</script>";
            }
        }
        
        
        
}     
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
       
    