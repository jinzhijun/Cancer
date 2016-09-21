 var urlpath="/Cancer/hospital/index.php/Home/User";
    //ajax无刷新方式校验用户名
     function checkname(){
         //1.获取被校验的用户名信息
         var nm=document.getElementById('User_username').value;
         if(nm==''){
             window.alert("用户名不能为空");
             
         }else{
         //2.ajax抓取到用户名传递给服务器端校验
         var xhr=new XMLHttpRequest();
         xhr.onreadystatechange=function(){
             if(xhr.readyState==4){
                
                 document.getElementById('namecheck').innerHTML=xhr.responseText;
                 
             }
        }
         //tp框架使用模式 :分组/控制器/操作方法
         xhr.open('get',urlpath+'/checkNM/name/'+nm);
         xhr.send(null);
     }
    }

    //ajax无刷新方式校验邮箱
    function checkemail(){
        //1.获取被校验的用户名信息
         var em=document.getElementById('User_email').value;
        if(em==''){
            window.alert("邮箱不能为空");
        }else{
         //2.ajax抓取到用户名传递给服务器端校验
           var xhr=new XMLHttpRequest();
         xhr.onreadystatechange=function(){
             if(xhr.readyState==4){               
                 document.getElementById('emailcheck').innerHTML=xhr.responseText;
             }
                 
             }
        
         //tp框架使用模式 :分组/控制器/操作方法
         xhr.open('get',urlpath+'/checkEmail/email/'+em);
         xhr.send(null);
     }
  
    }
    
    
    //ajax无刷新方式校验手机号
    function checkphone(){
        //1.获取被校验的用户名信息
         var ph=document.getElementById('User_tel').value;
        if(ph==''){
            window.alert("手机号不能为空");
        }else{
         //2.ajax抓取到用户名传递给服务器端校验
           var xhr=new XMLHttpRequest();
         xhr.onreadystatechange=function(){
             if(xhr.readyState==4){               
                 document.getElementById('phonecheck').innerHTML=xhr.responseText;
             }
                 
             }
        
         //tp框架使用模式 :分组/控制器/操作方法
         xhr.open('get',urlpath+'/checkPhone/phone/'+ph);
         xhr.send(null);
     }
  
    }