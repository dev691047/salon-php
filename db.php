<?php

class db{
    protected $connection;
    function setconnection(){
        try{
                 $this->connection=new PDO("mysql:host=localhost;dbname=salon_php","root","");
                //  echo "connection done";
                }
        catch(PDOException $e){
            echo"error";
              
        }
    }
}