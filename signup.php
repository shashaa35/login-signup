<?php
require_once 'db_connect.php';

$user=$_POST['usernamesignup'];
$email=$_POST['emailsignup'];
$pass=$_POST['passwordsignup'];

$db=new DB_CONNECT();
$result=mysql_query("INSERT INTO details values('$user','$email','$pass')") or die(mysql_error());
if($result>0) echo "done";
?>