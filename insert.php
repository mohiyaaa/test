<?php
   
   $name =$_POST['name'];
    //$name1 = json_decode($json);
	//$name= $name1->{'name'};
    $conn=new MySQLi("Localhost","root","","testt");
    mysqli_select_db($conn,"testt");
	$query="INSERT INTO `id`(`name`) VALUES ('".$name."');";
	mysqli_query($conn,$query);
    $conn->close();
   
?>
