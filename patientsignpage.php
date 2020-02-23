<!DOCTYPE html>
<html lang="en-US">
<head>
     <meta charset="utf-8">
     <title>Sample Page</title>
     <link rel="stylesheet" href="patientsignpagedesign.css">
     

</head>
<body> 

  <form action="index1.php" method="POST" target="_blank">
    <div>
       <h2 id="text1">Patient's Information<br>FillUp The Form!!!<br> </h2>
        <input type="text" id="name" name="name" placeholder="Patient's Name :">
        <input type="text" id="name" name="age" placeholder="Patient's Age :">
        <input type="text" id="name" name="gender" placeholder="Gender:">
        <input type="text" id="name" name="status" placeholder="Married Status :">
        <input type="text" id="name" name="address" placeholder="Address:">
       
        <input type="text" id="name" name="contact" placeholder="Contact Number:">
        <input type="text" id="name" name="email" placeholder="Email:">
       
        <input type="text" id="name" name="password" placeholder="Password:">
        <br>
        <input type="submit" value="click me to submit"id="submitbtn">
         </div>
     </form>
    <?php
    
        if($_SERVER['REQUEST_METHOD']=="GET"){
             echo "i am here";
            ///nothing to do
        
        }
        else if($_SERVER['REQUEST_METHOD']=="POST"){
             echo "not here";
            $name=$age=$gender=$status=$address=$contact=$email=$password="";
            if(isset($_POST['name'])) $name=$_POST['name'];
            if(isset($_POST['age'])) $age=$_POST['age'];
            if(isset($_POST['gender'])) $gender=$_POST['gender'];
            if(isset($_POST['status'])) $status=$_POST['status'];
            if(isset($_POST['address'])) $address=$_POST['address'];
            if(isset($_POST['contact'])) $contact=$_POST['contact'];
            if(isset($_POST['email'])) $email=$_POST['email'];
            if(isset($_POST['password'])) $password=$_POST['password'];
            try{
                $conn=new PDO("mysql:host=localhost;dbname=db_app;",'root','');
                echo "<script>console.log('connection successful');</script>";
                $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                
            }
            catch(PDOException $e){
                 
                echo "<script>window.alert('connection error');</script>";
            }
            try
            {
               
                $insertquery="INSERT INTO tbl_patient(Name,Age,Gender,Mstatus,Address,Contact,Email,Password) VALUES('$name','$age','$gender','$status','$address','$contact','$email','$password')";
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