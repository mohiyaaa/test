<?php

$conn=new MySQLi("localhost","root","","testt");
mysqli_select_db($conn,"testt");
$response=array();
if($result = mysqli_query($conn,"SELECT * FROM `id` ")){
	$row_cnt = $result->num_rows;
	printf("Result set has %d rows.\n", $row_cnt);

	
  while($row = $result->fetch_array(MYSQLI_BOTH)){
    $temp=array();
    $temp['name']=$row['name'];
    $response["travel"]=array();
    array_push($response["travel"],$temp);
  }
  $response["t"]=1;
  echo json_encode($response);
}

else{
  $response["t"]=0;
  $response["message"]="not found";
  echo json_encode($response);
}
return $response;
$result->close();
$conn->close();

?>
