<!DOCTYPE html>
<html lang="en-US">
<head>
     <meta charset="utf-8">
     <title>Sample Page</title>
     <link rel="stylesheet" href="doctorsignpagedesign.css">
     

</head>
<body> 

  <form action="doctorreg.php" method="POST" target="_blank">

       <h2 id="text1">Doctor Information<br>FillUp The Form!!!<br> </h2>
        <input type="text" id="name" name="name" placeholder="Doctor's Name :">
        <input type="text" id="name" name="design" placeholder="Designation :">
        <input type="text" id="name" name="expert" placeholder="Expertise :">
        <input type="text" id="name" name="quali" placeholder="Qualification :">
        <input type="text" id="name" name="organ" placeholder="Organization :">
        <input type="text" id="name" name="chamber" placeholder="Chamber :">
        <input type="text" id="name" name="address" placeholder="Address:">
        <input type="text" id="name" name="area" placeholder="Area:">
        <input type="text" id="name" name="contact" placeholder="Contact Number:">
        <input type="text" id="name" name="email" placeholder="Email:">
        <input type="text" id="name" name="password" placeholder="Password:">
        <br>
        <input type="submit" value="click me to submit"id="submitbtn">
        
        
    </form>
 <?php
    
        if($_SERVER['REQUEST_METHOD']=="GET"){
             echo "i am here";
            ///nothing to do
        
        }
        else if($_SERVER['REQUEST_METHOD']=="POST"){
             echo "not here";
            $name=$design=$expert=$quali=$organ=$chamber=$address=$area=$contact=$email=$password="";
            if(isset($_POST['name'])) $name=$_POST['name'];
            if(isset($_POST['design'])) $design=$_POST['design'];
            if(isset($_POST['expert'])) $expert=$_POST['expert'];
            if(isset($_POST['quali'])) $quali=$_POST['quali'];
            if(isset($_POST['organ'])) $organ=$_POST['organ'];
            if(isset($_POST['chamber'])) $chamber=$_POST['chamber'];
            if(isset($_POST['address'])) $address=$_POST['address'];
            if(isset($_POST['area'])) $address=$_POST['area'];

            if(isset($_POST['contact'])) $contact=$_POST['contact'];
            if(isset($_POST['email'])) $email=$_POST['email'];
            if(isset($_POST['password'])) $password=$_POST['password'];
            echo "$name";echo "$design";echo "$expert";echo "$quali";echo "$organ";echo "$chamber";echo "$address";echo "$contact";echo "$email";
            echo "$password";
            try{
                echo "inside database";
                $conn=new PDO("mysql:host=localhost:3306;dbname=db_app;",'root','');
                echo "<script>console.log('connection successful');</script>";
                $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                
            }
            catch(PDOException $e){
                 echo "not inside database";
                echo "<script>window.alert('connection error');</script>";
            }
            try
            {
                echo "inside query";
                $insertquery="INSERT INTO tbl_doctor(Name,Designation,Expertise,Qualification,Organization,Chamber,Address,Area,Contact,Email,Password) VALUES('$name','$design','$expert','$quali','$organ','$chamber','$address','$area','$contact','$email','$password')";
                echo "inside query";
                echo "$insertquery";
                $conn->exec($insertquery);
                    echo "<script>window.alert('insertion successful');</script>";
            }
             catch(PDOException $e){
                  echo " not inside query";
                echo "<script>window.alert('insertion error');</script>";
             }
        } 
    ?>
    
 </body>
</html>