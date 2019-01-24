<?php
if(isset($_REQUEST["upvote"])){
$up=$_REQUEST["upvote"];
//DB details
        $dbHost     = 'localhost';
        $dbUsername = 'phpmyadmin';
        $dbPassword = 'maymaystone';
        $dbName     = 'phpmyadmin';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
$uparr=explode (",", $up); 
$upvote = $uparr[0];
$id = $uparr[1];
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
$insert = $db->query("UPDATE images SET upvotes=".$upvote." WHERE id=".$id);
if($insert){
             echo "success";
        }else{
            echo "File upload failed, please try again.";
        } 

}

else if(isset($_REQUEST["delete"])){
//DB details
        $dbHost     = 'localhost';
        $dbUsername = 'phpmyadmin';
        $dbPassword = 'maymaystone';
        $dbName     = 'phpmyadmin';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
$del_id=$_REQUEST["delete"];
$del = $db->query("DELETE FROM images WHERE id=".$del_id);
if($del){
             echo "deleted";
        }else{
            echo "File upload failed, please try again.";
        } 
}
?>
