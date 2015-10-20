<?php
require_once 'db_connect.php';

$username=$_POST['username'];
$pass=$_POST['password'];

$db= new DB_CONNECT();
$result=mysql_query("SELECT * FROM details WHERE username='$username' AND password='$pass'") or die("not a valid user");
 $res=mysql_fetch_row($result);
   if($res)
   {
   	echo "welcome ".$username;
   }
   else
   {
    header("Location: /login");
   }





?>