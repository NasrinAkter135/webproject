<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="utf-8">
      <title>Appointment booking system </title>
       <meta name="viewport" content="width=device-width, initial-scale=1"> <!--botstrap library--->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
       <link rel="stylesheet" href="csspage.css">
       <script>
        function myFunction() {
        location.replace("signuppage.php")
     }
    </script>
</head>
   
    
    <body>
         <div>
        
          <button onclick="myFunction()" class=slbutton>Signup</button>
          <button onclick="myFunction()" class=slbutton>Login</button>
         
        
    </div>      
       
        
            <button  id="locationbtn"><span  class = "glyphicon glyphicon-map-marker"></span></button>
            <input type = "search" name="sarea" placeholder = "Search Area" id="areasearch">
            <button id="searchbtn"><span class = "glyphicon glyphicon-search"></span></button>
             <input type = "search" name="namesearch" placeholder = "Search by Doctor Name,specialty " id="namesearch" >
            <button  id="searchbtn"><span  class = "
glyphicon glyphicon-question-sign"></span></button>
        
           <button id="btn3">Search</button>
        
           
            <table style="width:100%;">
                 <tbody id="tablebody">
                
             
                </tbody>
            </table>
           
          
    <script> 
            var searchbtn=document.getElementById("namesearch");
            searchbtn.addEventListener("keyup",ajaxfn);
            function ajaxfn(){
                var searchvalue=searchbtn.value;
                var ajaxreq=new XMLHttpRequest();
ajaxreq.open('GET','ajaxserve.php?namesearch='+searchvalue);
                
                ajaxreq.onreadystatechange=function (){
if(ajaxreq.readyState==4 && ajaxreq.status==200){
        var responsecode=ajaxreq.responseText;
        var tablebody=document.getElementById('tablebody');
    
        tablebody.innerHTML=responsecode;
                        
                    }
                };
                
                
                ajaxreq.send();
                
            }
        </script>
</body>

</html>