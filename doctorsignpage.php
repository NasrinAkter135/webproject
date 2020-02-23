<?php include 'inc/header.php';?>
<!DOCTYPE html>
<html lang="en-US">
<head>
     <meta charset="utf-8">
     <title>Sample Page</title>
     <link rel="stylesheet" href="doctorsignpagedesign.css">
     

</head>
<body> 

  <form action="doctorsignpage.php" method="POST" target="_self">

       <h2 id="text1">Doctor Information<br>FillUp The Form!!!<br> </h2>
        <input type="text" id="name" name="name" placeholder="Doctor's Name :">
        <input type="text" id="name" name="designation" placeholder="Designation :">
        <input type="text" id="name" name="expertise" placeholder="Expertise :">
        <input type="text" id="name" name="qualification" placeholder="Qualification :">
        <input type="text" id="name" name="organization" placeholder="Organization :">
        <input type="text" id="name" name="chamber" placeholder="Chamber :">
        <input type="text" id="name" name="address" placeholder="Address:">
        <input type="text" id="name" name="contact" placeholder="Contact Number:">
        <input type="text" id="name" name="email" placeholder="Email:">
        <input type="text" id="name" name="password" placeholder="Password:">
       <input type="text" id="name" name="location"  placeholder="Location:">

        <br>
        <input type="submit" value="click me to submit"id="submitbtn">
        
    </form>
    <?php
    
        if($_SERVER['REQUEST_METHOD']=="GET"){
            /// nothing to do
        }
        else if($_SERVER['REQUEST_METHOD']=="POST"){
            
            $name=$designation=$expertise=$qualification=
            $organization=$chamber=$address=$contact=$email=$location=
            $password="";
            
            if(isset($_POST['name'])) $name=$_POST['name'];
            if(isset($_POST['designation'])) $designation=$_POST['designation'];
            if(isset($_POST['expertise'])) $expertise=$_POST['expertise'];
            if(isset($_POST['qualification'])) $qualification=$_POST['qualification'];
            if(isset($_POST['organization'])) $qualification=$_POST['organization'];
            if(isset($_POST['chamber'])) $chamber=$_POST['chamber'];
            if(isset($_POST['address'])) $chamber=$_POST['address'];
            if(isset($_POST['contact'])) $chamber=$_POST['contact'];
            if(isset($_POST['email'])) $chamber=$_POST['email'];
            
            if(isset($_POST['password'])) $chamber=$_POST['password'];
            if(isset($_POST['location'])) $chamber=$_POST['location'];
             try{
                $conn=new PDO("mysql:host=localhost;dbname=db_app;",'root','');
                echo "<script>console.log('connection successful');</script>";
                
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e){
                echo "<script>window.alert('connection error');</script>";
            }
            
            try{
                $sqlquery="INSERT INTO tbl_doctor(Name,Designation,Expertise,Qualification,Organization,Chamber,Address,Contact,Email,Password,Location) VALUES ('$name', '$designation', '$expertise','$qualification','$organization','$chamber','$address','$contact','$email','$password','location')";

                $conn->exec($sqlquery);
                echo "<script>window.alert('insertion successful');</script>";
            }
            catch(PDOException $e){
                echo "<script>window.alert('insertion error');</script>";
            }
            
            
        }
    
    ?>
    
      
   
        

 </body>
</html>