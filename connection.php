$conn=new MySQLi("127.0.0.1","root","","test");
mysqli_select_db($conn,"test");
mysqli_query($conn,"SELECT * FROM `id` ");
