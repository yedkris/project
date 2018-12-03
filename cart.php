<?php		
 include 'conect.php';
 session_start();
  $s=$_GET['id'];
//updation
mysql_query("update  reg1 set status='1' where id='$s'");

header('location:userhome.php');  
?>

