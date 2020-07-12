<?php
$username="root";
$password="";
$servername="localhost";
$dbname="databasevalidation";
$user=$_POST["u1"];
$pass=$_POST["p1"];
$connect=new mysqli($servername,$username,$password,$dbname);
$sql="select * from loginInfo
    where username='$user' and password='$pass'";
	 $result=$connect->query($sql);
	 if(mysqli_num_rows($result)==TRUE)
	 {
	 echo "Welcome";
	 include 'CallTest.html';
	}
     else
	 echo "Invalid id and password";
?>