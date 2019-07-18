<?php

$conn=new MySQLi("localhost","root","","test");
mysqli_select_db($conn,"test");
$response=array();
$result=mysqli_query($conn,"SELECT * FROM `id` ");
if(MySQLi_num_rows($result)>0){
  while($row=MySQLi_fetch_array($result)){
    $temp=array();
    $temp["name"]=$row["name"];
    $response["travel"]=array();
    array_push($response["travel"],$temp);
  }
  $response["t"]=1;
  echo json_encode($response);
}else{
  $response["t"]=0;
  $response["message"]="not found";
  echo json_encode($response);
}

?>
