<?php
   
   $json =''.$_GET["name"];
    $name1 = json_decode($json);
	$name= $name1->{'name'};
	echo $name;
    $conn=new MySQLi("localhost","root","","testt");
    mysqli_select_db($conn,"testt");
	$query="INSERT INTO `id`(`name`) VALUES ('".$name."');";
	mysqli_query($conn,$query);
    $conn->close();
   
?>
