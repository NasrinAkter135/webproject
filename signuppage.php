<!DOCTYPE html>
<html lang="en-US">
<head>
     <meta charset="utf-8">
     <title>Sample Page</title>
     <script src="script.js" defer></script>
     <link rel="stylesheet" href="signpagedesign.css">
     <script>
        function Doctorsignpage() {
        location.replace("doctorreg.php")
     }
        function Patientsignpage() {
        location.replace("patientsignpage.php")
     }
    </script>

</head>
<body> 
    <div>
       <h2 id="text1">Welcome To Signuppage!!!<br>Choose Your Signup Option</h2>
       <input type=button onclick="Doctorsignpage()" class="doctorsign" id="sign1" value="Signup As A Doctor">
      <input type=button  onclick="Patientsignpage()"class="patientsign" id="sign2" value="Signup As A Patient">
    </div>
        

 </body>
</html>