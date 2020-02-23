<?php

$namevalue="";

if(isset($_GET['sname'])){
    $namevalue=$_GET['sname'];
}

try{
    $conn=new PDO("mysql:host=localhost:3306;dbname=db_app",'root','');
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $ex){

}

try{
    $searchquery=
    "SELECT * FROM tbl_doctor WHERE Name LIKE '%$namevalue%'";
    $object=$conn->query($searchquery);
    $table=$object->fetchAll();
    
    if($object->rowCount()==0){
        echo "<li>No Data Found!!!!!!</td></li>";
    }
    else{
        $tablerows="";
        foreach($table as $row){
            $tablerows.="<tr>  <td>$row[0]</td>  <td>$row[2]</td>     <td>$row[3]</td>    <td>$row[5]</td><td>$row[7]</td><td>$row[8]</td>     
            
           <!-- <td><input type='button' value='Update' onclick='updatedata($row[0]);'><input type='button' value='Delete' onclick='deleterow($row[0]);'></td>-->
           </tr>";
        }
        
        echo $tablerows;
    }
    
}
catch(PDOException $e){
    
}

?>