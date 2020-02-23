<?php

$searchval="";

if(isset($_GET['namesearch'])){
    $searchval=$_GET['namesearch'];
}

try{
    $conn=new PDO("mysql:host=localhost:3306;dbname=db_app",'root','');
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $ex){

}

try{
    $searchquery=
    "SELECT * FROM tbl_doctor WHERE Name LIKE '%$searchval%'";
    $object=$conn->query($searchquery);
    $table=$object->fetchAll();
    
    if($object->rowCount()==0){
        echo "<tr><td colspan='6' style='text-align:center'>No Data Found!!!!!!</td></tr>";
    }
    else{
        $tablerows="";
        foreach($table as $row){
            $tablerows.="<tr>  <td>$row[0]</td>  <td>$row[3]</td>     <td>$row[5]</td><td>$row[7]</td><td>$row[8]</td> </tr>"; 
            
        }
        
        echo $tablerows;
    }
    
}
catch(PDOException $e){
    
}

?>