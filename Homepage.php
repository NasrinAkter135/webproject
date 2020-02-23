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
        
          <button onclick="myFunction()" class=sbutton1>Signup</button>
          <button onclick="myFunction()" class=sbutton1>Login</button>
         
        
    </div> 
       <form>     
        <div>
        
            <button  id="btn1"><span  class = "glyphicon glyphicon-map-marker"></span></button>
            <input type = "search" placeholder = "Search Area" id="search1">
            <button id="btn2"><span class = "glyphicon glyphicon-search"></span></button>
             <input type = "search" placeholder = "Search by Doctor Name,specialty " id="search1" >
            <button  id="btn2"><span  class = "
glyphicon glyphicon-question-sign"></span></button>
        
           <button id="btn3">Search</span></button>
        </div>
        </form>
    </body>





</html>