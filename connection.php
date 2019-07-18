$conn=new MySQLi("localhost","root","","test");
mysqli_select_db($conn,"test");
mysqli_query($conn,"SELECT * FROM `id` ");
