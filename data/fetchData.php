<?php
include "config.php";
if(isset($_POST['buscar'])){
 $search = mysqli_real_escape_string($con,$_POST['buscar']);
 $query = "SELECT * FROM cyb_users WHERE username like'%".$search."%'";
 $result = mysqli_query($con,$query);
 $response = array();
 while($row = mysqli_fetch_array($result) ){
   $response[] = array("value"=>$row['ID'],"label"=>$row['username']);
 }
 echo json_encode($response);
}
exit;
