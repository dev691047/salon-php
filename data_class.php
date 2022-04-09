<?php
session_start();
include("db.php");

class data extends db{

    function __construct(){
        // echo"working";
    }
    function adminLogin($t1,$t2){
        
        $q="SELECT * From admin where email='$t1' and pass='$t2'";
        $recordSet=$this->connection->query($q);
        $result=$recordSet->rowCount();

        if($result>0){
            foreach($recordSet->fetchALL() as $row){
                $logid=$row['id'];
                $_SESSION["adminid"]=$logid;
            }
            header("Location:admin_service_dashboard.php?");
        }
        elseif($result<=0){
            header("Location:index.php?msg=Invalid Credentials");
        }
         

    }
    function addnewuser($addnames,$addpass,$addemail){

        $this->name=$name;
        $this->password=$password;
        $this->email=$email;
        $q="INSERT INTO userdata(id,name,email,pass)VALUES('','$name','$email','$password')";
       
         if($this->connection->exec($q)){
            header("Location:admin_service_dashboard.php?msg=New add done");
         }
     



    }
}