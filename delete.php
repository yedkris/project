<?php		
 include 'conect.php';
 session_start();
  $s=$_GET['id'];
mysql_query("update  reg1 set status='0' where id='$s'");

header('location:userhome.php');  

?>

