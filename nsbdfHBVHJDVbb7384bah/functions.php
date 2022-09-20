<?php

function dbconnection(){
   $connection= pg_connect("host=ec2-54-228-32-29.eu-west-1.compute.amazonaws.com port=5432 dbname=d2tabic1oqerhr user=ldsozkkavuowkz
 password=ed6b2669f4f9f09dcc806040ed8cf1d5df9ea152a22cf07bcecd2769d5ef76ed");
        if($connection == NULL){
            echo "Please check your DB connecttion";
        }else{
        return $connection;
        } 
}
function selectfun($query=null,$var=null){
    if($query==null && $var==null){
       $sql="SELECT * FROM main";
       $result= pg_query(dbconnection(), $sql);
       
       return $result;
    }else{
    
            $sql = "SELECT * FROM main WHERE $query ='".$var."'";
            $result = pg_query(dbconnection(),$sql);
            
            return $result;    
    }
}



